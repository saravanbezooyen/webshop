	<h2>Patiënts</h2>
	<table border="1">
		<thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
				<th>Client</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
			<tr>
				<td>Bobbie</td>
				<td>hond</td>
				<td>Koorts, eet slecht, blaft veel te veel</td>
				<td>John Doe</td>
				<td class="center"><a href="edit/<?php echo $patient["ID"]; ?>"></a></td>
				<td class="center"><a href="#">delete</a></td>
			</tr>
		</tbody>
	</table>
		<p><a href="#">Create</a></p>
		<p><a href="index.html">Home</a></p>