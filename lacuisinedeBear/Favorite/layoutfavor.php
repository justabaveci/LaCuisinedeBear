

<table>
	<tr>
		<th>No</th>
		<th>Name</th>
		<th>Price</th>
		<th>Action</th>
	</tr>

	<?php

//Neu co user
	if (isset($_SESSION['user'])) {
		$c = 0;
		$uid = $_SESSION['uid'];
	//Vo database
		$sqlFav = "SELECT * FROM favor INNER JOIN foods ON foods.fid = favor.fid AND uid=".$uid;
		$resFav = mysqli_query($conn, $sqlFav);
		if (mysqli_num_rows($resFav) > 0) {
			while ($rowFav = mysqli_fetch_assoc($resFav)) {
				?>

				<tr>
					<td> <?php echo $c++; ?> </td>
					<td> <?php echo $rowFav['fnom'] ?> </td>
					<td> <?php echo $rowFav['description'] ?> </td>
					<td>unlike</td>
				</tr>

				<?php
			}
		}
		
	} else if (isset($_SESSION['arrayFavor'])) {
		$count = 0;
		foreach ($_SESSION['arrayFavor'] as $nameFav) {
			$sql2 = "SELECT * FROM foods WHERE fid=".$nameFav." ";
			$res2 = mysqli_query($conn, $sql2);
			if (mysqli_num_rows($res2) > 0) {
				while ($row2 = mysqli_fetch_assoc($res2)) {
					?>

					<tr>
						<td> <?php echo $count++; ?> </td>
						<td> <?php echo $row2['fnom'] ?> </td>
						<td> <?php echo $row2['description'] ?> </td>
						<td>unlike</td>
					</tr>

					<?php
				}
			}
		}
	} else {
		echo "<h4>You haven't add anything on favor yet. </h4>";
	}

	?>


	

</table>