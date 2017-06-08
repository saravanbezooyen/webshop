<div class="container">
	<table border="1">
		<tr>
			<th>#</th>
			<th>Categories</th>

			<th colspan="2">Actie</th>
		</tr>
		
		<?php foreach ($categories as $categorie) { ?>
		<tr>
			<td><?= $categorie['categories_id']; ?></td>
			<td><?= $categorie['categories_name']; ?></td>

			<td><a href="<?= URL ?>categories/edit/<?= $categorie['categories_id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>categories/delete/<?= $categorie['categories_id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>categories/create">Toevoegen</a>
</div>