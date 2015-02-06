<?php 
	
	//name space declaration
	namespace App\DB;
	//use App\DB;
	//Require files
	require 'App/config/database.php';
	require 'App/db.php';
	require 'view.php';

	
	//Create db object
	$db = new DB($config);


	//get the PDO object or connection
	$conn = $db->connect();

	//Check connection success 
	if(!$conn) die("Erro in DB connection");


 ?>