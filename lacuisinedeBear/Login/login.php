<?php 
ob_start();
session_start();
require "../../db_config.php";

?>

<?php

if(!isset($_POST["luser"])|| empty($_POST['luser'])) {
	echo "<p>Account incomplet.</p>";
	require("login_form.php");
}

else if(!isset($_POST["lpass"]) || empty($_POST['lpass'])) {
	echo "<p>Password incomplet.</p>";
	require("login_form.php");
}

else {
	$luser = $_POST["luser"];

	$lpass = $_POST["lpass"];


//KT co user ko da
	$x = 0; //Ko user ton tai
	$sql = "SELECT * FROM users";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($rowUsers = mysqli_fetch_assoc($result)) {
			if($luser == $rowUsers['user']) {
				$x = 1;
			}

		}
	}

// Co user thi KT xen pass co chuan ko
	
	if($x != 1) {
		echo "<p>Error to connect or Compte n'existe pas</p>";
		require("login_form.php");
	} else {
		$sql2 = "SELECT * FROM users WHERE user = '".$luser."'";
		$result2 = mysqli_query($conn, $sql2);
		if (mysqli_num_rows($result2) > 0) {
			while ($rowUsers2 = mysqli_fetch_assoc($result2)) {
				$mdp = $rowUsers2['mdp'];
				if($lpass != $mdp) {
					echo "<p>Error to connect</p>";
					require("login_form.php");
				} else {
					$_SESSION['uid'] = $rowUsers2['uid'];
					$_SESSION['nom'] = $rowUsers2['unom'];
					$_SESSION['pnom'] = $rowUsers2['upnom'];
					$_SESSION['user'] = $rowUsers2['user'];
					header("Location: ../index.php");
					exit();
				}

			}
		}

	}


}

//mysqli_free_result($result1);
//mysqli_free_result($result3);
?>
