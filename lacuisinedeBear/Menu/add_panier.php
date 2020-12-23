
<?php 
ob_start();
session_start();
require "../../db_config.php";

?>


<?php
// ajouter au panier
if(isset($_GET['fpid'])) {
	$fid = $_GET['fpid'];
	$qte = 1;


	if (isset($_SESSION['user'])) {

		$uid = $_SESSION['uid'];

		//KT xem co ton tai trong panier ko, co thi tang qte
		$sql3 = "SELECT * FROM paniers";
		$result3 = mysqli_query($conn, $sql3);
		if (mysqli_num_rows($result3) > 0) {
			while ($rowP = mysqli_fetch_assoc($result3)) {
				if (($uid == $rowP['uid']) && ($fid == $rowP['fid'])) {
					$qte = $rowP['uqte'] + 1;
					//Sua qte trong panier
					$sql4 = "UPDATE paniers SET uqte=".$qte." WHERE uid=".$uid." AND fid=".$fid." ";
					$result4 = mysqli_query($conn, $sql4);
					header("Location: Menu.php");
					exit();
				} 
			}
		}

		//Them vo panier
		$sql2 = "INSERT INTO paniers VALUES (null,".$uid.",".$fid.",".$qte.")";
		$result2 = mysqli_query($conn, $sql2);
			//		echo "insert";
		header("Location: Menu.php");
		exit();

	} else {

		$check = 0; //ko trung
		$index = 0;
		$i = 0;

		//Neu ko ton tai user thi luu vo session
		if (isset($_SESSION['arrayPanier'])) {
			foreach ($_SESSION['arrayPanier'] as $namePan) {
				foreach ($namePan as $key => $value) {
					if ($key == 'fid' && $value == $fid) {
						$check = 1;
						$i = $index;
							//thay doi nho qua index
						$_SESSION['arrayPanier'][$i]['qte']++;
					} 

				}
				$index++;
			}
		//	$_SESSION['i'] = $i;

			

			if ($check != 1) {
				$newarr = array('fid'=>$fid, 'qte'=>$qte);
				array_push($_SESSION['arrayPanier'], $newarr);
			}
			
		} else {
			$arPan = array('fid'=>$fid, 'qte'=>$qte);
			$_SESSION['arrayPanier'] = array($arPan);
		}

		header("Location: Menu.php");
		exit();
		
		
	}
}






?>