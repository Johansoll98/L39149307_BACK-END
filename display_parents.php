<?php
include 'db_connection.php';
include 'navigation.php';
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display Parents</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container">
        <button class="btn btn-primary my-5"><a href="insert_parents.php" class="text-light">Insert Parent</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM `parents`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $Parent_ID = $row['Parent_ID'];
                        $Parent_name = $row['Parent_name'];
                        $Parent_address = $row['Parent_address'];
                        $Parent_email = $row['Parent_email'];
                        $Parent_phone = $row['Parent_phone_number'];
                        echo ' <tr>
        <th scope="row">' . $Parent_ID . '</th>
        <td>' . $Parent_name . '</td>
        <td>' . $Parent_address . '</td>
        <td>' . $Parent_email . '</td>
        <td>' . $Parent_phone . '</td>
        <td>
            <button class="btn btn-primary"><a href="update_parents.php?updateid=' . $Parent_ID . '" class="text-light">Update</a></button>

            <button class="btn btn-danger"><a href="delete_parents.php?deleteid=' . $Parent_ID . '" class="text-light">Delete</a></button>
        </td>

        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>