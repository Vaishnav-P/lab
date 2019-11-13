<!DOCTYPE html>
<html>
<head>
<title>Search book</title>
</head>
<body>
<div class="header">
	<h2>SEARCH BOOK</h2>
</div>
<br>
<br>
<form method="POST">
<center>
<br>
<br>
<h3>Enter Book Name to search</h3>
<input type="text" name="name1"><br>
<br>
<button type="submit" class="button" name="search">Search</button> 
<button type="reset" class="cancelbtn">Cancel</button>
<br><br><br><br><br><br><br><br>
<?php include 'search.php'?>
<table cellpadding="30px" frame="box">
  <tr>
    <th>BookID</th>
    <th>BookName</th>
    <th>BookAuthor</th>
    <th>BookQty</th>
    <th>BookDescription</th>
    <th>BookCategory</th>
  </tr>
  <tr>
    <td><?php echo $bookid; ?></td>
    <td><?php echo $bookname1; ?></td>
    <td><?php echo $bookauthor; ?></td>
    <td><?php echo $bookqty; ?></td>
    <td><?php echo $bookdesc; ?></td>
    <td><?php echo $bookcat; ?></td>
</tr>
</table>
<?php include 'error.php';?>
</center>
</form>
<style>
  input
  {
    width: 33%;
    height:50px;

  }
.header {
  width: 50%;
  margin: 50px auto 0px;
  color: white;
  background: #90EE90;
  text-align: center;
  color: black;
  border: 1px solid #B0C4DE;
  border-bottom: 6px 6px 6px 6px;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: bold;
  display: inline-block;
  border-radius:4px;
  font-size: 20px;
  width: 300px;
}

.cancelbtn {
  margin-left:50px; 
width: 300px;;
padding: 10px 18px;
background-color: #f44336;
}
.error {
  width: 30%;
  margin-top:50px;   
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}

</style>
</body>
</html>




