<?php 
	include("includes/config.php");
	if(isset($_POST['Addbutton'])){
		$id     = $_POST['id'];
		$name   = $_POST['name'];
		$quan  = $_POST['quan'];
		$branch = $_POST['branch'];
		$query  = mysqli_query($con, "INSERT INTO equipments VALUES ('$id' ,'$name' , '$quan' , '$branch')");
	}

	if(isset($_POST['Deletebutton'])){
		$id     = $_POST['id'];
		$name   = $_POST['name'];
		$quan  = $_POST['quan'];
		$branch = $_POST['branch'];
		$query  = mysqli_query($con, "DELETE FROM equipments WHERE equip_id = '$id' AND branch_id = '$branch'");
	}

	if(isset($_POST['Editbutton'])){
		$id     = $_POST['id'];
		$name   = $_POST['name'];
		$quan  = $_POST['quan'];
		$branch = $_POST['branch'];
		$query  = mysqli_query($con, "UPDATE equipments SET equip_id = '$id' , name = '$name' , quantity = '$quan' , branch_id = '$branch' WHERE equip_id = '$id' AND branch_id = '$branch'");
	}




 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Equipment-Form</title>
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
		<h1>Equipment</h1>
		<form id="EquipForm" action='equipment-form.php'  method="POST">
	  		<div class="form-group">
	    		<label for="id">Equipment's ID</label>
	    		<input type="text" name ='id' class="form-control" id="id">
	  		</div>
	  		<div class="form-group">
	    		<label for="name">Name</label>
	    		<input type="text" name ='name' class="form-control" id="name">
	  		</div>

	  		<div class="form-group">
	    		<label for="quan">Quantity</label>
	    		<input type="text" name ='quan' class="form-control" id="quan">
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