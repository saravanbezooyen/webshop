<?php

require(ROOT . "model/PetModel.php");

function index()
{

	render("pets/index", array(
		'pets' => getAllPets()));
}

function create()
{
	render("pets/create");
}

function createSave()
{
	if (!createPet()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "pet/index");
}

function edit($ID)
{
	render("pets/edit", array(
		'pet' => getPet($ID)
	));
}

function editSave()
{
	if (!editPet()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "pet/index");
} 

function delete($ID)
{
	if (!deletePet($ID)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "pet/index");
}
