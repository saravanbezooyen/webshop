<div class="container">
	<h1>Baasje bewerken</h1>
	<form action="<?= URL ?>client/editSave" method="post">
	
		<p><input type="text" name="Voornaam" value="<?= $client['FirstName']; ?>"></p>
		<p><input type="text" name="Achternaam" value="<?= $client['LastName']; ?>"></p>
		<p><input type="text" name="Telefoonnummer" value="<?= $client['Phone']; ?>"></p>
		<p><input type="text" name="Emailadres" value="<?= $client['Email']; ?>"></p>

		<input type="hidden" name="ID" value="<?= $client['ID']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
