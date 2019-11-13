<?php
include 'view_issued_student.php';				 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Issued Books</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
	<h2>Issued Book</h2>
		<table frame="box" cellpadding="40px">
			<thead>
				<th>IssueId</th>
        		<th>BookID</th>
				<th>BookName</th>
        		<th>StudentID</th>
        		<th>Username</th>
        		<th>Issue Date</th>
        		<th>Return Date</th>
			</thead>
			<tbody>
				<?php
				
          while($user = mysqli_fetch_assoc($r))
          {
          echo "<tr>";
            echo"<td>".$user['issueid']."</td>";
			echo"<td>".$user['bookid']."</td>";
			echo"<td>".$result1['name']."</td>";
            echo"<td>".$user['sid']."</td>";
            echo"<td>".$username."</td>";
            echo"<td>".$user['issue_date']."</td>";
            echo"<td>".$user['return_date']."</td>";
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