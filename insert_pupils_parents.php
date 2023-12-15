<?php
include 'db_connection.php';
if (isset($_POST['submit'])) {
    $Pupil_P_ID = $_POST['Pupil_ID'];
    $Parent_P_ID = $_POST['Parent_ID'];

    $sql = "INSERT INTO `pupils_parents` (Pupil_ID, Parent_ID)
            VALUES ($Pupil_P_ID, $Parent_P_ID)";

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
    <title>Insert Pupils Parents</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Pupil ID</label>
                <input type="text" class="form-control" placeholder="Enter the ID" name="Pupil_ID" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Parent ID</label>
                <input type="text" class="form-control" placeholder="Enter the ID" name="Parent_ID" autocomplete="off">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>