<?php

function getClient($ID) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients WHERE ID = :ID";
	$query = $db->prepare($sql);
	$query->execute(array(
		":ID" => $ID));

	$db = null;

	return $query->fetch();
}

function getAllClients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function editClient() 
{
	$FirstName = isset($_POST['FirstName']) ? $_POST['FirstName'] : null;
	$LastName = isset($_POST['LastName']) ? $_POST['LastName'] : null;
	$Phone = isset($_POST['Phone']) ? $_POST['Phone'] : null;
	$Email = isset($_POST['Email']) ? $_POST['Email'] : null;
	$ID = isset($_POST['ID']) ? $_POST['ID'] : null;
	
	if (strlen($FirstName) == 0 || strlen($LastName) == 0 || strlen($Phone) == 0 || strlen($Email) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE clients SET FirstName = :FirstName, LastName = :LastName, Phone = :Phone, Email = :Email WHERE ID = :ID";
	$query = $db->prepare($sql);
	$query->execute(array(
		':FirstName' => $FirstName,
		':LastName' => $LastName,
		':Phone' => $Phone,
		':Email' => $Email,
		':ID' => $ID));

	$db = null;
	
	return true;
}

function deleteClient($ID = null) 
{
	if (!$ID) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM clients WHERE ID=:ID ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':ID' => $ID));

	$db = null;
	
	return true;
}

function createClient() 
{
	$FirstName = isset($_POST['FirstName']) ? $_POST['FirstName'] : null;
	$LastName = isset($_POST['LastName']) ? $_POST['LastName'] : null;
	$Phone = isset($_POST['Phone']) ? $_POST['Phone'] : null;
	$Email = isset($_POST['Email']) ? $_POST['Email'] : null;
	
	if (strlen($FirstName) == 0 || strlen($LastName) == 0 || strlen($Phone) == 0 || strlen($Email) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO clients (FirstName, LastName, Phone, Email) VALUES (:FirstName, :LastName, :Phone, :Email)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':FirstName' => $FirstName,
		':LastName' => $LastName,
		':Phone' => $Phone,
		':Email' => $Email));

	$db = null;
	return true;
}
