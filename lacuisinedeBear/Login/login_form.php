<?php 
//session_start();
require "../../db_config.php";
$page_title = "Login";
$page_css= "css_login.css";
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


				<form action="login.php" method="post">
					<table id="tab">
						<tr>
							<th>Login</th>
						</tr>
						<tr>
							<td id="padtop">&nbsp User :</td>
						</tr>
						<tr>
							<td class="subcenter"><input type="text" id="user" name="luser" required></td>
						</tr>

						<tr>
							<td>&nbsp Password :</td>
						</tr>
						<tr>
							<td class="subcenter"><input type="text" id="pass" name="lpass" required></td>
						</tr>
						
						<tr>
							<td class="subcenter"><input type="submit" class="sub" value="Login"></td>
						</tr>
						<tr>
							<td id="check">If you don't have account. Let's join us ^o^ </td>
						</tr>
						<tr>
							<td class="subcenter"><input type="button" class="sub" value="Join the Bear team" onclick="window.location.href='join_form.php'"></td>
						</tr>
						
					</table>


					
				</form> 

				

			</div>
			

			<div id="left">
				<img src="../../images/Gau5.png" alt="La cuisine de Bear">

			</div>


<?php 
include("../footer.php");
 ?>