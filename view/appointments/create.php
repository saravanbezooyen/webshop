<div class="container">
<h2>Afspraak toevoegen</h2>
	<form action="<?= URL ?>appointment/createSave" method="post">
	<label>
		<p><input type="text" name="PatientID" placeholder="Patient"></p>
		<p><input type="text" name="Complaint" placeholder="Klacht"></p>
		<p><input type="text" name="Solution" placeholder="Oplossing"></p>
		<p><input type="text" name="Date" placeholder="Datum"></p>

		<input type="submit" value="Verzenden">
	</label>
	</form> 

</div>