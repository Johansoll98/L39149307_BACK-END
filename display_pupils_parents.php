<?php
include 'db_connection.php';
include 'navigation.php';
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display Pupils Parents</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container">
        <button class="btn btn-primary my-5"><a href="insert_pupils_parents.php" class="text-light">Insert Pupils Parents</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Pupil-Parent ID</th>
                    <th scope="col">Pupil ID</th>
                    <th scope="col">Parent ID</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM `pupils_parents`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $Pupil_Parent_ID = $row['Pupil_Parent_ID'];
                        $Pupil_P_ID = $row['Pupil_ID'];
                        $Parent_P_ID = $row['Parent_ID'];
                        echo ' <tr>
        <th scope="row">' . $Pupil_Parent_ID . '</th>
        <td>' . $Pupil_P_ID . '</td>
        <td>' . $Parent_P_ID . '</td>
        <td>
            <button class="btn btn-primary"><a href="update_pupils_parents.php?updateid=' . $Pupil_Parent_ID . '" class="text-light">Update</a></button>

            <button class="btn btn-danger"><a href="delete_pupils_parents.php?deleteid=' . $Pupil_Parent_ID . '" class="text-light">Delete</a></button>
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