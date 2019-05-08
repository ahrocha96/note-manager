<?php
	function connect()
	{
		$c1host = "localhost";
		$c1user = "id9554771_root";
		$c1pass = "Bluedevils2013";
		$connection = new mysqli($c1host, $c1user, $c1pass) or die("Connect failed: %s\n". $connection -> error);
 
		return $connection;
	}
	function connectdb()
	{
		$dbname = "id9554771_c1";
		$c1host = "localhost";
		$c1user = "id9554771_root";
		$c1pass = "Bluedevils2013";
		$connection = new mysqli($c1host, $c1user, $c1pass, $dbname) or die("Connect failed: %s\n". $connection -> error);
 
		return $connection;
	}
 
	function closeConnect($connection)
	{
		$connection -> close();
	}
   
?>