<?php 
	
	$languages = array("fr", "en", "esp");

	if(isset($_GET['lang'])){
		if(in_array($_GET['lang'], $languages)){
			require_once $_GET['lang'].'.php';
		}
	}else{
		require_once 'fr.php';
	}


 ?>