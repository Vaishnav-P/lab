<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	$con = mysqli_connect('localhost','root','root','testdb');
	if(!con)
		die("Failed");
	else
		echo "Connected";

	$name = $_POST["name"];
	$mail = $_POST["mail"];
	$pwd = $_POST["password"];
	$rpwd = $_POST["pass"];
	$query = "insert into Login values('$name','$mail','$pwd')";
	$r=mysqli_query($con,$query);
	if($r)
	{
		echo "Succes";
	}
	else
	echo "Failed";	


?>