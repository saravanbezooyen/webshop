<?php

function getProduct($product_id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT `products`.*, `categories`.`category_description`
			FROM `products`
			INNER JOIN `categories`
			ON `products`.`category_id` = `categories`.`category_id`
			WHERE `products`.`category_id` = `categories`.`category_id`" ;

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $product_id));

	$db = null;

	return $query->fetch();
}

function getAllProducts() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT `products`.*, `categories`.`category_description`
			FROM `products`
			INNER JOIN `categories`
			ON `products`.`category_id` = `categories`.`category_id`";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function editProduct() 
{
	$product_name = isset($_POST['product_name']) ? $_POST['product_name'] : null;
	$product_description = isset($_POST['product_description']) ? $_POST['product_description'] : null;
	$product_price = isset($_POST['product_price']) ? $_POST['product_price'] : null;
	$category_id = isset($_POST['category_id']) ? $_POST['category_id'] : null;
	$product_id = isset($_POST['product_id']) ? $_POST['product_id'] : null;
	
	if (strlen($product_name) == 0 || strlen($product_description) == 0 || strlen($product_price) == 0 || strlen($category_id) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE products SET product_name = :product_name, product_description = :product_description, product_price = :product_price, category_id = :category_id WHERE product_id = :product_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':product_name' => $product_name,
		':product_description' => $product_description,
		':product_price' => $product_price,
		':category_id' => $category_id,
		':product_id' => $product_id));

	$db = null;
	
	return true;
}

function deleteProduct($product_id = null) 
{
	if (!$product_id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM products WHERE product_id=:product_id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':product_id' => $product_id));

	$db = null;
	
	return true;
}

function createProduct() 
{
	$product_name = isset($_POST['product_name']) ? $_POST['product_name'] : null;
	$product_description = isset($_POST['product_description']) ? $_POST['product_description'] : null;
	$product_price = isset($_POST['product_price']) ? $_POST['product_price'] : null;
	$category_id = isset($_POST['category_id']) ? $_POST['category_id'] : null;
	
	if (strlen($product_name) == 0 || strlen($product_description) == 0 || strlen($product_price) == 0 || strlen($category_id) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO products(product_name, product_description, product_price, category_id) VALUES (:product_name, :product_description, :product_price, :category_id)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':product_name' => $product_name,
		':product_description' => $product_description,
		':product_price' => $product_price,
		':category_id' => $category_id));

	$db = null;
	
	return true;
}
