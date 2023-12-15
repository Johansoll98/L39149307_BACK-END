--------------------
Database Configuration
--------------------
GITHUB eepository link
Overview:
This document provides instructions and details for configuring and running the project.
--------------------

Database Configuration:
- Server Name: localhost
- Username: root
- Password: Johansoll
- Database Name: st_alphonsus_primary_school

*In code:
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "Johansoll";
$database = "st_alphonsus_primary_school";

$con = new mysqli($servername, $username, $password, $database);

// Check connection
if(!$con){
    die(mysqli_error($con));
}
?>

db.connection.php

Typically "localhost" and "127.0.0.1" are the same, so if for some reason
database would prevent access, please try "127.0.0.1" as a server name ($servername) 

--------------------

Project Structure:
All project related files are stored in folder called:
"L39149307"
Developer accessed files by activating Apache and MySQL local
servers using XAMPP and then simply typing in the URL of Google (example):
http://localhost/L39149307/display_teachers.php 
or
localhost/L39149307/display_teachers.php
--------------------
Database consists of 6 tables:
Teachers
Classes
Pupils
Parents
Library
Pupils_Parents (junction table)

--------------------

Digital system (website) consists of:

Home (index.html)
Teachers (display_teachers.php)
	• insert_teachers.php
	• update_teachers.php
	• delete_teachers.php 
Classes (display_teachers.php)
	• insert_classes.php
	• update_classes.php
	• delete_classes.php
Pupils (display_pupils.php)
	• insert_pupils.php
	• update_pupils.php
	• delete_pupils.php
Parents (display_parents.php)
	• insert_parents.php
	• update_parents.php
	• delete_parents.php
Library (display_library.php)
	• insert_library.php
	• update_library.php
	• delete_library.php
Pupils-Parents (display_pupils_parents.php)
	• insert_pupils_parents.php
	• update_pupils_parents.php
	• delete_pupils_parents.php
About (about.html)

Additional links: 
db_connection.php
navigation.php
--------------------

All files are capable of inserting, updating, deleting data from database.




