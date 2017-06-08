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
	if (!createCategories()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "categories/index");
}

function edit($categories_id)
{
	render("categories/edit", array(
		'categorie' => getCategories($categories_id)
	));
}

function editSave()
{
	if (!editCategories()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "categories/index");
} 

function delete($categories_id)
{
	if (!deleteCategories($categories_id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "categories/index");
}
