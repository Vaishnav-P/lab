<?php include 'slogin.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Student Login</title>
	<link rel="stylesheet" href="">
</head>
<nav>
	<a href="index.html"><img src="../assets/image.png" alt="img"></a>
	<div class="header">
			<h1>Library Management System</h1>
	</div>
</nav>
<body>
	<div class="container">
		<form action="student-login.php" method="post">
			<?php include 'error.php';?>
			<div class="header">
				<h3>Login</h3>
			</div>		
			<div class="student">
				<label for="UserName"r>UserName</label>
				<input type="text" name="student-username" value="" placeholder="Enter Username">
			</div>
				<div class="student">
				<label for="Password"r>Password</label>
				<input type="password" name="student-password" value="" placeholder="Enter Password">
			</div>
			<div class="student">
				<button type="submit" name="submit-button"class="btn-grad"> Log In </button>
			</div>
		</form>
	</div>

</body>

	<style>
		@import url('https://fonts.googleapis.com/css?family=Fira+Code&display=swap');
		*{
			margin :0;
			padding: 0;
		}
		body
		{
			background-color: #FAACA8;
			background-image: linear-gradient(19deg, #FAACA8 0%, #DDD6F3 22%);
			
		}
		nav
		{
			height: 200px;
			background-color: #222222;
			display: flex;	
		}
		nav img
		{
			width:200px;
			height:200px;
			background-color: rgba(0,0,0,60%);
			background-blend-mode: multiply;

		}
		nav a
		{
			text-decoration: none;


		}
		.error 
		{
			  width: 92%; 
			  margin: 0px auto; 
			  padding: 10px; 
			  border: 1px solid #a94442; 
			  color: #a94442; 
			  background: #f2dede; 
			  border-radius: 5px; 
			  text-align: left;
		}

		.header
		{
			margin: 0px auto;
			margin-top: 5%;

		}
		.header h1
		{

			color:#c6c013;
			font-family: Fira Code;
			font-size:3em;

		}

		.header h3
		{
			color:#7367F0;
			font-family: Fira Code;
			font-size:3em;



		}
		.container
		{
			display: flex;
			align-content: center;
			align-items: center;
			flex-direction: column;
			margin-top: 10%;


		}
		.container div
		{	
			padding: 20px;
			font-size: 1.3em;

		}
		.container input
		{margin-left: 20px;}

		form
		{
			background-color: #FAACA8;
			background-image: linear-gradient(13deg, #FAACA8 0%, #DDD6F3 22%);
			border:2px solid #222222;
			box-shadow: 5px 5px 4px 4px #222222;
			padding: 2%;
		}
		 .btn-grad {background-image: linear-gradient(to left, #314755 0%, #26a0da 51%, #314755 100%);
		 	width:100px;
		 	height: 50px;
		 	border-radius:10px;
		 	box-shadow: 2px 2px 2px 2px #222222;
		 	transition: 2s;	


		 }
		button:hover {
		 background-position: right center; 
		width:200px;
		border-radius: 9999em;
		} 


	</style>
</body>
</html>