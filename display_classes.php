<?php
include 'db_connection.php';
include 'navigation.php';
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display Classes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container">
        <button class="btn btn-primary my-5"><a href="insert_classes.php" class="text-light">Insert Class</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Capacity</th>
                    <th scope="col">Teacher ID</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM `classes`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $Class_ID = $row['Class_ID'];
                        $Class_name = $row['Class_name'];
                        $Class_capacity = $row['Class_capacity'];
                        $Class_teacher_ID = $row['Teacher_ID'];
                        echo ' <tr>
        <th scope="row">' . $Class_ID . '</th>
        <td>' . $Class_name . '</td>
        <td>' . $Class_capacity . '</td>
        <td>' . $Class_teacher_ID . '</td>
        <td>
            <button class="btn btn-primary"><a href="update_classes.php?updateid=' . $Class_ID . '" class="text-light">Update</a></button>

            <button class="btn btn-danger"><a href="delete_classes.php?deleteid=' . $Class_ID . '" class="text-light">Delete</a></button>
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