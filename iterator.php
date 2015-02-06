<?php

// SPL Directory Iterators.
$dir = new DirectoryIterator('App');
foreach($dir as $file){

	if($file->isFile())
		echo $file->getPathname() . "\n";
}