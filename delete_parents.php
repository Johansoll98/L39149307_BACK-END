<?php
include 'db_connection.php';
if(isset($_GET['deleteid'])){
    $Parent_ID=$_GET['deleteid'];

    $sql="DELETE FROM `parents` WHERE Parent_ID=$Parent_ID";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display_parents.php');
    }else{
        die(mysqli_error($con));
    
    }
}

?>