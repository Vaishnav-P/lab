<?php
    include 'connection.php';
    session_start();
    $errors= array();
    if (!isset($_SESSION['username']) && $_SESSION['username']!='admin') {
        $_SESSION['msg'] = "You must log in first";
        header('location:admin-login.php');
    }
    else
    {   if(isset($_POST['issue_book']))
        {
        $studentid = $_POST['studentid'];
        $bookid = $_POST['bookid'];
        $issuedate = $_POST['issuedate'];
        $returndate = $_POST['returndate'];

        $query1 = "select available from book where bookid='$bookid'";
        $r1 = mysqli_query($con,$query1);
        $result = mysqli_fetch_assoc($r1);
        if($result['available']>0)
        {
        $query = "insert into issuebook(bookid,sid,issue_date,return_date) values('$bookid','$studentid','$issuedate','$returndate')";
        $r = mysqli_query($con,$query);
    	}
        if($r)
        {
            array_push($errors,"BOOK ISSUED!");
            $update_qty = $result['available'] - 1;
            $query2 = "update book set available='$update_qty' where bookid ='$bookid'";
            $r2 = mysqli_query($con,$query2);
            array_push($errors, "Quantity Updated");
        }
        else
        array_push($errors,"BOOK NOT ISSUED!");
        }

        

        
    }	
  
  
  ?>