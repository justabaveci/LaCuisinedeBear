<?php 
ob_start();
session_start();
require "../../db_config.php";

?>

<?php

if (isset($_GET['index'])) {
	$index = 0;
	$newarr = null;

	$i = $_GET['index'];
	foreach ($_SESSION['arrayPanier'] as $namePan) {
		if($i != $index) {
			$newarr = array_push($newarr, $namePan);
		}
		
		$index++;
	}

	$_SESSION['arrayPanier'] = $newarr;



	header("Location: panier.php");
			exit();
	
}

?>