<div class="container">
<h2>Patient toevoegen</h2>
	<form action="<?= URL ?>patients/createSave" method="post">
	<label>
		<p><input type="text" name="Name" placeholder="Naam Dier"></p>
			<select name="species">
    			<option value="volvo">Volvo</option>
		<p><input type="text" name="FirstName" placeholder="Voornaam"></p>
		<p><input type="text" name="LastName" placeholder="Achternaam"></p>

		<input type="submit" value="Verzenden">
	</label>
	</form> 

</div>