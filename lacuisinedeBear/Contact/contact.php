<?php 
session_start();
require "../../db_config.php";
$page_title = "Contact";
$page_css= "css_contact.css";
include("../header.php");
 ?>

		<div id="header-line">
			<button id="btnHome" type="button" onclick="window.location.href='../../index.php'">Home</button>
			<button id="btnHome" type="button" onclick="window.location.href='../index.php'">La cuisine de Bear</button>
			<button id="btnHome" type="button" onclick="window.location.href='../Menu/Menu.php'">Menu</button>
			<button id="btnHome" type="button" onclick="window.location.href='../Login/login.php'">Login</button>
			<button id="btnHome" type="button" onclick="window.location.href='../Favorite/favor.php'">Favorite</button>
			<button id="btnHome" type="button" onclick="window.location.href='../Panier/panier.php'">Panier</button>
			

		</div>

		<div>
			<center>
				<div id="content">
				<h3>Contact</h3>
			</div>
			</center>

			

			

		</div>


<?php 
include("../footer.php");
 ?>