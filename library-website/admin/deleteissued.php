<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['username']) && $_SESSION['username']!='admin') {
    $_SESSION['msg'] = "You must log in first";
    header('location:admin-login.php');
}
else
{   $id = $_GET['id'];
	$query1 = "select bookid from issuebook where issueid ='$id'";
	$r1 = mysqli_query($con,$query1);
	$result = mysqli_fetch_assoc($r1);
	$bookid = $result['bookid'];
	$query2 = "update book set available=available+1 where bookid='$bookid'";
	mysqli_query($con,$query2);
    $query = "delete from issuebook where issueid='$id'";
    $r = mysqli_query($con,$query);

    header('location:issue_book.php');
    
}	


?>