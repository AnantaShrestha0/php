<?php
include 'connect.php';

if(isset($_GET['id'])){
    $sn=$_GET['id'];

    $sql="DELETE FROM registration WHERE SN=$sn";
    $result=mysqli_query($con, $sql);
    if($result){
        echo "data deleted successfully";
        header('location:userlist.php');
      
    }
    else{
        die(mysqli_error($conn));
    }

}



?>