<?php

function getCategories($categories_id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM categories WHERE categories_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $categories_id));

	$db = null;

	return $query->fetch();
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

function editCategories() 
{
	$categories_name = isset($_POST['categories_name']) ? $_POST['categories_name'] : null;
	$categories_id = isset($_POST['categories_id']) ? $_POST['categories_id'] : null;
	
	if (strlen($categories_name) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE categories SET categories_name = :categories_name WHERE categories_id = :categories_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':categories_name' => $categories_name,
		':categories_id' => $categories_id));

	$db = null;
	
	return true;
}

function deleteCategories($categories_id = null) 
{
	if (!$categories_id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM categories WHERE categories_id=:categories_id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':categories_id' => $categories_id));

	$db = null;
	
	return true;
}

function createCategories() 
{
	$categories_name = isset($_POST['categories_name']) ? $_POST['categories_name'] : null;
	
	if (strlen($categories_name) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO categories(categories_name) VALUES (:categories_name)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':categories_name' => $categories_name));

	$db = null;
	
	return true;
}
