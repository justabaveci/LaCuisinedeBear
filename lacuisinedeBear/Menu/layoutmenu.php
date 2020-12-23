


<?php 

//$conn là đường kết nôi database

//truy van bang type
$sqlTypes = "SELECT * FROM types";

$resultTypes = mysqli_query($conn,$sqlTypes);


?>

<table>
	<tr>
		<th>List of Bear food</th>
	</tr>



	<?php 
	$typeid = 0;
//Xet types truoc
	if (mysqli_num_rows($resultTypes) > 0) {
		while ($rowTypes = mysqli_fetch_assoc($resultTypes)) {
			?>

			<tr>
				<td> 
					<details open>
						<summary type="button" class="dropbtn"> 
							<?php 
							echo $rowTypes["typenom"];
							
							$typeid = $rowTypes["typeid"];
							?>
						</summary>
						<center>

							<?php 
//truy van bang foods
							$sqlFoods = "SELECT * FROM foods WHERE typeid =".$typeid;

//ket qua cua bang Foods
							$resultFoods = mysqli_query($conn,$sqlFoods);
//Xet foods
							if (mysqli_num_rows($resultFoods) > 0) {

								while ($rowFoods = mysqli_fetch_assoc($resultFoods)) {
									
									
									?>


									<table>
										<tr>
											<td class="pad" width="25%" rowspan="3"> <img id="imgFood" src=
												<?php
												echo $rowFoods["fimg"];
												?>
												> </td>
												<td class="pad" width="50%"> 
													<?php
													echo $rowFoods["fnom"];
													?>
												</td>
												<td class="pad" width="25%" height="50%" rowspan="2"> 
													<img src="../../images/favor.png" onclick="window.location.href='add_favor.php?ffid=<?php echo $rowFoods["fid"] ?>'
													">
												</td>
											</tr>

											<tr>
												<td class="pad" rowspan="3"> 
													<?php
													echo $rowFoods["description"];
													?>
												</td>
											</tr>
											<tr>
												<td class="pad" rowspan="2"> 
													
													<img src="../../images/panier.png"  onclick="window.location.href='add_panier.php?fpid=<?php echo $rowFoods["fid"] ?>'
													">
												</td>
											</tr>
											<tr>
												<td class="pad"> 
													<?php
													echo $rowFoods["price"];
													?>
												</td>

											</tr>

										</table>
										

										<?php	
//end cua foods
									}

								} else echo "0 foods";
								?>				
							</center>
						</details>



					</td>
				</tr>

				<?php	
//end cua types
			}
		} else echo "0 types";
		?>

	</table>

