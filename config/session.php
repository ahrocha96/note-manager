<?php
   include('connect.php');
   $conn = connectdb();
   session_start();
   //checks the logged in user's email against the database to retrieve the user
   $email_check = $_SESSION['user_email'];
  
   $session_query = "SELECT name FROM users WHERE email = '$email_check' ";
   $session_out = $conn->query($session_query);
   $row = $session_out->fetch_array(MYSQLI_ASSOC);

   $session_user = $row['name'];
   
   if(!isset($_SESSION['user_email'])){
		header("location:index.php");
		die();
   }
?>