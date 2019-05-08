<?php
	function create_user($owner_id, $title, $author, $content)
	{
		//if we had a user management system
	}
 
 	function get_owner($email_check, $conn)
	{
		$owner_query = "SELECT name FROM users WHERE email = '$email_check' ";
		$owner_out = $conn->query($owner_query);
		$row = $owner_out->fetch_array(MYSQLI_ASSOC);
		$owner = $row['name'];
		return $owner;
	}
	function get_owner_id($email_check, $conn)
	{
		$id_query = "SELECT id FROM users WHERE email = '$email_check' ";
		$id_out = $conn->query($id_query);
		$row = $id_out->fetch_array(MYSQLI_ASSOC);
		$id = $row['id'];
		return $id;
	}
 	function update_user($password)
	{
		//if we had a user management system
	}
 	function delete_user($password)
	{
		//if we had a user management system
	}
 
   
?>