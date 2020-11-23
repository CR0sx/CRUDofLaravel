<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{ 
        //create student 
        public function createStudent(Request $request) {
            $student = new Student;
            $student->name = $request->name;
            $student->course = $request->course;
            $student->save();

            return response()->json([
                'status' => true,
                'data' => $student,
                'message' => 'student added'
            ]);
        }
    
        //get all student
        public function getAllStudent() {
            return Student::all();
        }

        //get student by ID
        public function getStudent($id) {
            if (Student::where('id', $id)->exists()) {
                $student = Student::where('id', $id)->get();
                
                return response()->json([
                    'status' => true,
                    'data' => $student,
                    'message' => 'student found'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'student not found'
                ]);
            }
        }

        //search column name by matched string
        public function searchStudentName(Request $request){
            $search = $request->search;
            if ($request != NULL) {
                $student = Student::where('name', 'like', '%'.$search.'%')->get();
                return response()->json([
                    'status' => true,
                    'data' => $student,
                    'message' => 'search all with matched name'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'this cannot be null'
                ]);
            }
        }

        //search column course by matched string
        public function searchStudentCourse(Request $request){
            $search = $request->search;
            if ($request != NULL) {
                $student = Student::where('course', 'like', '%'.$search.'%')->get();
                return response()->json([
                    'status' => true,
                    'data' => $student,
                    'message' => 'search all with matched course'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'this cannot be null'
                ]);
            }
        }
    
        //update student by ID
        public function editStudent(Request $request, $id) {
            if (Student::where('id', $id)->exists()) {
                $student = Student::where('id', $id)->update([
                    'name' => $request->name,
                    'course' => $request->course
                ]);
                return response()->json([
                    'status' => true,
                    'message' => 'student updated'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'student not found'
                ]);
            }
        }
    
        //delete student by ID
        public function deleteStudent ($id) {
            if (Student::where('id', $id)->exists()) {
                $student = Student::where('id', $id)->delete();
                return response()->json([
                    'status' => true,
                    'message' => 'student deleted'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'student not found'
                ]);
            }
        }
    
}
