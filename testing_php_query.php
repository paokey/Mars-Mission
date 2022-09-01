<!-- table display Martian information -->
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
	  	echo " ".$row['Martian ID']." ".$row['Base Name']." ".$row['Martian Leader']." <br>";
	  }
	} else {
	  echo "0 results";
	}
	$conn->close();
?>

<!-- dash appear -->
<?php 
    $sql = "SELECT
            COUNT(base.base_name) AS 'No of Member',
            e.martian_id AS Martian_ID,
            CONCAT( e.first_name, ' ', e.last_name) AS 'Martians',
            IFNULL(CONCAT(m.first_name, ' ', m.last_name),'Top Supervisor') AS 'Martian Leader',
            base.base_name AS 'Base Name'
            FROM martian e
            INNER JOIN martian m ON m.martian_id = e.super_id
            INNER JOIN base ON m.base_id = base.base_id
            GROUP BY base.base_name
        ";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	  	// echo " ".$row['No of Member']." ".$row['Base Name']." ".$row['Martian Leader']." <br>";
	  }
	} else {
	  echo "0 results";
	}
?>







<!-- inside the index -->


<!-- table area -->
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
				  	echo " <button type='button' class='btn btn-success'>Update</button>";
				  	echo " <button type='button' class='btn btn-danger'>Delete</button>";
				  	echo "</td>";
				  	echo "</tr>";
				  	// echo " ".$row['Martian ID']." ".$row['Base Name']." ".$row['Martian Leader']." <br>";
				  }
				} else {
				  echo "0 results";
				}
				$conn->close();
			?>	


