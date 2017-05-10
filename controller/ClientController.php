<?php

require(ROOT . "model/ClientModel.php");

function index()
{

	render("clients/index", array(
		'clients' => getAllClients()));
}

function create()
{
	render("clients/create");
}

function createSave()
{
	if (!createClient()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "client/index");
}

function edit($ID)
{
	render("clients/edit", array(
		'client' => getClient($ID)
	));
}

function editSave()
{
	if (!editClient()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "client/index");
} 


function delete($ID)
{
	if (!deleteClient($ID)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "client/index");
}
