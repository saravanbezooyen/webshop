<?php

require(ROOT . "model/CategoriesModel.php");

function index()
{
	render("categories/index", array(
		'categories' => getAllCategories()
	));
}

function create()
{
	render("categories/create");
}

function createSave()
{
	if (!createCategory()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "categories/index");
}

function edit($category_id)
{
	render("categories/edit", array(
		'category' => getCategory($category_id)
	));
}

function editSave()
{
	if (!editCategory()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "categories/index");
} 

function delete($category_id)
{
	if (!deleteCategory($category_id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "categories/index");
}
