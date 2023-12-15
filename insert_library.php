<?php
include 'db_connection.php';
if (isset($_POST['submit'])) {
    $Book_title = $_POST['Book_title'];
    $Author = $_POST['Author'];
    $Publication_year = $_POST['Publication_year'];
    $Availability = $_POST['Availability'];
    $Library_pupil_ID = $_POST['Pupil_ID'];
    $Library_teacher_ID = $_POST['Teacher_ID'];

    $sql = "INSERT INTO `library` (Book_title, Author, Publication_year, Availability, Pupil_ID, Teacher_ID)
            VALUES ('$Book_title', '$Author', '$Publication_year', '$Availability', '$Library_pupil_ID', '$Library_teacher_ID')";

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
    <title>Insert Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Book title</label>
                <input type="text" class="form-control" placeholder="Enter the name" name="Book_title" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" class="form-control" placeholder="Enter the author" name="Author" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Publication year</label>
                <input type="text" class="form-control" placeholder="Enter the year" name="Publication_year" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Availability</label>
                <input type="text" class="form-control" placeholder="Yes/No" name="Availability" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Pupil ID</label>
                <input type="text" class="form-control" placeholder="Enter the ID" name="Pupil_ID" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Teacher ID</label>
                <input type="text" class="form-control" placeholder="Enter the ID" name="Teacher_ID" autocomplete="off">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>