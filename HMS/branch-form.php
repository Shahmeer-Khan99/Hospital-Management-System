<?php 
	include("includes/config.php");
	if(isset($_POST['Addbutton'])){
		$id  = $_POST['branchid'];
		$name = $_POST['branchname'];
		$address    = $_POST['address'];
		$query  = mysqli_query($con, "INSERT INTO branch VALUES ('$id' , '$name' , '$address')");
	}

	if(isset($_POST['Editbutton'])){
		$id  = $_POST['branchid'];
		$name = $_POST['branchname'];
		$address    = $_POST['address'];
		$query  = mysqli_query($con, "UPDATE branch SET branch_id = '$id' , Name = '$name' , Location = '$address'");
	}

	if(isset($_POST['Deletebutton'])){
		$id  = $_POST['branchid'];
		$query  = mysqli_query($con, "DELETE FROM branch WHERE branch_id = '$id'");
	}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Branch-Form</title>
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
		<h1>New Branch</h1>
		<form id="BranchForm" action='branch-form.php'  method="POST">
	  		<div class="form-group">
	    		<label for="branchid">Branch ID</label>
	    		<input type="text" name ='branchid' class="form-control" id="branchid">
	  		</div>
	  		<div class="form-group">
	    		<label for="branchname">Branch Name</label>
	    		<input type="text" name ='branchname' class="form-control" id="branchname">
	  		</div>

	  		<div class="form-group">
	    		<label for="address">Address</label>
	    		<input type="text" name ='address' class="form-control" id="address">
	  		</div>


	  
	  		<button type="submit" name='Addbutton' class="btn btn-success btn-block">Add</button>
	  		<button type="submit" name='Editbutton' class="btn btn-dark btn-block">Edit</button>
	  		<button type="submit" name='Deletebutton' class="btn btn-danger btn-block">Delete</button>
	  		<a href = 'Home-Admin.php'><button type="button" class="btn btn-info btn-sm">Back</button></a>
		</form>
	</div>

</body>
</html>