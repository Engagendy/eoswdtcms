<?php 
	
	require 'App/app.php';


	//query the database
	$authors = $db->query("SELECT * FROM authors",[],$conn);


	// VIEW DATA 
	View::make("authors",["authors" => $authors,
		"title" => "authors","active"=>"authors"]);

 ?>

