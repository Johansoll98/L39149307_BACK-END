<?php
include 'db_connection.php';
if(isset($_GET['deleteid'])){
    $Pupil_ID=$_GET['deleteid'];

    $sql="DELETE FROM `pupils` WHERE Pupil_ID=$Pupil_ID";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display_pupils.php');
    }else{
        die(mysqli_error($con));
    
    }
}

?>