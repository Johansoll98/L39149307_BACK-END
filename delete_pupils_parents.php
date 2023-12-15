<?php
include 'db_connection.php';
if(isset($_GET['deleteid'])){
    $Pupil_Parent_ID=$_GET['deleteid'];

    $sql="DELETE FROM `pupils_parents` WHERE Pupil_Parent_ID=$Pupil_Parent_ID";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display_pupils_parents.php');
    }else{
        die(mysqli_error($con));
    
    }
}

?>