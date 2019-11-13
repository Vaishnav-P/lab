<?php include 'addbook.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Add Book</title>
</head>
<body>
	<div class="container">
		
		<form method="post" action="add_book.php">
			<h1>ADD BOOK</h1>
			<?php  include 'error.php';?>
			<div class="input-group">
				<label for="BookId">Book ID</label>
				<input type="text" name="bookid" placeholder="Enter Book ID ">
			</div>
			<div class="input-group">
				<label for="BookTitle">Book Name</label>
				<input type="text" name="booktitle" placeholder="Enter Book Title ">
			</div>
			<div class="input-group">
				<label for="BookAuthor">Book Author</label>
				<input type="text" name="bookauthor" placeholder="Enter Book Author ">
			</div>
			<div class="input-group">
				<label for="Bookquantity">Quantity Available</label>
				<input type="text" name="bookqty" placeholder="Enter Quantity available ">
			</div>
			<div class="input-group">
				<label for="BookPublisher">Book Description</label>
				<input type="text" name="bookdesc" placeholder="Enter Book Description ">
			</div>
			<div class="input-group">
				<label for="BookPublisher">Book Category</label>
				<input type="text" name="bookcat" placeholder="Enter Book Category ">
			</div>
			<div class="submit-button">
				<button type="submit" name="add">ADD</button>
			</div>

		</form>

	</div>
	
	<style>
		h1
		{
			margin-left: 10%;
			color: #085235; 

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

		.container
		{
			display: flex;
			align-items: center;
			align-content: center;
			flex-direction: column;
			padding: 5%;


		}
		.submit-button button
		{
			margin-left:10%;
			width:200px;
			height: 60px; 
			border-radius:9999em;
			background-image: linear-gradient(to right, #DA22FF 0%, #9733EE 51%, #DA22FF 100%);

		}
		button:hover
		{ background-position: right center; } 
		.input-group
		{
			margin: 5%;
			padding:5%; 
		}
		.input-group input
		{
			margin-left:20px; 
		}

		form
		{
			border:2px solid #222222;
			padding: 100px;
			border-radius: 30px;
			box-shadow: 3px 3px 4px 4px #222222;
			font-size: 1.4em;
			color:#222222;
		}
		body
		{
			background-color: #8BC6EC;
			background-image: linear-gradient(135deg, #8BC6EC 0%, #9599E2 100%);

		}
		
	</style>	
</body>
</html>