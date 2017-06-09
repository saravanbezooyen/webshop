<?php

require(ROOT . "model/ProductModel.php");
require(ROOT . "model/CategoriesModel.php");

function index()
{
	render("product/index", array(
		'products' => getAllProducts()
	));
}

function create()
{
	render("product/create", array(
		'products' => getAllProducts(),
		'categories' => getAllCategories()
	));
}

function createSave()
{
	if (!createProduct()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "product/index");
}

function edit($product_id)
{
	render("product/edit", array(
		'product' => getProduct($product_id),
		'categories' => getAllCategories()
	));
}

function editSave()
{
	if (!editProduct()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "product/index");
} 

function delete($product_id)
{
	if (!deleteProduct($product_id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "product/index");
}
