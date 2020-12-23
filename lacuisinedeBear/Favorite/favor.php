<?php 
session_start();
require "../../db_config.php";
$page_title = "Favorite";
$page_css= "css_favor.css";
include("../header.php");
?>



<div id="header-line">
	<button id="btnHome" type="button" onclick="window.location.href='../../index.php'">Home</button>
	<button id="btnHome" type="button" onclick="window.location.href='../index.php'">La cuisine de Bear</button>
	<button id="btnHome" type="button" onclick="window.location.href='../Menu/Menu.php'">Menu</button>

	<?php
		if(isset($_SESSION['user'])) {
			?>
			<button type="button" onclick="window.location.href='../Login/logout.php'">Logout</button>
			<?php

		} else {
			?>
			<button type="button" onclick="window.location.href='../Login/login_form.php'">Login</button>
			<?php
		}
		?>


	<button id="btnHome" type="button" onclick="window.location.href='../Panier/panier.php'">Panier</button>
	<button id="btnHome" type="button" onclick="window.location.href='../Contact/contact.php'">Contact</button>


</div>

<div>
	<center>

		<div id="top">
			<img src="../../images/Gau6.png" alt="La cuisine de Bear">
			
		</div>

		<div>

						<?php require "layoutfavor.php"; ?>
			
		</div>

	</center>

</div>


<?php 
include("../footer.php");
?>