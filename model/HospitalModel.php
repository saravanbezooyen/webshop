<?php

function getHospital($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM hospital WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function getAllHospital() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM hospital ORDER BY month, day, year";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function editHospital() 
{
	$person = isset($_POST['person']) ? $_POST['person'] : null;
	$day = isset($_POST['day']) ? $_POST['day'] : null;
	$month = isset($_POST['month']) ? $_POST['month'] : null;
	$year = isset($_POST['year']) ? $_POST['year'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($person) == 0 || strlen($day) == 0 || strlen($month) == 0 || strlen($year) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE hospital SET person = :person, day = :day, month = :month, year = :year WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':person' => $person,
		':day' => $day,
		':month' => $month,
		':year' => $year,
		':id' => $id));

	$db = null;
	
	return true;
}

function deleteHospital($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM hospital WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}

function createHospital() 
{
	$person = isset($_POST['person']) ? $_POST['person'] : null;
	$day = isset($_POST['day']) ? $_POST['day'] : null;
	$month = isset($_POST['month']) ? $_POST['month'] : null;
	$year = isset($_POST['year']) ? $_POST['year'] : null;
	
	if (strlen($person) == 0 || strlen($day) == 0 || strlen($month) == 0 || strlen($year) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO hospital (name, species, status) VALUES (:name, :species, :status)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':species' => $species,
		':status' => $status));

	$db = null;
	return true;
}
