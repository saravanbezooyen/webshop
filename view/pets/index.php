	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Species</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
		<?php foreach($pets as $pet){ ?>
			<tr>
				<td><?php echo $pet["ID"]; ?></td>
				<td><?php echo $pet["Name"]; ?></td>
				<td><a href="<?= URL ?>pet/edit/<?php echo $pet["ID"]; ?>"><i class="material-icons button edit">edit</i></a></td>
				<td><a href="<?= URL ?>pet/delete/<?php echo $pet["ID"]; ?>"><i class="material-icons button delete">delete</i></a></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
		<p class="create"><a href="<?= URL ?>pet/create"><i class="material-icons button">person_add</i></a></p>