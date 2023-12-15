<?php
include 'db_connection.php';
if (isset($_POST['submit'])) {
    $Parent_name = $_POST['Parent_name'];
    $Parent_address = $_POST['Parent_address'];
    $Parent_email = $_POST['Parent_email'];
    $Parent_phone = $_POST['Parent_phone_number'];

    $sql = "INSERT INTO `parents` (Parent_name, Parent_address, Parent_email, Parent_phone_number)
            VALUES ('$Parent_name', '$Parent_address', '$Parent_email', '$Parent_phone')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:display_parents.php');
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
    <title>Insert Parent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter the name" name="Parent_name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Enter the address" name="Parent_address" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter the info" name="Parent_email" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Phone number</label>
                <input type="text" class="form-control" placeholder="Enter the number" name="Parent_phone_number" autocomplete="off">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>