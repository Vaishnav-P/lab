<?php 
  session_start(); 
  	if($_SESSION[username]!="admin")
  		header('location:student-login.php');

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location:admin-login.php');
  }
  if (isset($_GET['logout'])) {
  	unset($_SESSION['username']);
  	session_destroy();
  	header("location:admin-login.php");
  }
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="../css/mystyle1.css">
</head>
<header>
	<nav>
		<?php  if (isset($_SESSION['username']));?>
		<div class="links-button">
				<li><a href="logout.php">Log out</a></li>
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
				<h1>ADMIN CONTROLS</h1>
			</div>
			<ul class="links">
				<div class="links-button">
				<li><a href="add_book.php">Add Book</a></li>
				</div>
				<div class="links-button">
				<li><a href="issue_book.php" target="left">Book Transactions</a></li>
				</div>
				<div class="links-button">
				<li><a href="delete_book.php" target="left">Delete Book</a></li>
				</div>
				<div class="links-button">
				<li><a href="view_user.php" target="left">View User</a></li>
				</div>
				<div class="links-button">
				<li><a href="add_user.php" target="left">Add User</a></li>
				</div>		
		</div>
	</div>
</body>
</html>
