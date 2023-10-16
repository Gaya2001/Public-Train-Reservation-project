<?php
include 'connect.php';
if(isset($_GET['deleted'])){
    $id=$_GET['deleted'];
    $sql="DELETE FROM user_requets WHERE user_name=$user_name";
    $sql="DELETE FROM user_requets WHERE train_name=$train_name";
    $sql="DELETE FROM user_requets WHERE train_class=$train_class";
    $sql="DELETE FROM user_requets WHERE Arrival=$arrival";
    $sql="DELETE FROM user_requets WHERE Departure=$departure";
    /* $sql="DELETE FROM user_requets WHERE user_name=$user_name";*/

    $result=mysqli_query($con,$sql);
    if($result){
        /*echo "Deleted successfully";*/
        header('location:Admin_ScheduleList.php');
    }else{
        die(mysqli_error($con));
    }
}
?>