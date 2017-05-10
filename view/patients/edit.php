<div class="container">
	<h1>Patient bewerken</h1>
	<form action="<?= URL ?>patient/editSave" method="post">
	
		<p><input type="text" name="ClientID" value="<?= $patient['ClientID']; ?>"></p>
		<p><input type="text" name="PetID" value="<?= $patient['PetID']; ?>"></p>
		<p><input type="text" name="Name" value="<?= $patient['Name']; ?>"></p>

		<input type="hidden" name="ID" value="<?= $patient['ID']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
