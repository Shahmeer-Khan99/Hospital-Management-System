<?php 
	include("includes/config.php");
	if(isset($_POST['Addbutton'])){
		$id     = $_POST['practitionerId'];
		$name   = $_POST['practitionerName'];
		$study  = $_POST['practitionerType'];
		$branch = $_POST['branch'];
		$query  = mysqli_query($con, "INSERT INTO practitioner VALUES ('$id' ,'$name' , '$study' , '$branch')");
	}

	if(isset($_POST['Editbutton'])){
		$id     = $_POST['practitionerId'];
		$name   = $_POST['practitionerName'];
		$study  = $_POST['practitionerType'];
		$branch = $_POST['branch'];
		$query  = mysqli_query($con, "UPDATE practitioner SET prac_id = '$id' , name = '$name' , area = '$study' , branch_id = '$branch'
			WHERE prac_id = '$id' AND branch_id = '$branch'");
	}

	if(isset($_POST['Deletebutton'])){
		$id     = $_POST['practitionerId'];
		$name   = $_POST['practitionerName'];
		$study  = $_POST['practitionerType'];
		$branch = $_POST['branch'];
		$query  = mysqli_query($con, "DELETE FROM practitioner WHERE prac_id = '$id' AND branch_id = '$branch'");
	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Practitioner-Form</title>
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
		<h1>New Practitioner</h1>
		<form id="PractitionerForm" action='practitioner-form.php'  method="POST">
	  		<div class="form-group">
	    		<label for="practitionerId">Practitioner ID</label>
	    		<input type="text" name ='practitionerId' class="form-control" id="practitionerId">
	  		</div>
	  		<div class="form-group">
	    		<label for="practitionerName">Name</label>
	    		<input type="text" name ='practitionerName' class="form-control" id="practitionerName">
	  		</div>

	  		<div class="form-group">
	    		<label for="practitionerType">Area of Study</label>
	    		<input type="text" name ='practitionerType' class="form-control" id="practitionerType">
	  		</div>

	  		<div class="form-group">
	    		<label for="branch">Branch_ID</label>
	    		<input type="text" name ='branch' class="form-control" id="branch">
	  		</div>


	  
	  		<button type="submit" name='Addbutton' class="btn btn-success btn-block">Add</button>
	  		<button type="submit" name='Editbutton' class="btn btn-dark btn-block">Edit</button>
	  		<button type="submit" name='Deletebutton' class="btn btn-danger btn-block">Delete</button>
	  		<a href = 'Home-Hosp.php'><button type="button" class="btn btn-info btn-sm">Back</button></a>
		</form>
	</div>

</body>
</html>