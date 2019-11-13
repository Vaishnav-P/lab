<?php
include 'connection.php';
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location:student-login.php');
}
else
{
   
    if(isset($_POST['search']))
    {
    	$errors = array();
        $bookname = $_POST['name1'];
        $query = "select * from book where name like '%$bookname%'";
        $query_res = mysqli_query($con,$query);
        $result = mysqli_fetch_assoc($query_res);
        if(mysqli_num_rows($query_res)==0)
        	array_push($errors,"Book Not Found");
        else
        {
	        $bookid = $result['bookid'];
	    	$bookname1 = $result['name'];
	    	$bookauthor = $result['author'];
	    	$bookqty = $result['available'];
	    	$bookdesc =$result['description'];
	        $bookcat =$result['category'];

	    }    
    

    }    



}


?>