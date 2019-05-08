<?php
   include('../config/session.php');
   include('notes_controller.php');
   include('user_controller.php');
   $author = get_owner($email_check, $conn);
   $id = get_owner_id($email_check, $conn);

	

   	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(isset($_POST['create']) && !empty($_POST['create']))
		{
			$inp_title = mysqli_real_escape_string($conn,$_POST['title']);
			$inp_content = mysqli_real_escape_string($conn,$_POST['content']);
			if($inp_title != '' || $inp_content != '')
			{
				create($id, $inp_title, $author, $inp_content, $conn);
				$inp_title = '';
				$inp_content = '';
			}
		}
		if(isset($_POST['update']) && !empty($_POST['update']))
		{
			$hidden_id = mysqli_real_escape_string($conn,$_POST['id']);
			$inp_new = mysqli_real_escape_string($conn,$_POST['content2']);
			update($inp_new,$hidden_id, $conn );
		}
		if(isset($_POST['delete']) && !empty($_POST['delete']))
		{
			$id=$_POST['id'];
			delete($id, $conn);
		}

	$_POST['title'] = '';
	$_POST['create'] = '';
	$_POST['update'] = '';
	$_POST['content'] = '';
	$_POST['content2'] = '';
	$_POST['id'] = '';
	$_POST['delete'] = '';
		//$testPassword = '$sh4rpspr1nG$';
	}


?>
