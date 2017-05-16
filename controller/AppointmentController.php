<?php

require(ROOT . "model/AppointmentModel.php");

function index()
{

	render("appointments/index", array(
		'appointments' => getAllAppointments()));
}

function create()
{
	render("appointments/create");
}

function createSave()
{
	if (!createAppointment()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "appointment/index");
}

function edit($ID)
{
	render("appointments/edit", array(
		'appointment' => getAppointment($ID)
	));
}

function editSave()
{
	if (!editAppointment()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "appointment/index");
} 

function delete($ID)
{
	if (!deleteAppointment($ID)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "appointment/index");
}
