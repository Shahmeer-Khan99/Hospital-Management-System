<?php 
	include("includes/config.php");
	if(isset($_POST['Editbutton'])){
		$id       = $_POST['doctorID'];
		$name     = $_POST['doctorname'];
		$phone    = $_POST['number'];
		$Qual     = $_POST['Qual'];
		$Spec     = $_POST['spec'];
		$Exp      = $_POST['exp'];
		$branch   = $_POST['branch'];
		$curename = $_POST['cure'];
		$fee      = $_POST['fee'];
		$quer     = mysqli_query($con , "SELECT * FROM cure WHERE name = '$curename'");
		$result   = mysqli_fetch_array($quer);
		$cureID   = $result['cure_id'];
		$query    = mysqli_query($con , "UPDATE doctor
										 SET doctor_id = '$id' , name = '$name' , qualification = '$Qual' , experience = '$Exp' , specialization = '$Spec' , branch_id = '$branch' , cure_id = '$cureID' , fee = '$fee' , Contact = '$phone'
										 WHERE doctor_id = '$id'");
		
	}
	if(isset($_POST['Addbutton'])){
		$id       = $_POST['doctorID'];
		$name     = $_POST['doctorname'];
		$Qual     = $_POST['Qual'];
		$phone    = $_POST['number'];
		$Spec     = $_POST['spec'];
		$Exp      = $_POST['exp'];
		$branch   = $_POST['branch'];
		$curename = $_POST['cure'];
		$fee      = $_POST['fee'];
		$quer     = mysqli_query($con , "SELECT * FROM cure WHERE name = '$curename'");
		$result   = mysqli_fetch_array($quer);
		$cureID   = $result['cure_id'];
		$query    = mysqli_query($con , "INSERT INTO doctor VALUES ('$id' , '$name'  , '$Qual' , '$Exp' , '$Spec' , '$branch' , '$cureID' , '$fee' , '$phone')");
		
	}
	if(isset($_POST['Deletebutton'])){
		$id       = $_POST['doctorID'];
		$branch   = $_POST['branch'];
		$query    = mysqli_query($con , "DELETE FROM doctor WHERE doctor_id = '$id' AND branch_id = '$branch'");
		
	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Doctor-Form</title>
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
		<h1>New Doctor</h1>
		<form id="DoctorForm" action='doctor-form.php'  method="POST">
	  		<div class="form-group">
	    		<label for="doctorID">Doctor ID</label>
	    		<input type="text" name ='doctorID' class="form-control" id="doctorID">
	  		</div>
	  		<div class="form-group">
	    		<label for="doctorname">Doctor Name</label>
	    		<input type="text" name ='doctorname' class="form-control" id="doctorname">
	  		</div>

	  		<div class="form-group">
	    		<label for="number">Phone Number</label>
	    		<input type="text" name ='number' class="form-control" id="number">
	  		</div>

	  		<div class="form-group">
	    		<label for="Qual">Qualification/New Qualification</label>
	    		<input type="text" name ='Qual' class="form-control" id="Qual">
	  		</div>

	  		<div class="form-group">
	    		<label for="exp">Experience/ New Experience</label>
	    		<input type="text" name ='exp' class="form-control" id="exp">
	  		</div>

	  		<div class="form-group">
	    		<label for="spec">Specialization/New Specialization</label>
	    		<input type="text" name ='spec' class="form-control" id="spec">
	  		</div>

	  		<div class="form-group">
	    		<label for="branch">Branch_id/ New Branch_id</label>
	    		<input type="text" name ='branch' class="form-control" id="branch">
	  		</div>

	  		<div class="form-group">
	    		<label for="cure">Can Cure/ New Can Cure</label>
	    		<input type="text" name ='cure' class="form-control" id="cure">
	  		</div>

	  		<div class="form-group">
	    		<label for="fee">Fees</label>
	    		<input type="text" name ='fee' class="form-control" id="fee">
	  		</div>





	  		<button type="submit" name='Addbutton' class="btn btn-success btn-block">Add</button>
	  		<button type="submit" name='Editbutton' class="btn btn-dark btn-block">Edit</button>
	  		<button type="submit" name='Deletebutton' class="btn btn-danger btn-block">Delete</button>
	  		<a href = 'Home-Admin.php'><button type="button" class="btn btn-info btn-sm">Back</button></a>
		</form>
	</div>

</body>
</html>