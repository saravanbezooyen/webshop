<?php

function getPet($ID) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM pets WHERE ID = :ID";
	$query = $db->prepare($sql);
	$query->execute(array(
		":ID" => $ID));

	$db = null;

	return $query->fetch();
}

function getAllPets() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM pets";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function editPet() 
{
	$Name = isset($_POST['Name']) ? $_POST['Name'] : null;
	$ID = isset($_POST['ID']) ? $_POST['ID'] : null;
	
	if (strlen($Name) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE pets SET Name = :Name WHERE ID = :ID";
	$query = $db->prepare($sql);
	$query->execute(array(
		':Name' => $Name,
		':ID' => $ID));

	$db = null;
	
	return true;
}

function deletePet($ID = null) 
{
	if (!$ID) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM pets WHERE ID=:ID ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':ID' => $ID));

	$db = null;
	
	return true;
}

function createPet() 
{
	$Name = isset($_POST['Name']) ? $_POST['Name'] : null;
	
	if (strlen($Name) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO pets (Name) VALUES (:Name)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':Name' => $Name));

	$db = null;
	return true;
}
