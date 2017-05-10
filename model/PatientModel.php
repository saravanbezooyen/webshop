<?php

function getPatient($ID) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients WHERE ID = :ID";
	$query = $db->prepare($sql);
	$query->execute(array(
		":ID" => $ID));

	$db = null;

	return $query->fetch();
}

function getAllPatients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT `patients`.*, `pets`.Name as species,  `clients`.FirstName, `clients`.LastName
			FROM `patients`
			INNER JOIN `pets`
			ON `patients`.PetID = `pets`.ID
			INNER JOIN `clients`
			ON `patients`.ClientID = `clients`.ID" ;

	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function editPatient() 
{
	$ClientID = isset($_POST['ClientID']) ? $_POST['ClientID'] : null;
	$PetID = isset($_POST['PetID']) ? $_POST['PetID'] : null;
	$Name = isset($_POST['Name']) ? $_POST['Name'] : null;
	$ID = isset($_POST['ID']) ? $_POST['ID'] : null;
	
	if (strlen($ClientID) == 0 || strlen($PetID) == 0 || strlen($Name) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE patients SET ClientID = :ClientID, PetID = :PetID, Name = :Name WHERE ID = :ID";
	$query = $db->prepare($sql);
	$query->execute(array(
		':ClientID' => $ClientID,
		':PetID' => $PetID,
		':Name' => $Name,
		':ID' => $ID));

	$db = null;
	
	return true;
}

function deletePatient($ID = null) 
{
	if (!$ID) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM patients WHERE ID=:ID ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':ID' => $ID));

	$db = null;
	
	return true;
}

function createPatient() 
{
	$ClientID = isset($_POST['ClientID']) ? $_POST['ClientID'] : null;
	$PetID = isset($_POST['PetID']) ? $_POST['PetID'] : null;
	$Name = isset($_POST['Name']) ? $_POST['Name'] : null;
	
	if (strlen($ClientID) == 0 || strlen($PetID) == 0 || strlen($Name) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients (ClientID, PetID, Name) VALUES (:ClientID, :PetID, :Name)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':ClientID' => $ClientID,
		':PetID' => $PetID,
		':Name' => $Name));

	$db = null;
	return true;
}
