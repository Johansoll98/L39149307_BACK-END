<?php
include 'db_connection.php';
if(isset($_GET['deleteid'])){
    $Library_ID=$_GET['deleteid'];

    $sql="DELETE FROM `library` WHERE Library_ID=$Library_ID";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display_library.php');
    }else{
        die(mysqli_error($con));
    
    }
}

?>