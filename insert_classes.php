<?php
include 'db_connection.php';
if (isset($_POST['submit'])) {
    $Class_name = $_POST['Class_name'];
    $Class_capacity = $_POST['Class_capacity'];
    $Class_teacher_ID = $_POST['Teacher_ID'];

    $sql = "INSERT INTO `classes` (Class_name, Class_capacity, Teacher_ID)
            VALUES ('$Class_name', $Class_capacity, $Class_teacher_ID)";

    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:display_classes.php');
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
    <title>Insert Classes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Class Name</label>
                <input type="text" class="form-control" placeholder="Enter the name" name="Class_name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Class capacity</label>
                <input type="text" class="form-control" placeholder="Enter the capacity" name="Class_capacity" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Teacher ID (1-7)</label>
                <input type="text" class="form-control" placeholder="Enter the ID" name="Teacher_ID" autocomplete="off">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>