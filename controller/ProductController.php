<?php

require(ROOT . "model/ProductModel.php");
require(ROOT . "model/CategoriesModel.php");

function index($category_id = null)
{
	if ($category_id != null) {
		$products = getAllProductsByCategory($category_id);
	} else {
		$products = getAllProducts();
	}

	render("product/index", array(
		'products' => $products,
		'categories' => getAllCategories()
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

	header("Location:" . URL . "product/index".$_POST['product_id']);
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

	header("Location:" . URL . "product/index".$_POST['product_id']);
} 

function delete($product_id)
{
	$product = getBook($product_id);
	if (!deleteProduct($product_id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "product/index".$product['author_id']);
}
