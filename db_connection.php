<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "Johansoll";
$database = "st_alphonsus_primary_school";

$con = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$con) {
    die(mysqli_error($con));
}
