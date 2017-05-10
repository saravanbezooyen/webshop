<div class="container">
	<h1>Patient bewerken</h1>
	<form action="<?= URL ?>pet/editSave" method="post">
	
		<p><input type="text" name="Name" value="<?= $pet['Name']; ?>"></p>

		<input type="hidden" name="ID" value="<?= $pet['ID']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
