<div class="container">
	<h1>Baasje bewerken</h1>
	<form action="<?= URL ?>client/editSave" method="post">
	
		<p><input type="text" name="FirstName" value="<?= $client['FirstName']; ?>"></p>
		<p><input type="text" name="LastName" value="<?= $client['LastName']; ?>"></p>
		<p><input type="text" name="Phone" value="<?= $client['Phone']; ?>"></p>
		<p><input type="text" name="Email" value="<?= $client['Email']; ?>"></p>

		<input type="hidden" name="ID" value="<?= $client['ID']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
