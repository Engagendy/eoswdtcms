<?php

	$upload_dir = "uploads/";
	// Basename to get the end part after /slash lookup
	$file = $upload_dir . basename( $_FILES["picture"]["name"] );
	$didUpload = true;
	// var_dump($_FILES);die;
	// Get the file type "extension" .jpg
	$fileType = pathinfo( $file, PATHINFO_EXTENSION );	
	
	// Check if image file is a actual image or fake image
	if ( isset( $_POST["submit"] ) ) {

		// GET the image info 
		$imageInfo = getimagesize( $_FILES["picture"]["tmp_name"] );
		// var_dump($imageInfo);die;
		if ( $imageInfo !== false ) {
			echo "File is an image - " . $imageInfo["mime"] . ".";
			$didUpload = true;
		} else {
			echo "File is not an image.";
			$didUpload = false;
		}
	}

	// Check if file already exists
	if ( file_exists( $file ) ) {
		echo "File Already Exisit !.";
		$didUpload = false;
	}

	// Check file size
	if ( $_FILES["picture"]["size"] > 400000 ) {
		echo "File too large < 4M.";
		$didUpload = false;
	}

	// Allow certain file formats
	if ( $fileType != "jpg" && $fileType != "png" && $fileType != "jpeg"
		&& $fileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files allowed.";
		$didUpload = false;
	}

	// Check if $didUpload is set to false by an error
	if ( $didUpload == false ) {
		echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
	} 
	else {
		
		if ( move_uploaded_file( $_FILES["picture"]["tmp_name"], $file ) ) {
			echo "The file ". basename( $_FILES["picture"]["name"] ). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
