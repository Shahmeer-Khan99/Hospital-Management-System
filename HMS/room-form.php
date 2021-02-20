<?php 
	include("includes/config.php");
	if(isset($_POST['Addbutton'])){
		$id     = $_POST['roomId'];
		$used  = $_POST['UsedFor'];
		$branch = $_POST['branch'];
		$charges  = $_POST['charges'];
		$query  = mysqli_query($con, "INSERT INTO rooms VALUES ('$id' , '$used' , '$branch' , '$charges')");
	}

	if(isset($_POST['Editbutton'])){
		$id     = $_POST['roomId'];
		$used  = $_POST['UsedFor'];
		$branch = $_POST['branch'];
		$charges  = $_POST['charges'];
		$query  = mysqli_query($con, "UPDATE rooms SET room_id = '$id' , used_for = '$used' , branch_id = '$branch' , charges = '$charges' WHERE room_id = '$id'");
	}

	if(isset($_POST['Deletebutton'])){
		$id     = $_POST['roomId'];
		$branch = $_POST['branch'];
		$query  = mysqli_query($con, "DELETE FROM rooms WHERE room_id = '$id' AND branch_id = '$branch'");
	}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Room-Form</title>
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
		<h1>Rooms</h1>
		<form id="RoomForm" action='room-form.php'  method="POST">
	  		<div class="form-group">
	    		<label for="roomId">Room ID</label>
	    		<input type="text" name ='roomId' class="form-control" id="roomId">
	  		</div>
	  		<div class="form-group">
	    		<label for="UsedFor">Will Be Used As</label>
	    		<input type="text" name ='UsedFor' class="form-control" id="UsedFor">
	  		</div>

	  		<div class="form-group">
	    		<label for="charges">Charges</label>
	    		<input type="text" name ='charges' class="form-control" id="charges">
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