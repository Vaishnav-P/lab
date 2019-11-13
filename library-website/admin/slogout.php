<?php

session_start();
unset($_SESSION['username']);
session_destroy();
header('location:student-login.php');

?>