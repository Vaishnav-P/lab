<?php
include 'connection.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start(); 
    $bookid = "";
	$bookname = "";
    $bookauthor = "";
	$bookqty = "";
	$bookdesc = "";
    $bookcat = "";
    $errors = array();
if (!isset($_SESSION['username']) && $_SESSION['username']!='admin') {
	$_SESSION['msg'] = "You must log in first";
	header('location:admin-login.php');
}	
else
{
    if(isset($_POST['add']))
    {
    	$bookid = $_POST['bookid'];
    	$bookname = $_POST['booktitle'];
    	$bookauthor = $_POST['bookauthor'];
    	$bookqty = $_POST['bookqty'];
    	$bookdesc = $_POST['bookdesc'];
        $bookcat = $_POST['bookcat'];
        if (empty($bookid)) { array_push($errors, "BookID is required"); }
        if (empty($bookname)) { array_push($errors, "BookName is required"); }
        if (empty($bookauthor)) { array_push($errors, "Author is required"); }
        if (empty($bookqty)) {array_push($errors, "Quantity is required");}
        if (empty($bookdesc)) {array_push($errors, "Description is required");}
        if (empty($bookcat)) {array_push($errors, "Category is required");}


        $user_check_query = "SELECT * FROM book WHERE bookid='$bookid' OR name='$bookname' LIMIT 1";
        $result = mysqli_query($con, $user_check_query);
        $user = mysqli_fetch_assoc($result);
          
          if ($user) 
          {            
            if ($user['bookid'] === $bookid) 
            {
              array_push($errors, "BookID already exists");
            }

            if ($user['name'] === $bookname) 
            {
              array_push($errors, "BookName already exists");
            }
          }


    if(count($errors)==0)
    {
	$query = "insert into book values('$bookid','$bookname','$bookauthor','$bookdesc','$bookcat','$bookqty')";
	$r = mysqli_query($con,$query);
	if($r)
    array_push($errors,"Book Added");
    }

}
}
?>