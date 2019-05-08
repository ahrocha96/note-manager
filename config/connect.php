<?php
	function connect()
	{
		$c1host = "localhost";
		$c1user = "root";
		$c1pass = "thisisagoodpassword";
		$connection = new mysqli($c1host, $c1user, $c1pass) or die("Connect failed: %s\n". $connection -> error);
 
		return $connection;
	}
	function connectdb()
	{
		$dbname = "c1";
		$c1host = "localhost";
		$c1user = "root";
		$c1pass = "thisisagoodpassword";
		$connection = new mysqli($c1host, $c1user, $c1pass, $dbname) or die("Connect failed: %s\n". $connection -> error);
 
		return $connection;
	}
 
	function closeConnect($connection)
	{
		$connection -> close();
	}
   
?>