<?php 
	include("includes/config.php");
	if(isset($_POST['Addbutton'])){
		$id     = $_POST['patientId'];
		$name   = $_POST['patientName'];
		$Age  = $_POST['patientAge'];
		$branch = $_POST['branch'];
		$doctorID = $_POST['doctorID'];
		$contact  = $_POST['contact'];
		$CureID   = $_POST['CureID'];
		$result2 = mysqli_query($con , "SELECT * FROM cure WHERE name = '$CureID'");
		$CureInfo = mysqli_fetch_array($result2);
		$cureid  = $CureInfo['cure_id'];
		$query  = mysqli_query($con, "INSERT INTO patient VALUES ('$id' ,'$name' , '$Age' , '$branch' , '$contact')");
		$query2 = mysqli_query($con , "INSERT INTO suffer VALUES ('$id' , '$doctorID' , '$cureid')");
	}

	if(isset($_POST['Deletebutton'])){
		$id     = $_POST['patientId'];
		$name   = $_POST['patientName'];
		$Age  = $_POST['patientAge'];
		$contact  = $_POST['contact'];
		$branch = $_POST['branch'];
		$doctorID = $_POST['doctorID'];
		$CureID   = $_POST['CureID'];
		$result2 = mysqli_query($con , "SELECT * FROM cure WHERE name = '$CureID'");
		$CureInfo = mysqli_fetch_array($result2);
		$cureid  = $CureInfo['cure_id'];
		$query  = mysqli_query($con, "DELETE FROM patient WHERE pat_id = '$id' AND branch_id = '$branch'");
		$query2 = mysqli_query($con , "DELETE FROM suffer WHERE pat_id = '$id' AND doctor_id = '$doctorID' AND cure_id = '$cureid'");
	}

	if(isset($_POST['Editbutton'])){
		$id     = $_POST['patientId'];
		$name   = $_POST['patientName'];
		$Age  = $_POST['patientAge'];
		$contact  = $_POST['contact'];
		$branch = $_POST['branch'];
		$doctorID = $_POST['doctorID'];
		$CureID   = $_POST['CureID'];
		$result2 = mysqli_query($con , "SELECT * FROM cure WHERE name = '$CureID'");
		$CureInfo = mysqli_fetch_array($result2);
		$cureid  = $CureInfo['cure_id'];
		$query  = mysqli_query($con, "UPDATE patient SET pat_id = '$id' , name = '$name' , Age = '$Age' , branch_id = '$branch' , contact = '$contact' WHERE pat_id = '$id' AND branch_id = '$branch'");
		$query2 = mysqli_query($con , "UPDATE suffer SET pat_id = '$id' , doctor_id = '$doctorID' , cure_id = 
			'$cureid' WHERE pat_id = '$id'");
	}

	if(isset($_POST['ADbutton'])){
		$id     = $_POST['patientId'];
		$doctorID = $_POST['doctorID'];
		$CureID   = $_POST['CureID'];
		$result1 = mysqli_query($con , "SELECT * FROM doctor WHERE name = '$doctorID'");
		$DocInfo  = mysqli_fetch_array($result1);
		$DocID   = $DocInfo['doctor_id'];
		$result2 = mysqli_query($con , "SELECT * FROM cure WHERE name = '$CureID'");
		$CureInfo = mysqli_fetch_array($result2);
		$cureid  = $CureInfo['cure_id'];
		$query2 = mysqli_query($con , "INSERT INTO suffer VALUES ('$id' , '$DocID' , '$cureid')");
	}




 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Patient-Form</title>
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
		<h1>New Patient</h1>
		<form id="PatientForm" action='patient-form.php'  method="POST">
	  		<div class="form-group">
	    		<label for="patientId">Patient's ID</label>
	    		<input type="text" name ='patientId' class="form-control" id="patientId">
	  		</div>
	  		<div class="form-group">
	    		<label for="patientName">Name</label>
	    		<input type="text" name ='patientName' class="form-control" id="patientName">
	  		</div>

	  		<div class="form-group">
	    		<label for="patientAge">Age</label>
	    		<input type="text" name ='patientAge' class="form-control" id="patientAge">
	  		</div>

	  		<div class="form-group">
	    		<label for="contact">Phone Number</label>
	    		<input type="text" name ='contact' class="form-control" id="contact">
	  		</div>

	  		<div class="form-group">
	    		<label for="branch">Branch_ID</label>
	    		<input type="text" name ='branch' class="form-control" id="branch">
	  		</div>

	  		<div class="form-group">
	    		<label for="doctorID">Doctor's ID</label>
	    		<input type="text" name ='doctorID' class="form-control" id="doctorID">
	  		</div>

	  		<div class="form-group">
	    		<label for="CureID">Suffer's With</label>
	    		<input type="text" name ='CureID' class="form-control" id="CureID">
	  		</div>




	  
	  		<button type="submit" name='Addbutton' class="btn btn-success btn-block">Add</button>
	  		<button type="submit" name='Editbutton' class="btn btn-dark btn-block">Edit</button>
	  		<button type="submit" name='Deletebutton' class="btn btn-danger btn-block">Delete</button>
	  		<button type="submit" name='ADbutton' class="btn btn-warning btn-block">Patient Has Another Disease</button>
	  		<a href = 'Home-Hosp.php'><button type="button" class="btn btn-info btn-sm">Back</button></a>
		</form>
	</div>

</body>
</html>