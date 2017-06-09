<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>categories/editSave" method="post">
	
		<input type="text" name="category_description" value="<?= $category['category_description']; ?>">

		<input type="hidden" name="category_id" value="<?= $category['category_id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
