<?php

function getCategory($category_id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM categories WHERE category_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $category_id));

	

	return $query->fetch();
	$db = null;
}

function getAllCategories() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM categories";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function editCategory() 
{
	$category_description = isset($_POST['category_description']) ? $_POST['category_description'] : null;
	$category_id = isset($_POST['category_id']) ? $_POST['category_id'] : null;
	
	if (strlen($category_description) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE categories SET category_description = :category_description WHERE category_id = :category_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':category_description' => $category_description,
		':category_id' => $category_id));

	$db = null;
	
	return true;
}

function deleteCategory($category_id = null) 
{
	if (!$category_id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM categories WHERE category_id=:category_id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':category_id' => $categories_id));

	$db = null;
	
	return true;
}

function createCategory() 
{
	$category_description = isset($_POST['category_description']) ? $_POST['category_description'] : null;
	
	if (strlen($category_description) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO categories(category_description) VALUES (:category_description)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':category_description' => $category_description));

	$db = null;
	
	return true;
}
