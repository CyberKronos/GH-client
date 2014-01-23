<?php 

// Check the make sure we have a url query
if(!empty($_GET)) 
{ 
	$get_parameters = array();
	if (isset($_SERVER['QUERY_STRING'])) {
		$pairs = explode('&', $_SERVER['QUERY_STRING']);
		foreach($pairs as $pair) {
    			$part = explode('=', $pair);
    			$get_parameters[$part[0]] = urldecode($part[1]);
    		}
  	}

	// Check should we include the header
	if($get_parameters['includeshortheader'] == 'true'){
		 // include('h:\root\home\markoj-001\www\main\assets\inc\incfiles\client-header.inc.php');
		 include('c:\xampp\htdocs\GH-client\assets\inc\incfiles\client-header-with-navbar.inc.php');
	}

	// Open the related file and include it
	if(!empty($get_parameters['content'])){
		// $html = file_get_contents('c:/xampp/htdocs/GH-client/cards/LoL/lol_champ_wiki/' . $get_parameters['content'] . '.php');
		echo $html;
	}
} 
?>