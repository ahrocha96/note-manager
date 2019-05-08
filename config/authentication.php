<?php
	function encryption($password)
	{
		$hash = password_hash($password, PASSWORD_DEFAULT);
		echo $hash . "<br>";
		return $hash;
	}
 
	function decryption($password, $hash)
	{
		$result = password_verify($password, $hash);
		return $result;
	}
   
?>