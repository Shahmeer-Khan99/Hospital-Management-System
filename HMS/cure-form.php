<?php 
	include("includes/config.php");
	if(isset($_POST['Addbutton'])){
		$name  = $_POST['curename'];
		$branch = $_POST['branch'];
		$id     = $_POST['cureID'];
		$query  = mysqli_query($con, "INSERT INTO cure VALUES ('$id' , '$name')");
		$query2 = mysqli_query($con, "INSERT INTO branchcure VALUES ('$id' ,'$branch')");
	}

	if(isset($_POST['Editbutton'])){
		$name  = $_POST['curename'];
		$branch = $_POST['branch'];
		$id     = $_POST['cureID'];
		$query = mysqli_query($con , "UPDATE cure SET cure_id = '$id' ,  name = '$name' WHERE cure_id = '$id'");
		$query = mysqli_query($con , "UPDATE branchcure SET cure_id = '$id' , branch_id = '$branch' WHERE cure_id = '$id'");
	}

	if(isset($_POST['Deletebutton'])){
		$id     = $_POST['cureID'];
		$branch = $_POST['branch'];
		$query  = mysqli_query($con , "DELETE FROM cure WHERE cure_id = '$id'");
		$query2 = mysqli_query($con , "DELETE FROM branchcure WHERE cure_id = '$id' AND branch_id = '$branch'");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Cure-Form</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/form.css">
</head>
<body>
	<div id="top" class="jumbotron jumbotron-fluid">
    	<div id="contents" class="container">
    		<h1 class="display-4">The Care Hospital</h1>
  		</div>
	</div>
	<div class = 'bodyc container'>
		<h1>Add a new Cure</h1>
		<form id="CureForm" action='cure-form.php'  method="POST">
	  		<div class="form-group">
	    		<label for="curename">Cure Name</label>
	    		<input type="text" name ='curename' class="form-control" id="curename">
	  		</div>
	  		<div class="form-group">
	    		<label for="cureID">Cure ID</label>
	    		<input type="text" name ='cureID' class="form-control" id="cureID">
	  		</div>

	  		<div class="form-group">
	    		<label for="branch">Branch_id</label>
	    		<input type="text" name ='branch' class="form-control" id="branch">
	  		</div>


	  
	  		<button type="submit" name='Addbutton' class="btn btn-success btn-block">Add</button>
	  		<button type="submit" name='Editbutton' class="btn btn-dark btn-block">Edit</button>
	  		<button type="submit" name='Deletebutton' class="btn btn-danger btn-block">Delete</button>
	  		<a href = 'Home-Admin.php'><button type="button" class="btn btn-info btn-sm">Back</button></a>
		</form>
	</div>

</body>
</html>