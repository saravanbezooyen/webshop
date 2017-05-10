<?php

require(ROOT . "model/PatientModel.php");

function index()
{

	render("patients/index", array(
		'patients' => getAllPatients()));
}

function create()
{
	render("patients/create");
}

function createSave()
{
	if (!createPatient()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "patients/index");
}

function edit($ID)
{
	render("patients/edit", array(
		'patient' => getPatient($ID)
	));
}

function editSave()
{
	if (!editPatient()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "patient/index");
} 

function delete($ID)
{
	if (!deletePatient($ID)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "patients/index");
}
