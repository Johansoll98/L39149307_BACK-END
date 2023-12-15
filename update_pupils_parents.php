<?php
include 'db_connection.php';

$Pupil_Parent_ID = $_GET['updateid'];
$sql = "SELECT * FROM `pupils_parents` WHERE Pupil_Parent_ID=$Pupil_Parent_ID";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$Pupil_P_ID = $row['Pupil_ID'];
$Parent_P_ID = $row['Parent_ID'];



if (isset($_POST['submit'])) {
    $Pupil_P_ID = $_POST['Pupil_ID'];
    $Parent_P_ID = $_POST['Parent_ID'];

    $sql = "UPDATE `pupils_parents` SET Pupil_ID=$Pupil_P_ID, Parent_ID=$Parent_P_ID
    WHERE Pupil_Parent_ID=$Pupil_Parent_ID";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:display_pupils_parents.php');
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
    <title>Update Pupils Parents</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label for="Pupil_ID">Pupil ID</label>
                <input type="text" class="form-control" placeholder="Enter Pupil ID" name="Pupil_ID" value="<?php echo $Pupil_P_ID; ?>">
            </div>
            <div class="form-group">
                <label for="Parent_ID">Parent ID</label>
                <input type="text" class="form-control" placeholder="Enter Parent ID" name="Parent_ID" value="<?php echo $Parent_P_ID; ?>">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>

    </div>

</body>

</html>