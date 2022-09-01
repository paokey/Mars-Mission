<!-- calling header and database connection -->
<?php
        require_once("nav.php")
?>

<!-- dash start here------------------------------------------->
	<div class="row">
	<?php 
	    $sql = "SELECT
	            COUNT(m.first_name) AS 'No of Member',
	            e.martian_id AS Martian_ID,
	            CONCAT( e.first_name, ' ', e.last_name) AS 'Martians',
	            IFNULL(CONCAT(m.first_name, ' ', m.last_name),'Top Supervisor') AS 'Martian Leader',
	            base.base_name AS 'Base Name'
	            FROM martian e
	            INNER JOIN martian m ON m.martian_id = e.super_id
	            INNER JOIN base ON m.base_id = base.base_id
	            GROUP BY m.first_name 
	        ";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
			echo "<div class='col btn btn-primary m-3 >";
				echo "<p class='text-center text-uppercase btn-dark'>".$row['Base Name']."</p>";
				echo "<img src='img/base.png' width='200' height='200' >";
				echo "<p class='text-center text-uppercase fs-3 btn-dark'>".$row['Martian Leader']."</p>";
				echo "<p class='text-center text-uppercase fs-6 btn-light'>Number of Member: ".$row['No of Member']."</p>";
			echo "</div>";


		  	// echo " ".$row['No of Member']." ".$row['Base Name']." ".$row['Martian Leader']." <br>";
		  }
		} else {
		  echo "0 results";
		}
	?>
	</div>
<!-- dash end here------------------------------------------->

<div class="col-5">
	<a href="add.php" type="button" class="btn btn-success m-1">Add New Martian</a>
</div>

<!-- table query start here---------------------------------------------------- -->
	<div class="row m-1">
		<table class="table">
			<thead class="table-dark">
				<tr>
					<th  >Martian ID</th>
					<th  >Martian Full Name</th>
					<th  >Assigned Base</th>
					<th  >Martian Leader</th>
					<th  >Action</th>					 
				</tr>
			</thead>
			<tbody>


		<?php 
			$sql = "SELECT  e.martian_id AS 'Martian ID', 
					CONCAT( e.first_name, ' ', e.last_name) AS 'Martians Name',
				    IFNULL(base.base_name,'Top Supervisor') AS 'Base Name',
				    IFNULL(CONCAT(m.first_name, ' ', m.last_name), 'Top Supervisor') AS 'Martian Leader'
				    FROM martian e
				    LEFT JOIN martian m ON  m.martian_id = e.super_id
				    LEFT JOIN base ON e.base_id = base.base_id
				    ORDER BY e.martian_id
					";	

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			  	echo "<tr>";
			  	echo "<th scope='row'>".$row['Martian ID']."</th>";
			  	echo "<td >".$row['Martians Name']."</th>";
			  	echo "<td >".$row['Base Name']."</th>";
			  	echo "<td >".$row['Martian Leader']."</th>";
			  	echo "<td>";
				echo('<a href="edit.php?martian_id='.$row['Martian ID'].'">Edit</a> / ');
           		echo('<a href="delete.php?martian_id='.$row['Martian ID'].'">Delete</a>');
			  	echo "</td>";
			  	echo "</tr>";
			  	// echo " ".$row['Martian ID']." ".$row['Base Name']." ".$row['Martian Leader']." <br>";
			  }
			} else {
			  echo "0 results";
			}
		?>	
		<div class="modal fade" id="update<?php echo $fetch['user_id']?>" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form method="POST" action="update.php">
						<div class="modal-header">
							<h3 class="modal-title">Update User</h3>
						</div>	
							<div class="modal-body">
								<div class="col-md-2"></div>
									<div class="col-md-8">
										<div class="form-group">
											<label>Name</label>
											<input class="form-control" type="text" value="<?php echo $fetch['name']?>" name="name"/>
											<input type="hidden" value="<?php echo $fetch['user_id']?>" name="user_id"/>
										</div>
										<div class="form-group">
											<label>Email</label>
											<input class="form-control" type="text" value="<?php echo $fetch['email']?>" name="email"/>
										</div>
										<div class="form-group">
											<label>Password</label> 
											<input class="form-control" type="text" value="<?php echo $fetch['password']?>" name="password"/>
										</div>
										<div class="form-group">
											<button class="btn btn-warning form-control" type="submit" name="update">Update</button>
										</div>
										</div>	
									</div>	
									<br style="clear:both;"/>
									<div class="modal-footer">
										<button class="btn btn-danger" data-dismiss="modal">Close</button>
									</div>
								</form>
							</div>
						</div>
					</div>	

			</tbody>
		</table>
	</div>
<!--table query ends here------------------------------------------------------ -->
</div>
<?php
    require_once("footer.php")
?>

</body>
</html>