<?php 
	
	// INIT APP
	require 'App/app.php';

	// GET DATA 
	$articles = $db->query("SELECT * FROM articles",[],$conn);

	// VIEW DATE

	View::make("index",["articles" => $articles,
		"title" => "home","active" => "home"]);
	

 ?>
