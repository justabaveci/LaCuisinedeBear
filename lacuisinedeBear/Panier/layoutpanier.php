
<table>

	<tr>
		<th>No</th>
		<th>Name</th>
		<th>Price</th>
		<th>Quantite</th>
		<th>Action</th>
	</tr>

	<?php

//Neu co user
	if (isset($_SESSION['user'])) {
		$c = 0;
		$uid = $_SESSION['uid'];
	//Vo database
		$sqlPan = "SELECT * FROM paniers INNER JOIN foods ON foods.fid = paniers.fid AND uid=".$uid;
		$resPan = mysqli_query($conn, $sqlPan);
		if (mysqli_num_rows($resPan) > 0) {
			while ($rowPan = mysqli_fetch_assoc($resPan)) {
				?>

				<tr>
					<td> <?php echo $c++; ?> </td>
					<td> <?php echo $rowPan['fnom'] ?> </td>
					<td> <?php echo $rowPan['description'] ?> </td>
					<td> <?php echo $rowPan['uqte'] ?> </td>
					<td>Xoa</td>
				</tr>

				<?php
			}
		}
	
	} else if (isset($_SESSION['arrayPanier'])) {
		$count = 0;
		$index = 0;
		$i = 0;
		foreach ($_SESSION['arrayPanier'] as $namePan) {
			foreach ($namePan as $key => $value) {
				$i = $index;
				if ($key == 'fid') {
					$sql2 = "SELECT * FROM foods WHERE fid=".$value." ";
					$res2 = mysqli_query($conn, $sql2);
					if (mysqli_num_rows($res2) > 0) {
						while ($row2 = mysqli_fetch_assoc($res2)) {
							?>

							<tr>
								<td> <?php echo $count++; ?> </td>
								<td> <?php echo $row2['fnom'] ?> </td>
								<td> <?php echo $row2['description'] ?> </td>
				

							<?php
						}
					}
				}
				if ($key == 'qte') {
					?>

								<td> <?php echo $value; ?> </td>
								<td> <a href="del_panier.php?index=<?php echo $i ?>">Delete</a> </td>
							</tr>

							<?php
				}

				

			}
			$index++;
		}
	} else {
		echo "<h4>You haven't add anything on panier yet. </h4>";
	}

	?>

	

</table>