<?php
	include 'connection.php';
	session_start();
	$username="";
	$pwd= "";
	$errors = array();
	if(isset($_POST['submit']))
	{
		$username = mysqli_real_escape_string($con, $_POST['login-name']);
		$pwd = mysqli_real_escape_string($con, $_POST['login-password']);
		$_SESSION['username']=$username;
		$query = "select * from Login where uname='$username' and pwd='$pwd'";
		$result = mysqli_query($con,$query);
		if($result)
		$num = mysqli_num_rows($result);
		if($num == 1)
			header("location:links.php");
		else
			{

				array_push($errors, "Wrong username/password combination");


			}
	}
		


?>