<div class="container">
	<table border="1">
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th colspan="2">Actie</th>
		</tr>
		
		<?php foreach ($products as $product) { ?>
		<tr>
			<td><?= $product['product_id']; ?></td>
			<td><?= $product['product_name']; ?></td>
			<td><?= $product['product_description']; ?></td>
			<td><?= $product['product_price']; ?></td>
			<td><a href="<?= URL ?>product/edit/<?= $product['product_id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>product/delete/<?= $product['product_id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>product/create">Toevoegen</a>
</div>