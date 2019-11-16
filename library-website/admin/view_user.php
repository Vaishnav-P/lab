<?php 
	include 'connection.php';
	session_start();
	if (!isset($_SESSION['username']) && $_SESSION['username']!='admin') {
		$_SESSION['msg'] = "You must log in first";
		header('location:admin-login.php');
	}
	else
	{
		$query = "select * from user";
		$r = mysqli_query($con,$query);
		
	}	

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>All Users</title>
	<link rel="stylesheet" href="">
</head>
<body>
<div class="home"><a href="links.php">HOME</a></div>
	<div class="container">
	<h2>Users</h2>
		<table frame="box" cellpadding="30px">
			<thead>
				<th>UserId</th>
				<th>Username</th>
				<th>Email</th>
			</thead>
			<tbody>
				<?php 
					while($user = mysqli_fetch_assoc($r))
					{
					echo "<tr>";
						echo"<td>".$user['uid']."</td>";
						echo"<td>".$user['username']."</td>";
						echo"<td>".$user['umail']."</td>";
						echo"<td><a href=\"deleteuser.php?id=".$user['username']."\">Delete</a></td>";
					echo "</tr>";
					}
				?>
			</tbody>
	</table>
	</div>
	<style>
		.container
		{
			display:flex;
			align-items:center;
			justify-content:center;
			flex-direction:column;

		}
		body
		{
			background: rgb(235,236,213);
     	  background: linear-gradient(90deg, rgba(235,236,213,1) 0%, rgba(237,246,167,1) 100%, rgba(0,212,255,1) 100%); 
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