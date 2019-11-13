<?php include 'login.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Log In</title>
        <link rel="stylesheet" href="../css/mystyle.css">
    </head>
    <body>  	
    	<div class="wrapper">
    		
    		<form action="admin-login.php" method="post">
    			<?php include 'error.php';?>
    			<div class="login-heading"><h1>Log In</h1></div>
		    		<div class="img-thumbnail">
		    			<a href="index.html"><img src="../assets/loginicon_1.png" alt="Image" class="login-thumbnail"></a>
		    		</div>
		    		<div class="login-Name">
		    			<p>UserName</p>
		    		</div>
		    		<div class="Name-input">
		    			<input type="text" name="login-name" value="" placeholder="Enter Username" required> 
		    		</div>
		    		<div class="login-Password">
		    			<p>Password</p>
		    		</div>
		    		<div class="Password-input">
		    			<input type="password" name="login-password" value="" placeholder="Enter Password" required>
		    		</div>
		    		<div class="Login-Button">
		    			<button type="submit" name="submit">log IN</button>
		    		</div>
		    		
    		</form>
    		
    	</div>
        <script src="js/main.js"></script>


    </body>
</html>