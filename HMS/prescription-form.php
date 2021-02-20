<?php 
	include("includes/config.php");
	if(isset($_POST['Addbutton'])){
		$patid     = $_POST['patId'];
		$presid   = $_POST['presId'];
		$treatment  = $_POST['treatment'];
		$date = $_POST['date'];
		$doctorID = $_POST['docID'];
		$charges   = $_POST['charges'];
		$query  = mysqli_query($con, "INSERT INTO prescriptions VALUES('$presid' , '$patid' , '$treatment' , '$date' , '$charges' , '$doctorID')");
	}

	if(isset($_POST['Deletebutton'])){
		$patid     = $_POST['patId'];
		$presid   = $_POST['presId'];
		$treatment  = $_POST['treatment'];
		$date = $_POST['date'];
		$doctorID = $_POST['docID'];
		$charges   = $_POST['charges'];
		$query  = mysqli_query($con, "DELETE FROM prescriptions WHERE pres_id = '$presid' AND pat_id = '$patid'");
	}

	if(isset($_POST['Editbutton'])){
		$patid     = $_POST['patId'];
		$presid   = $_POST['presId'];
		$treatment  = $_POST['treatment'];
		$date = $_POST['date'];
		$doctorID = $_POST['docID'];
		$charges   = $_POST['charges'];
		$query  = mysqli_query($con, "UPDATE prescriptions SET pres_id = '$presid' , pat_id = '$patid' , treatment = '$treatment' , pres_date = '$date' , charges = '$charges' , doctor_id = '$doctorID'");
	}





 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Prescription-Form</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/form.css">
</head>
<body>
	<div id="top" class="jumbotron jumbotron-fluid">
    	<div id="contents" class="container">
    		<h1 class="display-4">The Care Hospital</h1>
  		</div>
	</div>
	<div class = 'container'>
		<h1>Prescription</h1>
		<form id="PrescriptionForm" action='prescription-form.php'  method="POST">
	  		<div class="form-group">
	    		<label for="patId">Patient's ID</label>
	    		<input type="text" name ='patId' class="form-control" id="patId">
	  		</div>
	  		<div class="form-group">
	    		<label for="presId">Prescription ID</label>
	    		<input type="text" name ='presId' class="form-control" id="presId">
	  		</div>

	  		<div class="form-group">
	    		<label for="treatment">Treatment</label>
	    		<input type="text" name ='treatment' class="form-control" id="treatment">
	  		</div>

	  		<div class="form-group">
	    		<label for="date">Date</label>
	    		<input type="text" name ='date' class="form-control" id="date">
	  		</div>

	  		<div class="form-group">
	    		<label for="docID">Doctor's ID</label>
	    		<input type="text" name ='docID' class="form-control" id="docID">
	  		</div>

	  		<div class="form-group">
	    		<label for="charges">Charges</label>
	    		<input type="text" name ='charges' class="form-control" id="charges">
	  		</div>




	  
	  		<button type="submit" name='Addbutton' class="btn btn-success btn-block">Add</button>
	  		<button type="submit" name='Editbutton' class="btn btn-dark btn-block">Edit</button>
	  		<button type="submit" name='Deletebutton' class="btn btn-danger btn-block">Delete</button>
	  		<a href = 'Home-Hosp.php'><button type="button" class="btn btn-info btn-sm">Back</button></a>
		</form>
	</div>

</body>
</html>