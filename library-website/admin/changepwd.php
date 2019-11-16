<?php
include 'connection.php';
session_start();
	if(!isset($_SESSION['username']))
		header('location:slogout.php');
	else
	{
		$errors = array();
		$username = $_SESSION['username'];
		if(isset($_POST['submit']))
		{
			$pwd = $_POST['newpwd'];
			$pwd1 = $_POST['newpwd1'];
			$oldpwd = $_POST['pwd'];
			$query1 = "select * from user where username = '$username' and pwd = '$oldpwd' limit 1";
			$r = mysqli_query($con,$query1);
			if(mysqli_num_rows($r)==1)
			{ 
				if($pwd!=$pwd1)
					array_push($errors,"Passwords didn't match");
				if(count($errors)== 0)
				{
					$user = $_SESSION['username'];
					$query = "update user set pwd='$pwd' where username='$user'";
					$result = mysqli_query($con,$query);
					if($result)
					array_push($errors, "success");


				}
			}
			else
			array_push($errors,"Wrong Password");
		}
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
<body>
<div class="home"><a href="student-dash.php">HOME</a></div>
	<div class="container">
		<form method="post" action="changepwd.php">
			<?php include 'error.php' ?>
			<div class="input-group">
				<h2>Change Password</h2>
			</div>

			<div class="input-group">
				<label for="Enter Password">Enter Password</label>
				<input type="password" name="pwd" value="" placeholder="Enter Password">
			</div>
			<div class="input-group">
				<label for="New Password">New Password</label>
				<input type="password" name="newpwd" value="" placeholder="Enter New Password">
			</div>
			<div class="input-group">
				<label for="Renter Password">Renter Password</label>
				<input type="password" name="newpwd1" value="" placeholder="Renter New Password">
			</div>	
			<div class="input-group">
				<button type="submit" name="submit">Submit</button>
			</div>
		</form>	
	</div>

<style>
@import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
.container
{
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	padding: 10%;


}
body
{

background-color: #08AEEA;
background-image: linear-gradient(270deg, #08AEEA 0%, #2AF598 100%);
font-family: Roboto;

}
form
{
	border:4px solid #0fff95;
	padding: 10%;
	border-radius: 10px;
	box-shadow: 3px 3px 3px 3px #222222;

}
.input-group
{
	padding: 10px;
	margin: 10px;

}
.input-group h2
{
	font-size: 2em;
	color :#19323c;
	text-shadow: 3px 3px 2px 2px #19323c; 



}
.input-group input
{
	width: 300px;
	height: 40px;
	background-blend-mode: rbga(0,0,0,0,50%);
}
.input-group label
{
	margin:10px;
}
.input-group button
{
	background-image: linear-gradient(to right, #1A2980 0%, #26D0CE 51%, #1A2980 100%);
	width:100px;
	height: 50px;
	transition: 2s;
	border-radius: 9999em;
	color:#222222;
}	
button:hover { 
	background-position: right center;
	width:140px; 
} 	

.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.home
{
 border: 2px solid #3943b7 ;
 border-radius:9999em;
 background: radial-gradient( circle 386px at 0% 62.1%,  rgba(16,224,254,1) 0%, rgba(15,19,196,1) 100.7% );
 width:100px;
 padding:20px;
 margin:10px;
}
.home a
{
  text-decoration:none;
  color: #1320a5;

}

</style>
</body>
</html>