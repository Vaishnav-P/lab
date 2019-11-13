<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['username']) && $_SESSION['username']!='admin') {
    $_SESSION['msg'] = "You must log in first";
    header('location:admin-login.php');
}
else
{   $id = $_GET['id'];
    $query = "delete from user where username='$id'";
    $r = mysqli_query($con,$query);
    header('location:view_user.php');
    
}	


?>