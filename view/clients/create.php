<div class="container">
<h2>Baasje toevoegen</h2>
	<form action="<?= URL ?>client/createSave" method="post">
	<label>
		<p><input type="text" name="FirstName" placeholder="Voornaam"></p>
		<p><input type="text" name="LastName" placeholder="Achternaam"></p>
		<p><input type="text" name="Phone" placeholder="Telefoonnummer"></p>
		<p><input type="text" name="Email" placeholder="Emailadres"></p>

		<input type="submit" value="Verzenden">
	</label>
	</form> 

</div>