<?php
include 'db_connection.php';
if(isset($_GET['deleteid'])){
    $Teacher_ID=$_GET['deleteid'];

    $sql="DELETE FROM `teachers` WHERE Teacher_ID=$Teacher_ID";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display_teachers.php');
    }else{
        die(mysqli_error($con));
    
    }
}

?>