<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location:student-login.php');
  }  
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dashboard</title>
	<link rel="stylesheet" href="../css/mystyle1.css">
</head>
<header>
	<nav>
		<?php  if (isset($_SESSION['username']));?>
		<div class="links-button">
				<li><a href="slogout.php">Log out</a></li>
			</div>
	</nav>
	<header>
<body>
	<div class="content">
  
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
</div>
	<div class="wrapper">
		<div class="box">
			<div class="heading">
				<h1>STUDENT DASHBOARD</hHover me1>
			</div>
			<ul class="links">
				<div class="links-button">
				<li><a href="book_search.php" target="left">Search Book</a></li>
				</div>
				<div class="links-button">
				<li><a href="changepwd.php" target="left">Change Password</a></li>
				</div>
				<div class="links-button">
				<li><a href="view_issued.php" target="left">Issued Books</a></li>
				</div>
				
							
		</div>
	</div>
</body>
</html>
