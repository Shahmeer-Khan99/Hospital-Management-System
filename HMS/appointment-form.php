<?php 
	include("includes/config.php");

	
	if(isset($_POST['Addbutton'])){
		$id       = $_POST['id'];
		$name     = $_POST['name'];
		$date     = $_POST['date'];
		$time     = $_POST['time'];
		$docid  = $_POST['docID'];
		$branch   = $_POST['branch'];
		$query    = mysqli_query($con , "INSERT INTO appointments VALUES ('$id ' , '$name'  , '$date' , '$time' , '$branch' , '$docid')");
		
	}


	if(isset($_POST['Editbutton'])){
		$id       = $_POST['id'];
		$name     = $_POST['name'];
		$date     = $_POST['date'];
		$time     = $_POST['time'];
		$docid  = $_POST['docID'];
		$branch   = $_POST['branch'];
		$query    = mysqli_query($con , "UPDATE appointments SET ap_id = '$id' , name = '$name' , ap_date = '$date' , ap_time = '$time' , branch_id = '$branch' , doctor_id = '$docid'");
		
	}

	if(isset($_POST['Deletebutton'])){
		$id       = $_POST['id'];
		$name     = $_POST['name'];
		$date     = $_POST['date'];
		$time     = $_POST['time'];
		$docid  = $_POST['docID'];
		$branch   = $_POST['branch'];
		$query    = mysqli_query($con , "DELETE FROM appointments WHERE ap_id = '$id'");
		
	}








 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Appoitment-Form</title>
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
		<h1>Appoinments</h1>
		
		<form id="AppointmentForm" action='appointment-form.php'  method="POST">
			<div class="form-group">
	    		<label for="id">Appointment Number</label>
	    		<input type="text" name ='id' class="form-control" id="id">
	  		</div>


	  		<div class="form-group">
	    		<label for="name">Your Name</label>
	    		<input type="text" name ='name' class="form-control" id="name">
	  		</div>

	  		<div class="form-group">
	    		<label for="date">Date</label>
	    		<input type="text" name ='date' class="form-control" id="date" placeholder="E.G June , 7 , 2021">
	  		</div>

	  		<div class="form-group">
	    		<label for="time">Time</label>
	    		<input type="text" name ='time' class="form-control" id="time" placeholder="E.G 6:00pm">
	  		</div>

	  		<div class="form-group">
	    		<label for="docID">Doctor's ID</label>
	    		<input type="text" name ='docID' class="form-control" id="docID">
	  		</div>


	  		<div class="form-group">
	    		<label for="branch">Branch ID</label>
	    		<input type="text" name ='branch' class="form-control" id="branch" placeholder="'E.G Islamabad Branch'">
	  		</div>





	  		<button type="submit" name='Addbutton' class="btn btn-success btn-block">Make</button>
	  		<button type="submit" name='Editbutton' class="btn btn-warning btn-block">Edit</button>
	  		<button type="submit" name='Deletebutton' class="btn btn-danger btn-block">Delete</button>
	  		<a href = 'Home-Hosp.php'><button type="button" class="btn btn-info btn-sm">Back</button></a>
		</form>
	</div>

</body>
</html>