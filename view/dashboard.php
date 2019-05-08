<?php
   include('../controllers/request_handler.php');
?>
<html>
   
	<head>
		<title>Dashboard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		
	</head>
   
	<body>

		<h1><u><?php echo $session_user; ?>'s Note Board</u></h1> 
		<a href = "logout.php" class = "new-button">Logout</a>
			
			
		<!-- Trigger/Open The Modal -->
		<button id="myBtn" class = "new-button">+New Note</button>
		<!-- The Modal -->
		<div id="myModal" class="modal">

		<!-- Modal content -->
		 <div class="modal-content">
			<span class="close">&times;</span>
			<p style = "font-weight: bold;">Enter your note below:</p>
			<form action = "" method = "post">
				<label>Note Title:</label><input type = "text" name = "title" class = "box"/><br /><br />
				<label>Note Content:</label><textarea name = "content" rows = "10" cols = "20" wrap = "soft" class = "content-box" /></textarea>
				<input type = "submit" name = "create" value = " Submit " class = "submit"/><br />
			</form>
		 </div>

		</div>

		<script>
		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal 
		btn.onclick = function() {
		  modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		  modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		  if (event.target == modal) {
			modal.style.display = "none";
		  }
		}
		</script>



			<div align = "center">
				<div style = "width:700px; border: solid 1px #228B22; " align = "left">
					<div style = "background-color:#228B22; color:#FFFFFFFF; padding:3px;"><b>Notes</b></div>
				
					<div style = "margin:30px">
					<?php
						include('../view/note_view.php');
					?>
					</div>
				
				</div>
			
			</div>

	</body>
   
   
</html>
