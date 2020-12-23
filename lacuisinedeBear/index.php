<?php 
session_start();
$page_title = "La cuisine de Bear";
$page_css= "css_index.css";
include("header.php");
?>



<div id="left">

	<div>
		<button type="button" onclick="window.location.href='../index.php'">Home</button>
	</div>

	<div>
		<button type="button" onclick="window.location.href='Menu/Menu.php'">Menu</button>
	</div>

	<div>
		<?php
		if(isset($_SESSION['user'])) {
			?>
			<button type="button" onclick="window.location.href='Login/logout.php'">Logout</button>
			<?php

		} else {
			?>
			<button type="button" onclick="window.location.href='Login/login_form.php'">Login</button>
			<?php
		}
		?>

	</div>

	<div>
		<button type="button" onclick="window.location.href='Panier/panier.php'">Panier</button>
	</div>

	<div>
		<button type="button" onclick="window.location.href='Contact/contact.php'">Contact</button>
	</div>


</div>

<div id="content">
	<img src="../images/Gau4.png" alt="La cuisine de Bear">

</div>


<?php 
include("footer.php");
?>