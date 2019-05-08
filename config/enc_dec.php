<?php
	include("connect.php");
	include("authentication.php");
	$conn = connectdb();
	session_start();
	$error = ' ';
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		//Checks username and password from html form against c1 database
	
		//inputs from form
		$inp_email = mysqli_real_escape_string($conn,$_POST['email']);
		$inp_password = mysqli_real_escape_string($conn,$_POST['password']);

		//query string
		$pass_query = "SELECT password FROM users WHERE email = '$inp_email'";
		//mysqli object
		$pass_query_out = $conn->query($pass_query);
		//takes the row from the database and checks the hash
		$row = $pass_query_out->fetch_array(MYSQLI_ASSOC);

		$test_hash = $row['password'];
		
		//decryption result
		$decrypted_result = decryption($inp_password, $test_hash);

		//$testPassword = '$sh4rpspr1nG$';

		//$count = mysqli_num_rows($pass_query_out);
		if($decrypted_result == true)
		{
			$_SESSION['user_email'] = $inp_email;
			header("location: ../view/dashboard.php");
			$error = " ";
		}
		else
		{
			$error = "Invalid Email or Password";
		}
	}
?>
