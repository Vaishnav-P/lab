<?php

	include 'connection.php';
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	session_start(); 
  	if(!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location:student-login.php');
  	}
 	else
  	{ 
  		$username = $_SESSION['username'];
		$query1 = "select uid from user where username='$username'";
		$s = mysqli_query($con,$query1);
		if($s)
		$result = mysqli_fetch_assoc($s);
	 	$id = $result['uid']; 
	 	$query2 = "select * from issuebook where sid ='$id'";
	   	$r = mysqli_query($con,$query2);
		   $query3 = "select name from book where bookid ='$id'";
		   $c = mysqli_query($con,$query3);
		   $result1 = mysqli_fetch_assoc($c);
		   
        	
     }
 ?>