<?php 
	include("includes/config.php");
	if(isset($_POST['Addbutton'])){
		$id     = $_POST['staffId'];
		$name     = $_POST['staffName'];
		$job     = $_POST['staffType'];
		$branch     = $_POST['branch'];
		$query = mysqli_query($con, "INSERT INTO staff VALUES ('$id' ,'$name' , '$job' , '$branch')");
	}

	if(isset($_POST['Editbutton'])){
		$id     = $_POST['staffId'];
		$name     = $_POST['staffName'];
		$job     = $_POST['staffType'];
		$branch     = $_POST['branch'];
		$query = mysqli_query($con, "UPDATE staff SET staff_id = '$id' , name = '$name' , type = '$job' , branch_id = '$branch' 
			WHERE staff_id = '$id' AND branch_id = '$branch'");
	}

	if(isset($_POST['Deletebutton'])){
		$id     = $_POST['staffId'];
		$name     = $_POST['staffName'];
		$job     = $_POST['staffType'];
		$branch     = $_POST['branch'];
		$query = mysqli_query($con, "DELETE FROM staff WHERE staff_id = '$id' AND branch_id = '$branch'");
	}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Staff-Form</title>
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
		<h1>New Staff</h1>
		<form id="StaffForm" action='staff-form.php'  method="POST">
	  		<div class="form-group">
	    		<label for="staffId">Staff ID</label>
	    		<input type="text" name ='staffId' class="form-control" id="staffId">
	  		</div>
	  		<div class="form-group">
	    		<label for="staffName">Name</label>
	    		<input type="text" name ='staffName' class="form-control" id="staffName">
	  		</div>

	  		<div class="form-group">
	    		<label for="staffType">Job/Type</label>
	    		<input type="text" name ='staffType' class="form-control" id="staffType">
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