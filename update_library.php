<?php
include 'db_connection.php';
$Library_ID = $_GET['updateid'];
$sql = "SELECT * FROM `library` WHERE Library_ID=$Library_ID";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$Library_ID = $row['Library_ID'];
$Book_title = $row['Book_title'];
$Author = $row['Author'];
$Publication_year = $row['Publication_year'];
$Availability = $row['Availability'];
$Library_pupil_ID = $row['Pupil_ID'];
$Library_teacher_ID = $row['Teacher_ID'];

if (isset($_POST['submit'])) {
    $Book_title = $_POST['Book_title'];
    $Author = $_POST['Author'];
    $Publication_year = $_POST['Publication_year'];
    $Availability = $_POST['Availability'];
    $Library_pupil_ID = $_POST['Pupil_ID'];
    $Library_teacher_ID = $_POST['Teacher_ID'];

    $sql = "UPDATE `library` SET Book_title='$Book_title', Author='$Author', Availability='$Availability', Pupil_ID=$Library_pupil_ID, Teacher_ID=$Library_teacher_ID
    where Library_ID=$Library_ID";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:display_library.php');
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
    <title>Update library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Book title</label>
                <input type="text" class="form-control" placeholder="Enter the name" name="Book_title" autocomplete="off" value=<?php echo $Book_title; ?>>
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" class="form-control" placeholder="Enter the author" name="Author" autocomplete="off" value=<?php echo $Author; ?>>
            </div>
            <div class="form-group">
                <label>Publication year</label>
                <input type="text" class="form-control" placeholder="Enter the year" name="Publication_year" autocomplete="off" value=<?php echo $Publication_year; ?>>
            </div>
            <div class="form-group">
                <label>Availability</label>
                <input type="text" class="form-control" placeholder="Yes/No" name="Availability" autocomplete="off" value=<?php echo $Availability; ?>>
            </div>
            <div class="form-group">
                <label>Pupil ID</label>
                <input type="text" class="form-control" placeholder="Enter the ID" name="Pupil_ID" autocomplete="off" value=<?php echo $Library_pupil_ID; ?>>
            </div>
            <div class="form-group">
                <label>Teacher ID</label>
                <input type="text" class="form-control" placeholder="Enter the ID" name="Teacher_ID" autocomplete="off" value=<?php echo $Library_teacher_ID; ?>>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>

</html>