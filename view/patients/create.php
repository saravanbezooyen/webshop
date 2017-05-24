<div class="container">
<h2>Patient toevoegen</h2>
	<form action="<?= URL ?>patient/createSave" method="post">
	<label>
		<p><input type="text" name="Name" placeholder="Naam Dier"></p>
			
		<select name="PetID">
			<?php foreach ($species as $pet) { ?>
			<option value="<?= $pet['ID'] ?>"><?= $pet['Name'] ?></option>
			<?php } ?>
		</select>
		
		<select name="ClientID">
			<?php foreach ($clients as $client) { ?>
			<option value="<?= $client['ID'] ?>"><?= $client['FirstName'] . " " . $client['LastName'] ?></option>
			<?php } ?>
		</select>

		<input type="submit" value="Verzenden">
	</label>
	</form> 

</div>