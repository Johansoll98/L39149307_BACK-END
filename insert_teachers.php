<?php
include 'db_connection.php';
if (isset($_POST['submit'])) {
    $Teacher_name = $_POST['Teacher_name'];
    $Teacher_address = $_POST['Teacher_address'];
    $Teacher_email = $_POST['Teacher_email'];
    $Teacher_phone = $_POST['Teacher_phone_number'];
    $salary = $_POST['Annual_salary_£'];
    $background = $_POST['Background_check'];
    $Teacher_class_ID = $_POST['Class_ID'];

    $sql = "INSERT INTO `teachers` (Teacher_name, Teacher_address, Teacher_email, Teacher_phone_number, Annual_salary_£, Background_check, Class_ID)
            VALUES ('$Teacher_name', '$Teacher_address', '$Teacher_email', '$Teacher_phone', '$salary', '$background', '$Teacher_class_ID')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:display_teachers.php');
    } else {
        die(mysqli_error($con));
    }
}
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Teachers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Teacher Name</label>
                <input type="text" class="form-control" placeholder="Enter the name" name="Teacher_name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Enter the address" name="Teacher_address" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter the email" name="Teacher_email" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" placeholder="Enter the phone number" name="Teacher_phone_number" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Annual Salary £</label>
                <input type="text" class="form-control" placeholder="Enter the salary" name="Annual_salary_£" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Background check</label>
                <input type="text" class="form-control" placeholder="Enter the background" name="Background_check" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Class ID (100-106)</label>
                <input type="text" class="form-control" placeholder="Enter the ID" name="Class_ID" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>