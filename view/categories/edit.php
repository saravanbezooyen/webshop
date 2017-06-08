<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>categories/editSave" method="post">
	
		<input type="text" name="categories_name" value="<?= $categorie['categories_name']; ?>">

		<input type="hidden" name="categories_id" value="<?= $categorie['categories_id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
