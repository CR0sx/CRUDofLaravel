before clone this project, make sure you install all the prerequisites:
1. php 7.1 or higher
2. composer
3. MySql (or anything you familiar with, SQL based;i build this API with mysql)
4. laravel 8.15 (latest)
5. postman (for testing)

how to use:
1. clone this project

2. create a database first (remember that your database name) 

3. go to project directory, find .env file, then edit like this;
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=(your_database_name) //laravel_crud_api by default
    DB_USERNAME=(your_database_username) //just leave it blank if you not configure any username
    DB_PASSWORD=(your_database_password) //same like username, just leave it blank if you not configure any password
    
4. run command "php artisan migrate" on your CLI (make sure you run it on project directory)

5. wait and if everything goes well, run "php artisan serve" and you good to go!

how to test with postman:
In this API, there are consist of 7 route with different function (CRUD function). This project is all about student with their course, so i set 2 coloumn (name and course) in the table. You can see all of API route on api.php

1. createStudent()
    -go to postman, set request to "POST"
    -fill the URL with "http://localhost:8000/api/student/add"
    -on the Params tab fill the key and the value, click send, example: 
        -key: name, value: lucas
        -key: course, value: math
    -if everything goes well, the result show that input data
2. getAllStudent()
    -set request to "GET"
    -fill the URL with "http://localhost:8000/api/student/all"
    -click send
    -the result show all data in your database
3. getStudent($id)
    -set request to "GET"
    -fill the url with "http://localhost:8000/api/student/id/{id}"
    -change "{id}" with id number on your database
    -the result show data on requested id
4. searchStudentName() and searchStudentCourse()
    -set request to "GET"
    -fill the url with "http://localhost:8000/api/student/search/name/" (for name) or "http://localhost:8000/api/student/search/course/" (for course)
    -on the params tab fill the key with "search" and value with string you want to search, then click send
    -the result show data with all matched string
5. editStudent($id)
    -set request to "PUT"
    -fill the url with "http://localhost:8000/api/student/edit/{id}"
    -change "{id}" with id number on your database that you want to change
    -on the params tab fill key with "name" and "course", then fill "value" with string you want to change
    -the result show data has changed
6. deleteStudent($id)
    -set request to "DELETE"
    -fill the url with "http://localhost:8000/api/student/delete/id/{id}"
    -change "{id}" with id data you want to delete
    -click send
    -the result show data has been deleted
    
    
hope this API help you and THANK YOU!
    
