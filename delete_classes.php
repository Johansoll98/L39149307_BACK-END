<?php
include 'db_connection.php';
if(isset($_GET['deleteid'])){
    $Class_ID=$_GET['deleteid'];

    $sql="DELETE FROM `classes` WHERE Class_ID=$Class_ID";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display_classes.php');
    }else{
        die(mysqli_error($con));
    
    }
}

?>