<?php

function getAppointment($ID) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM appointments WHERE ID = :ID";
	$query = $db->prepare($sql);
	$query->execute(array(
		":ID" => $ID));

	$db = null;

	return $query->fetch();
}

function getAllAppointments() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM appointments";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function editAppointment() 
{
	$PatientID = isset($_POST['PatientID']) ? $_POST['PatientID'] : null;
	$Complaint = isset($_POST['Complaint']) ? $_POST['Complaint'] : null;
	$Solution = isset($_POST['Solution']) ? $_POST['Solution'] : null;
	$Date = isset($_POST['Date']) ? $_POST['Date'] : null;
	$ID = isset($_POST['ID']) ? $_POST['ID'] : null;
	
	if (strlen($PatientID) == 0 | strlen($Complaint) == 0 || strlen($Solution) == 0 || strlen($Date) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE appointments SET PatientID = :PatientID, Complaint = :Complaint, Solution = :Solution, Date = :Date WHERE ID = :ID";
	$query = $db->prepare($sql);
	$query->execute(array(
		':PatientID' => $PatientID,
		':Complaint' => $Complaint,
		':Solution' => $Solution,
		':Date' => $Date,
		':ID' => $ID));

	$db = null;
	
	return true;
}

function deleteAppointment($ID = null) 
{
	if (!$ID) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM appointments WHERE ID=:ID ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':ID' => $ID));

	$db = null;
	
	return true;
}

function createAppointment() 
{
	$PatientID = isset($_POST['PatientID']) ? $_POST['PatientID'] : null;
	$Complaint = isset($_POST['Complaint']) ? $_POST['Complaint'] : null;
	$Solution = isset($_POST['Solution']) ? $_POST['Solution'] : null;
	$Date = isset($_POST['Date']) ? $_POST['Date'] : null;
	
	if (strlen($PatientID) == 0 | strlen($Complaint) == 0 || strlen($Solution) == 0 || strlen($Date) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO appointments (PatientID, Complaint, Solution, Date) VALUES (:PatientID, :Complaint, :Solution, :Date)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':PatientID' => $PatientID,
		':Complaint' => $Complaint,
		':Solution' => $Solution,
		':Date' => $Date));

	$db = null;
	return true;
}
