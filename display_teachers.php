<?php
include 'db_connection.php';
include 'navigation.php';
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display Teachers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container">
        <button class="btn btn-primary my-5"><a href="insert_teachers.php" class="text-light">Insert Teacher</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Annual salary £</th>
                    <th scope="col">Background Check</th>
                    <th scope="col">Class ID</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM `teachers`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $Teacher_ID = $row['Teacher_ID'];
                        $Teacher_name = $row['Teacher_name'];
                        $Teacher_address = $row['Teacher_address'];
                        $Teacher_email = $row['Teacher_email'];
                        $salary = $row['Annual_salary_£'];
                        $background = $row['Background_check'];
                        $Teacher_class_ID = $row['Class_ID'];
                        echo ' <tr>
        <th scope="row">' . $Teacher_ID . '</th>
        <td>' . $Teacher_name . '</td>
        <td>' . $Teacher_address . '</td>
        <td>' . $Teacher_email . '</td>
        <td>' . $salary . '</td>
        <td>' . $background . '</td>
        <td>' . $Teacher_class_ID . '</td>
        <td>
            <button class="btn btn-primary"><a href="update_teachers.php?updateid=' . $Teacher_ID . '" class="text-light">Update</a></button>

            <button class="btn btn-danger"><a href="delete_teachers.php?deleteid=' . $Teacher_ID . '" class="text-light">Delete</a></button>
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