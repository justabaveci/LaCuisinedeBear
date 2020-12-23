<?php 
ob_start();
session_start();
require "../../db_config.php";

?>

<?php
if(isset($_SESSION['user'])) {
	echo "Please sign out";
	header("Location: ../index.php");
					exit();
} else {



	if(!isset($_POST['jnom']) || !isset($_POST['jpnom']) || !isset($_POST['juser']) || !isset($_POST['jpass']) || !isset($_POST['jpassconfirm']) || empty($_POST['jnom']) || empty($_POST['jpnom']) || empty($_POST['juser']) || empty($_POST['jpass']) || empty($_POST['jpassconfirm'])) {
		echo "<h4>Information invalide.</h4>";
		include("join_form.php");
	} else if ($_POST['jpass'] != $_POST['jpassconfirm']) {
		echo "<h4>Password invalide.</h4>";
		include("join_form.php");
	} else {
		$jnom = $_POST['jnom'];
		$jpnom = $_POST['jpnom'];
		$juser = $_POST['juser'];
		$jpass = $_POST['jpass'];
		//$hash_pass = password_hash($pass, PASSWORD_DEFAULT)
	//$jpassconfirm = $_POST['jpassconfirm'];

	//Luu vo session
		$_SESSION['user'] = $juser;
		$_SESSION['nom'] = $jnom;
		$_SESSION['pnom'] = $jpnom;



	//Neu can thi se luu nhung cai con lai sau 

	/*
	$_SESSION['jpass'] = $jpass;
	*/

	//Kiem tra xem co bi trung user ko
	$x = 0; //dau tien la ko co
	$sql1 = "SELECT * FROM users";
	$result1 = mysqli_query($conn, $sql1);
	if (mysqli_num_rows($result1) > 0) {
		while ($rowUsers = mysqli_fetch_assoc($result1)) {
			if($juser == $rowUsers['user']) {
				$x = 1; //bang 1 la trung nha

			}

		}
	}

	//Ko trung thi INSERT to users
	if ($x == 0) {

		$sql2 = "INSERT INTO users VALUES (null,'".$jnom."','".$jpnom."','".$juser."','".$jpass."',2)";
		$result2 = mysqli_query($conn, $sql2);


		//tim uid cua users
		$sql3 = "SELECT * FROM users";
		$result3 = mysqli_query($conn, $sql3);
		if (mysqli_num_rows($result3) > 0) {
			while ($rowUsers3 = mysqli_fetch_assoc($result3)) {
				if($juser == $rowUsers3['user']) {
					$_SESSION['uid'] = $rowUsers3['uid'];
					header("Location: ../index.php");
					exit();
				}

			}
		}
		
	} else {
		?>
		<h style="font-size: 40px" >Someone used this user name. Please choose another one.</h>
		<?php

		include("join_form.php");

		

		
	}

	


}


mysqli_free_result($result1);
//mysqli_free_result($result3);


}
?>


