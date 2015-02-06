<?php 
	

	/**
	* View
	*/
	class View
	{
		

		public static function make($name,$data = null)
		{
			if($data){
				extract($data);
			}
			$view = 'views/'.$name.'.view.php';
	        include 'views/layout.php';
		}
	}
 ?>