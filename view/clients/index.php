	<table>
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Phone</th>
				<th>Email</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
			<?php foreach($clients as $client){ ?>
				<tr>
					<td><?php echo $client["FirstName"]; ?></td>
					<td><?php echo $client["LastName"]; ?></td>
					<td><?php echo $client["Phone"]; ?></td>
					<td><?php echo $client["Email"]; ?></td>
					<td><a href="<?= URL ?>client/edit/<?php echo $client["ID"]; ?>"><i class="material-icons button edit">edit</i></a></td>
					<td><a href="<?= URL ?>client/delete/<?php echo $client["ID"]; ?>"><i class="material-icons button delete">delete</i></a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
		<p class="create"><a href="<?= URL ?>client/create"><i class="material-icons button">person_add</i></a></p>