<?php
// calling header and database connection
require_once("nav.php");


if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['bname']) && isset($_POST['sname'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$bname = $_POST['bname'];
	$sname = $_POST['sname'];

	$sql = "INSERT INTO `martian` (`first_name`, `last_name`, `base_id`, `super_id`) 
				VALUES ('".$fname."', '".$lname."', '".$bname."', '".$sname."')";
 
	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

?>

<main class="flex-shrink-0">
    <div class="container">
		<h2>ADD NEW MARTIAN</h2>
		<form method="post" class="form-control btn-primary">
		    <p>First Name:
		    <input class="form-control" type="text" name="firstname" id="firstname"></p>
		    <p>Last Name:
		    <input class="form-control" type="text" name="lastname" id="lastname"></p>
		  	<p>Base Name:
		  	 <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="basename">
				<option value="1">Tharsisland</option>
				<option value="2">Valles Marineris 2.0</option>
				<option value="3">Gale Cratertown</option>
				<option value="4">New New New York</option>
				<option value="5">Olympus Mons Spa & Casino</option>
			</select>
		    </p>
			<p>Martian Leader:
		  	 <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="supervisorname">
				<option value="1">Ray Bradbury</option>
				<option value="2">John Black</option>
				<option value="8">Mark Watney</option>
				<option value="9">Beth Johanssen</option>
				<option value="10">Chris Beck</option>
				<option value="12">Elon Musk</option>
			</select>
		    </p>

		    <button type="button" class="btn btn-warning" onclick="addtoModal()"> Add </button>
		    <a href="index.php" type="button" class="btn btn-light">Cancel</a></p>
		</form>

          <!-- Button trigger modal -->
          <!-- Modal Here -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
              <div class="modal-content">
                <form method="post" class="form-control">                  
                  	<p>First Name:
				    <input class="form-control" type="text" name="fname" id="fname"></p>
				    <p>Last Name:
				    <input class="form-control" type="text" name="lname" id="lname"></p>
				  	<p>Base Name:
				  	 <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="bname" id="bname">
						<option value="1">Tharsisland</option>
						<option value="2">Valles Marineris 2.0</option>
						<option value="3">Gale Cratertown</option>
						<option value="4">New New New York</option>
						<option value="5">Olympus Mons Spa & Casino</option>
					</select>
				    </p>
					<p>Martian Leader:
				  	 <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="sname" id="sname">
						<option value="1">Ray Bradbury</option>
						<option value="2">John Black</option>
						<option value="8">Mark Watney</option>
						<option value="9">Beth Johanssen</option>
						<option value="10">Chris Beck</option>
						<option value="12">Elon Musk</option>
					</select>
					</p>    

                  <p><input class="btn btn-primary" type="submit" value="confirm" id="confirmBtn" />
                  <a href="add.php" type="button" class="btn btn-secondary">Cancel</a></p>
                </form>

              </div>
            </div>
          </div>

    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


<!-- ajax here -->
<script type="text/javascript" >
   function addtoModal() {
    var fn = document.getElementById('firstname').value;
    var ln = document.getElementById('lastname').value;
    var bn = document.getElementById('basename').value;
    //var b = bn.value;
    //var bnt = bn.options[bn.selectedIndex].text;
    console.log(bn);
    var sn = document.getElementById("supervisorname").value;
   // var s = sn.value;
    //var snt = sn.options[sn.selectedIndex].text;

  	document.getElementById('fname').value = fn;
    document.getElementById('lname').value = ln;
    document.getElementById('bname').value = bn;
    document.getElementById("sname").value = sn;

    $('#exampleModal').modal('show');  
    
  }
</script>
</body>
</html>