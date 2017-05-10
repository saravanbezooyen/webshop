	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Client</th>
				<th>Klacht</th>
				<th colspan="2">Actie</th>
			</tr>
		</thead>
		</tbody>
			<?php foreach($patients as $patient){ ?>
				<tr>
					<td><?php echo $patient["Name"]; ?></td>
					<td><?php echo $patient["species"]; ?></td>
					<td><?php echo $patient["FirstName"] . " " . $patient["LastName"]; ?></td>
					<td>Koorts, eet slecht, blaft veel te veel</td>
					<td><a href="<?= URL ?>patient/edit/<?php echo $patient["ID"]; ?>"><i class="material-icons button edit">edit</i></a></td>
					<td><a href="<?= URL ?>patient/delete/<?php echo $patient["ID"]; ?>"><i class="material-icons button delete">delete</i></a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
		<p class="create"><a href="<?= URL ?>patient/create"><i class="material-icons button">person_add</i></a></p>