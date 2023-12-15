<?php
include 'db_connection.php';
include 'navigation.php';
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display Pupils</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container">
        <button class="btn btn-primary my-5"><a href="insert_pupils.php" class="text-light">Insert Pupil</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Medical info</th>
                    <th scope="col">Class ID</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM `pupils`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $Pupil_ID = $row['Pupil_ID'];
                        $Pupil_name = $row['Pupil_name'];
                        $Pupil_address = $row['Pupil_address'];
                        $Med_info = $row['Pupil_medical_information'];
                        $Pupil_class_ID = $row['Class_ID'];
                        echo ' <tr>
        <th scope="row">' . $Pupil_ID . '</th>
        <td>' . $Pupil_name . '</td>
        <td>' . $Pupil_address . '</td>
        <td>' . $Med_info . '</td>
        <td>' . $Pupil_class_ID . '</td>
        <td>
            <button class="btn btn-primary"><a href="update_pupils.php?updateid=' . $Pupil_ID . '" class="text-light">Update</a></button>

            <button class="btn btn-danger"><a href="delete_pupils.php?deleteid=' . $Pupil_ID . '" class="text-light">Delete</a></button>
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