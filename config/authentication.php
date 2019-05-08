<?php
	function encryption($password)
	{
		$hash = password_hash($password, PASSWORD_DEFAULT);
		return $hash;
	}
 
	function decryption($password, $hash2)
	{
		$result = password_verify($password, $hash2);
		return $result;
	}
   
?>