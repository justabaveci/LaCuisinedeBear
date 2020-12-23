
 <?php

$hostname = "localhost";
$dbname = "u21611949";
$username = "u21611949";
$password = "223lHxT39ege";
/*
$dsn = "mysql:host=$hostname;dbname=$dbname;charset=utf8";

try {
	$db = new PDO($dsn,$username,$password);
	//echo "Connected";
} catch (PDOException $e) {
	$error = $e->getMessage();
	echo $error;
}
*/

$conn = new mysqli($hostname,$username,$password,$dbname) or die ('Failed');

?>