<?php

require(ROOT . "model/HospitalModel.php");

function index()
{
	render("hospital/index"));
}

function create()
{
	render("hospital/create");
}

function createSave()
{
	if (!createHospital()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "birthday/index");
}

function edit($id)
{
	render("hospital/edit", array(
		'hospital' => getBirthday($id)
	));
}

function editSave()
{
	if (!editHospital()) {
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
