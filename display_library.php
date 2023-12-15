<?php
include 'db_connection.php';
include 'navigation.php';
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>

<body class="bg-light">
    <div class="container">
        <button class="btn btn-primary my-5"><a href="insert_library.php" class="text-light">Insert library</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Book title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Publication year</th>
                    <th scope="col">Availability</th>
                    <th scope="col">Pupil ID</th>
                    <th scope="col">Teacher ID</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM `library`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $Library_ID = $row['Library_ID'];
                        $Book_title = $row['Book_title'];
                        $Author = $row['Author'];
                        $Publication_year = $row['Publication_year'];
                        $Availability = $row['Availability'];
                        $Library_pupil_ID = $row['Pupil_ID'];
                        $Library_teacher_ID = $row['Teacher_ID'];
                        echo ' <tr>
        <th scope="row">' . $Library_ID . '</th>
        <td>' . $Book_title . '</td>
        <td>' . $Author . '</td>
        <td>' . $Publication_year . '</td>
        <td>' . $Availability . '</td>
        <td>' . $Library_pupil_ID . '</td>
        <td>' . $Library_teacher_ID . '</td>
        <td>
            <button class="btn btn-primary"><a href="update_library.php?updateid=' . $Library_ID . '" class="text-light">Update</a></button>

            <button class="btn btn-danger"><a href="delete_library.php?deleteid=' . $Library_ID . '" class="text-light">Delete</a></button>
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