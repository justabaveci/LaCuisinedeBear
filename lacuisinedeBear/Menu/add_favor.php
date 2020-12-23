
<?php 
ob_start();
session_start();
require "../../db_config.php";

?>


<?php
$x = 0; //ko co
// ajouter au panier
if(isset($_GET['ffid'])) {
	$fid = $_GET['ffid'];
	

	if (isset($_SESSION['user'])) {

		$uid = $_SESSION['uid'];

		//KT xem co ton tai trong favor ko, co thi tang qte
		$sql3 = "SELECT * FROM favor";
		$result3 = mysqli_query($conn, $sql3);
		if (mysqli_num_rows($result3) > 0) {
			while ($rowF = mysqli_fetch_assoc($result3)) {
				if (($uid == $rowF['uid']) && ($fid == $rowF['fid'])) {
					$x = 1;
				} 
				

			}

		}

		if ($x == 0) {
			//Them vo favor
			$sql2 = "INSERT INTO favor VALUES (null,".$uid.",".$fid.")";
			$result2 = mysqli_query($conn, $sql2);
			//		echo "insert";
			
		}

	} else {


		$check = 0; //ko trung
		

		//Neu ko ton tai user thi luu vo session
		if (isset($_SESSION['arrayFavor'])) {
			foreach ($_SESSION['arrayFavor'] as $nameFav) {
				if ($nameFav == $fid) {
					$check = 1;
				}
			}
			if ($check != 1) {
				array_push($_SESSION['arrayFavor'], $fid);
			}
		} else {
			
			$_SESSION['arrayFavor'] = array($fid);
		}

		header("Location: Menu.php");
		exit();
		
	}
}



header("Location: Menu.php");
			exit();


?>