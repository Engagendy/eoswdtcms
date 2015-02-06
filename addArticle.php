<?php 
	
	// INIT APP
	require 'App/app.php';

	// GET DATA 
	// $articles = $db->query("SELECT * FROM articles",[],$conn);

	// VIEW DATE

	View::make("add",["title" => "add article ","active" => "home"]);
	

 ?>