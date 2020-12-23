<?php 
//session_start();
//require "../../db_config.php";
$page_title = "Join the Bear team";
$page_css= "css_join.css";
include("../header.php");
?>

<div id="header-line">
	<button id="btnHome" type="button" onclick="window.location.href='../../index.php'">Home</button>
	<button id="btnHome" type="button" onclick="window.location.href='../index.php'">La cuisine de Bear</button>
	<button id="btnHome" type="button" onclick="window.location.href='../Menu/Menu.php'">Menu</button>
	<button id="btnHome" type="button" onclick="window.location.href='../Favorite/favor.php'">Favorite</button>
	<button id="btnHome" type="button" onclick="window.location.href='../Panier/panier.php'">Panier</button>
	<button id="btnHome" type="button" onclick="window.location.href='../Contact/contact.php'">Contact</button>


</div>



<div >

	<div id="right">


		<form action="add_join.php" method="post">
			<table id="tab">
				<tr>
					<th>Join</th>
				</tr>
				<tr>
					<td id="padtop">&nbsp Nom :</td>
				</tr>

				<tr>
					<td class="subcenter"><input type="text" class="info" name="jnom" required></td>
				</tr>

				<tr>
					<td>&nbsp Prénom :</td>
				</tr>

				<tr>
					<td class="subcenter"><input type="text" class="info" name="jpnom" required></td>
				</tr>

				<tr>
					<td>&nbsp User :</td>
				</tr>

				<tr>
					<td class="subcenter"><input type="text" class="info" name="juser" required></td>
				</tr>

				<tr>
					<td>&nbsp Password :</td>
				</tr>
				<tr>
					<td class="subcenter"><input type="password" class="info" name="jpass" required=""></td>
				</tr>

				<tr>
					<td>&nbsp Password confirm :</td>
				</tr>
				<tr>
					<td class="subcenter"><input type="password" class="info" name="jpassconfirm" required></td>
				</tr>

				<tr>
					<td class="subcenter"><input type="submit" class="sub" value="Join the Bear team"></td>
				</tr>
				

			</table>



		</form> 



	</div>


	<div id="bear">
		<img src="../../images/Gau5.png" alt="La cuisine de Bear">

	</div>




	<?php 
	include("../footer.php");
	?>