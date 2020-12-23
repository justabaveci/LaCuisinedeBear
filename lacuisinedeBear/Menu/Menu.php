<?php 
session_start();
require "../../db_config.php";
$page_title = "Menu";
$page_css= "cmenu.css";
include("../header.php");


?>

<div id="header-line">
	<button class="btn1" type="button" onclick="window.location.href='../../index.php'">Home</button>
	<button class="btn1" type="button" onclick="window.location.href='../index.php'">La cuisine de Bear</button>
	<?php
	if(isset($_SESSION['user'])) {
		?>
		<button class="btn1" type="button" onclick="window.location.href='../Login/logout.php'">Logout</button>
		<?php

	} else {
		?>
		<button class="btn1" type="button" onclick="window.location.href='../Login/login_form.php'">Login</button>
		<?php
	}
	?>
	<button class="btn1" type="button" onclick="window.location.href='../Favorite/favor.php'">Favorite</button>
	<button class="btn1" type="button" onclick="window.location.href='../Panier/panier.php'">Panier</button>
	<button class="btn1" type="button" onclick="window.location.href='../Contact/contact.php'">Contact</button>

</div>

<div>

	<div id="contentMenu">

		<?php require "layoutmenu.php"; ?>


	</div>

	<div id="bearMenu">
		<img src="../../images/Gau1.png" alt="La cuisine de Bear">

	</div>

</div>



<?php 


include("../footer.php");
?>