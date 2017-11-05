<?php return
"<h2>Create new tattoo</h2>
<form method='post' action='index.php?pagina=toevoegen' enctype='multipart/form-data' >
	<label for='titel'>Title:</label>
	<input type='text' name='titel'>

	<label for='emotie'>Feeling:</label>
	<select name='emotie'>
		<option value='1'>Butterflies and Fluff</option>
		<option value='2'>Passion</option>
		<option value='3'>Rough</option>
		<option value='4'>Other</option>
	</select>

	<label for='stijl'>Form:</label>
	<select name='stijl'>
		<option value='1'>Minimalism</option>
		<option value='2'>Geometry</option>
		<option value='3'>Nature</option>
		<option value='4'>Other</option>
	</select>

	<label for='plek'>Place:</label>
	<select name='plek'>
		<option value='1'>Back</option>
		<option value='2'>Arm</option>
		<option value='3'>Leg</option>
		<option value='4'>Torso</option>
		<option value='5'>Other</option>
	</select>
	<label for='image-data'>Image:</label>
	<input type='file' name='image-data' accept='image/jpeg' />
	<input type='submit' value='Add this tattoo' name='toevoegen' />
  </form>";

?>

