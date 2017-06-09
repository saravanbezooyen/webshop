<div class="container">
	<table border="1">
		<tr>
			<th>#</th>
			<th>Categories</th>

			<th colspan="2">Actie</th>
		</tr>
		
		<?php foreach ($categories as $category) { ?>
		<tr>
			<td><?= $category['category_id']; ?></td>
			<td><?= $category['category_description']; ?></td>

			<td><a href="<?= URL ?>categories/edit/<?= $category['category_id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>categories/delete/<?= $category['category_id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>categories/create">Toevoegen</a>
</div>