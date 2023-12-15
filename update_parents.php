<?php
include 'db_connection.php';
$Parent_ID = $_GET['updateid'];
$sql = "SELECT * FROM `parents` WHERE Parent_ID=$Parent_ID";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$Parent_ID = $row['Parent_ID'];
$Parent_name = $row['Parent_name'];
$Parent_address = $row['Parent_address'];
$Parent_email = $row['Parent_email'];
$Parent_phone = $row['Parent_phone_number'];

if (isset($_POST['submit'])) {
    $Parent_name = $_POST['Parent_name'];
    $Parent_address = $_POST['Parent_address'];
    $Parent_email = $_POST['Parent_email'];
    $Parent_phone = $_POST['Parent_phone_number'];

    $sql = "UPDATE `parents` SET Parent_name='$Parent_name', Parent_address='$Parent_address', Parent_email='$Parent_email', Parent_phone_number='$Parent_phone'
    where Parent_ID=$Parent_ID";
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
    <title>Update Parents</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Parent Name</label>
                <input type="text" class="form-control" placeholder="Enter the name" name="Parent_name" autocomplete="off" value=<?php echo $Parent_name; ?>>
            </div>
            <div class="form-group">
                <label>Parent address</label>
                <input type="text" class="form-control" placeholder="Enter the address" name="Parent_address" autocomplete="off" value=<?php echo $Parent_address; ?>>
            </div>
            <div class="form-group">
                <label>Parent Email</label>
                <input type="email" class="form-control" placeholder="Enter the email" name="Parent_email" autocomplete="off" value=<?php echo $Parent_email; ?>>
            </div>
            <div class="form-group">
                <label>Parent phone number</label>
                <input type="text" class="form-control" placeholder="Enter the number" name="Parent_phone_number" autocomplete="off" value=<?php echo $Parent_phone; ?>>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>

</html>