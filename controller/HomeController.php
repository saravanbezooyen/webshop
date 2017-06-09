<?php

require(ROOT . "model/ProductModel.php");
require(ROOT . "model/CategoriesModel.php");

function index()
{
	render("home/index");	
}