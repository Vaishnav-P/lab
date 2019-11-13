<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['username']) && $_SESSION['username']!='admin') {
    $_SESSION['msg'] = "You must log in first";
    header('location:admin-login.php');
}
else
{   $id = $_GET['id'];
    $query = "delete from book where bookid='$id'";
    $r = mysqli_query($con,$query);
    header('location:delete_book.php');
    
}	


?>