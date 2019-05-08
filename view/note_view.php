<?php
   $note_out = retrieve($author, $conn);
						if(mysqli_num_rows($note_out) > 0)
						{
							$i = 0;
							while($current_row = $note_out->fetch_array(MYSQLI_ASSOC))
							{
								$i++;
								echo "<tr>";
								//echo "<td>" . $current_row['id'] . " </td>";
								echo "<td><span class = 'bold-stuff'>" . $current_row['title'] . " </span></td>";
								echo "<td>" . "(created by " . $current_row['author'] . ", </td>";
								echo "<td>" . $current_row['created_at'] . ") </td>";
								//echo "<td><a href='delete.php?id=".$current_row['id']."'>Delete</a></td>" . "";
								echo "<td>
								<form action='' method='post'>
									<input type='hidden' name = 'id' value ="  . $current_row['id'] .  "/>
									<input type='submit' name = 'delete' value = 'Delete' class = 'button1' />
								</form>
								</td>";
								
									
								echo "<button id='Btn" . $i . "'  class = 'button2'>Edit</button>
									<div id='Modal" . $i . "' class='modal2'>

									 <div class='modal-content2'>
										<span class='close2" . $i . "'>&times;</span>
										<p style = 'font-weight: bold;'>Edit your note below:</p>
										<form action = '' method = 'post'>
												<textarea name = 'content2' rows = '10' cols = '20' 
												wrap = 'soft' class = 'content-box' />
												" . $current_row['content'] ."
												</textarea>
											<input type='hidden' name = 'id' value ="  . $current_row['id'] .  "/>
											<input type = 'submit' name = 'update' value = 'Save Edits' class = 'submit'/><br />
										</form>
										
									 </div>

									</div>

									<script>
									var modal2" . $i . " = document.getElementById('Modal" . $i . "');
									var btn2" . $i . " = document.getElementById('Btn" . $i . "');
									var span2" . $i . " = document.getElementsByClassName('close2" . $i . "')[0];

									btn2" . $i . ".onclick = function()
									{
									  modal2" . $i . ".style.display = 'block';
									}
									span2" . $i . ".onclick = function()
									{
									  modal2" . $i . ".style.display = 'none';
									}
									window.onclick = function(event)
									{
									  if (event.target == modal2" . $i . ") 
									  {
										modal2" . $i . ".style.display = 'none';
									  }
									}
									</script>
									<br><br>";
							echo $current_row['content'] . "</tr>" 
							. "<br>-------------------------------------------------------------------------------------------------<br><br>";	
							
							}
						}
						else
						{
							echo "No notes. Try creating one!";
						}

?>
