<div class="container">
	<h1>Patient bewerken</h1>
	<form action="<?= URL ?>patient/editSave" method="post">
	
		<select name="ClientID">
			<?php foreach ($clients as $client) { ?>
			<option value="<?= $client['ID'] ?>"><?= $client['FirstName'] . " " . $client['LastName'] ?></option>
			<?php } ?>
		</select>

		<select name="PetID">
			<?php foreach ($species as $pet) { ?>
			<option value="<?= $pet['ID'] ?>"><?= $pet['Name'] ?></option>
			<?php } ?>
		</select>

		<p><input type="text" name="Name" value="<?= $patient['Name']; ?>"></p>

		<input type="hidden" name="ID" value="<?= $patient['ID']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
