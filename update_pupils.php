<?php
include 'db_connection.php';
$Pupil_ID = $_GET['updateid'];
$sql = "SELECT * FROM `pupils` WHERE Pupil_ID=$Pupil_ID";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$Pupil_ID = $row['Pupil_ID'];
$Pupil_name = $row['Pupil_name'];
$Pupil_address = $row['Pupil_address'];
$Med_info = $row['Pupil_medical_information'];
$Pupil_class_ID = $row['Class_ID'];

if (isset($_POST['submit'])) {
    $Pupil_name = $_POST['Pupil_name'];
    $Pupil_address = $_POST['Pupil_address'];
    $Med_info = $_POST['Pupil_medical_information'];
    $Pupil_class_ID = $_POST['Class_ID'];

    $sql = "UPDATE `pupils` SET Pupil_name='$Pupil_name', Pupil_address='$Pupil_address', Pupil_medical_information='$Med_info' 
    where Pupil_ID=$Pupil_ID";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:display_pupils.php');
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
    <title>Update Pupils</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Pupil Name</label>
                <input type="text" class="form-control" placeholder="Enter the name" name="Pupil_name" autocomplete="off" value=<?php echo $Pupil_name; ?>>
            </div>
            <div class="form-group">
                <label>Pupil's address></label>
                <input type="text" class="form-control" placeholder="Enter the address" name="Pupil_address" autocomplete="off" value=<?php echo $Pupil_address; ?>>
            </div>
            <div class="form-group">
                <label>Pupil's medical information</label>
                <input type="text" class="form-control" placeholder="Enter the info" name="Pupil_medical_information" autocomplete="off" value=<?php echo $Med_info; ?>>
            </div>
            <div class="form-group">
                <label>Class ID</label>
                <input type="text" class="form-control" placeholder="Enter the ID" name="Class_ID" autocomplete="off" value=<?php echo $Pupil_class_ID; ?>>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>

</html>
