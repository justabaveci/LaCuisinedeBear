<?php 
session_start();
$page_title="Grammaire";
$page_css="../indexFra.css";
include ("../header.php");
include ("headerF.php");
?>


<center>

<div>
	<h3> Temps </h3>
	<table>
		<tr>
			<th>Indicatif</th>
			<th>Subjonctif</th>
			<th>Conditionnel</th>
			<th>Impératif</th>
		</tr>
		<tr>
			<td>
				<button class="btn2" type="button" onclick="window.location.href='presentIndicatif.php'">Présent</button>
			</td>

		</tr>
	</table>
</div>

</center>
<?php 
include ("../footer.php");
?>