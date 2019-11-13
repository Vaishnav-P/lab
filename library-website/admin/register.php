<?php
	include 'connection.php';
	session_start();

	$username = "";
	$email    = "";
	$errors = array(); 
if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location:admin-login.php');
  }

if (isset($_POST['reg_user'])) 
{
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM user WHERE username='$username' OR umail='$email' LIMIT 1";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['umail'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = $password_1;
  	$query = "INSERT INTO user(username, umail, pwd) 
  			  VALUES('$username', '$email', '$password')";
  	$r = mysqli_query($con, $query);
  	$_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    if($r)
  	array_push($errors, " User Created");
  	
  }
}	
if (isset($_POST['submit'])) 
{
  $username = mysqli_real_escape_string($con, $_POST['login-name']);
  $password_1 = mysqli_real_escape_string($con, $_POST['login-password']);
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = $password_1;
  	$query = "SELECT * FROM user WHERE username='$username' AND pwd='$password'";
  	$results = mysqli_query($con, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: frames.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
?>