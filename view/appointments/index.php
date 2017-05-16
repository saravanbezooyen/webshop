	<table>
		<thead>
			<tr>
				<th>Naam Patient</th>
				<th>Klacht</th>
				<th>Oplossing</th>
				<th>Datum</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
		<?php foreach($appointments as $appointment){ ?>
			<tr>
				<td><?php echo $appointment["PatientID"]; ?></td>
				<td><?php echo $appointment["Complaint"]; ?></td>
				<td><?php echo $appointment["Solution"]; ?></td>
				<td><?php echo $appointment["Date"]; ?></td>
				<td><a href="<?= URL ?>appointment/edit/<?php echo $appointment["ID"]; ?>"><i class="material-icons button edit">edit</i></a></td>
				<td><a href="<?= URL ?>appointment/delete/<?php echo $appointment["ID"]; ?>"><i class="material-icons button delete">delete</i></a></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
		<p class="create"><a href="<?= URL ?>appointment/create"><i class="material-icons button">person_add</i></a></p>