<?php 
  session_start(); 
  if (!isset($_SESSION['username']) && $_SESSION['username']!='admin') {
  	$_SESSION['msg'] = "You must log in first";
  	header('location:admin-login.php');

  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">

	
</head>
<frameset 	cols="40%,*">
	<frame src="links.php" name="right" >
	<frame src=" " name="left" >

</frameset>	



</html>