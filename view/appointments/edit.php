<div class="container">
	<h1>Afspraak bewerken</h1>
	<form action="<?= URL ?>appointment/editSave" method="post">
	
		<p><input type="text" name="Patient" value="<?= $appointment['PatientID']; ?>"></p>
		<p><input type="text" name="Klacht" value="<?= $appointment['Complaint']; ?>"></p>
		<p><input type="text" name="Oplossing" value="<?= $appointment['Solution']; ?>"></p>
		<p><input type="text" name="Datum" value="<?= $appointment['Date']; ?>"></p>

		<input type="hidden" name="ID" value="<?= $appointment['ID']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>
</div>