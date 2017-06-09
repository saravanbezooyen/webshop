<div class="container">
	<form action="<?= URL ?>product/createSave" method="post">
	
		<input type="text" name="product_name" placeholder="name">
		<input type="text" name="product_description" placeholder="description">
		<input type="text" name="product_price" placeholder="price">

		<select name="category_id">
			<?php foreach ($categories as $category) { ?>
			<option value="<?= $category['category_id'] ?>"><?= $category['category_description'] ?></option>
			<?php } ?>
		</select>

		<input type="submit" value="Verzenden">
	
	</form>

</div>