<?php include 'issue.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Issue Book</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="home"><a href="links.php">HOME</a></div>
  <div class="header">
  	<h2>Issue Book</h2>
  </div>
  <php include 'error.php'; ?>
  <form method="post" action="issue_book.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  	  <label>Student ID</label>
  	  <input type="text" name="studentid">
  	</div>
  	<div class="input-group">
  	  <label>BookID</label>
  	  <input type="text" name="bookid" >
  	</div>
  	<div class="input-group">
  	  <label>Issue Date</label>
  	  <input type="date" name="issuedate">
  	</div>
  	<div class="input-group">
  	  <label>Return Date</label>
  	  <input type="date" name="returndate">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="issue_book">Issue</button>
      <br><br><br>
      <h2>Issued Books</h2>
      <br>
    <table frame="box" cellpadding="40px">
      <thead>
        <th>IssueId</th>
        <th>BookID</th>
        <th>StudentID</th>
        <th>Issue Date</th>
        <th>Return Date</th>
      </thead>
      <tbody>
        <?php
            $query = "select * from issuebook";
            $r = mysqli_query($con,$query); 
          while($user = mysqli_fetch_assoc($r))
          {
          echo "<tr>";
            echo"<td>".$user['issueid']."</td>";
            echo"<td>".$user['bookid']."</td>";
            echo"<td>".$user['sid']."</td>";
            echo"<td>".$user['issue_date']."</td>";
            echo"<td>".$user['return_date']."</td>";
            echo"<td><a href=\"deleteissued.php?id=".$user['issueid']."\">Return</a></td>";
          echo "</tr>";
          }
        ?>
      </tbody>
  </table>
  
        
  </form>
  
  <style>
* {
  margin: 0px;
  padding: 0px;
}
body {
  	font-size: 120%;
   	background: rgb(238,174,202);
	background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%); 
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
.header {
  width: 50%;
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form,.content {
  width: 50%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
  min-width: 30%;
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
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}


  </style>
</body>
</html>