<?php 
session_start();
$page_title="Apprendre le français";
$page_css="indexFra.css";
include ("header.php");
?>



	<div id="rightIndex">
		<div>
			<button class="btn1" type="button" onclick="window.location.href='../index.php'">Home</button>
		</div>

		<div>
			<button class="btn1" type="button" onclick="window.location.href='Grammaire/grammaire.php'">Grammaire</button>
		</div>
		
		<div>
			<button class="btn1" type="button" onclick="window.location.href='../index.php'">Lecture</button>
		</div>
		
		<div>
			<button class="btn1" type="button" onclick="window.location.href='../index.php'">Écouteur</button>
		</div>
		
		

	</div>
<center>
	<div id="leftIndex">
		<img src="../images/French/eiffel.png" alt="Eiffel Tower">
	</div>

	

</center>
<?php 
include ("footer.php");
?>