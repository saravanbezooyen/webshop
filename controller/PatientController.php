<?php

require(ROOT . "model/PatientModel.php");

function index()
{
	render("hospital/index");
}

function create()
{
	render("hospital/create");
}

function createSave()
{
	if (!createPatient()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "hospital/index");
}

function edit($id)
{
	render("hospital/edit", array(
		'patient' => getPatient($ID)
	));
}

function editPatient()
{
	if (!editPatient()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "hospital/index");
} 

function delete($id)
{
	if (!deleteHospital($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "hospital/index");
}
