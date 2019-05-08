<?php
	function create($owner_id, $title, $author, $content, $conn)
	{
		$new_note = "INSERT into notes (owner_id, title, author, content)
		VALUES ($owner_id, '$title', '$author', '$content')";
	
		if ($conn->query($new_note) === TRUE)
		{
		}
		else
		{
			echo "ERROR: " . $new_note . "<br>" . $conn->error;
		}
	}
 
 	function retrieve($author, $conn)
	{
		$note_query = "SELECT * FROM notes WHERE author = '$author' ";
		$note_out = $conn->query($note_query);
		//$row = $note_out->fetch_array(MYSQLI_ASSOC);
		return $note_out;
	}
	
 	function update($value, $id, $conn)
	{
		$update_query = "UPDATE notes SET content = '$value' WHERE id = '$id' ";
		$update_out = $conn->query($update_query);
		//$row = $note_out->fetch_array(MYSQLI_ASSOC);
		return $update_out;
	}
 	function delete($id, $conn)
	{
		$delete_query = "DELETE FROM notes WHERE id = '$id' ";
		$delete_out = $conn->query($delete_query);
		//$row = $note_out->fetch_array(MYSQLI_ASSOC);
	}
 
   
?>