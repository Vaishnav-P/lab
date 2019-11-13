<?php
	include 'connection.php';
	session_start();
	$username="";
	$pwd= "";
	$errors = array();
	if(isset($_POST['submit-button']))
	{
		$username = mysqli_real_escape_string($con, $_POST['student-username']);
		$pwd = mysqli_real_escape_string($con, $_POST['student-password']);
		$_SESSION['username']=$username;
		$query = "select * from user where username='$username' and pwd='$pwd'";
		$result = mysqli_query($con,$query);
		if($result)
		$num = mysqli_num_rows($result);
		if($num == 1)
			header("location:student-dash.php");
		else
			{

				array_push($errors, "Wrong username/password combination");


			}
	}
		


?>