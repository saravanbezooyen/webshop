<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>product/editSave" method="post">
	
		<input type="text" name="product_name" value="<?= $product['product_name']; ?>">
		<input type="text" name="product_description" value="<?= $product['product_description']; ?>">
		<input type="text" name="product_price" value="<?= $product['product_price']; ?>">

		<select name="category_id">
			<?php foreach ($categories as $category) { ?>
			<option value="<?= $category['category_id'] ?>"><?= $category['category_description'] ?></option>
			<?php } ?>
		</select>
		

		<input type="hidden" name="product_id" value="<?= $product['product_id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
