<?php 
	include 'connection.php';
	session_start();
	if (!isset($_SESSION['username']) && $_SESSION['username']!='admin') {
		$_SESSION['msg'] = "You must log in first";
		header('location:admin-login.php');
	}
	else
	{
		$query = "select * from book";
		$r = mysqli_query($con,$query);
		
	}	

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>All BOOKS</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
	<h2>BOOKS </h2>
		<table frame="box" cellpadding="30px">
			<thead>
				<th>Book ID</th>
				<th>Name</th>
				<th>Author</th>
				<th>Description</th>
				<th>Category</th>
				<th>Quantity</th>
			</thead>
			<tbody>
				<?php 
					while($user = mysqli_fetch_assoc($r))
					{
					echo "<tr>";
						echo"<td>".$user['bookid']."</td>";
						echo"<td>".$user['name']."</td>";
						echo"<td>".$user['author']."</td>";
						echo"<td>".$user['description']."</td>";
						echo"<td>".$user['category']."</td>";
						echo"<td>".$user['available']."</td>";
						echo"<td><a href=\"deletebook.php?id=".$user['bookid']."\">Delete</a></td>";
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

	</style>

</body>
</html>