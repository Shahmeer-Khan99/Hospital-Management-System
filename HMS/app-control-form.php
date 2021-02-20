<?php 
	include("includes/config.php");

	
	if(isset($_POST['Addbutton'])){
		$id       = $_POST['id'];
		$name     = $_POST['name'];
		$date     = $_POST['date'];
		$phone    = $_POST['phone'];
		$time     = $_POST['time'];
		$docName  = $_POST['docName'];
		$branch   = $_POST['branch'];
		$quer     = mysqli_query($con , "SELECT * FROM doctor WHERE name = '$docName' AND Contact = '$phone'");
		$result   = mysqli_fetch_array($quer);
		$DocID   = $result['doctor_id'];
		$quer2    = mysqli_query($con , "SELECT * FROM branch WHERE Name = '$branch'");
		$result2  = mysqli_fetch_array($quer2);
		$branchID = $result2['branch_id'];
		$query    = mysqli_query($con , "INSERT INTO appointments VALUES ('$id' , '$name'  , '$date' , '$time' , '$branchID' , '$DocID')");
		
	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>New Appoitment</title>
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
		<form id="AppControlForm" action='app-control-form.php'  method="POST">
			<div class="form-group">
	    		<label for="id">Appointment Number</label>
	    		<input type="text" name ='id' class="form-control" id="id" placeholder="Please Enter number other than those already in table">
	  		</div>

	  		<div class="form-group">
	    		<label for="name">Name</label>
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
	    		<label for="docName">Doctor Name</label>
	    		<input type="text" name ='docName' class="form-control" id="docName">
	  		</div>

	  		<div class="form-group">
	    		<label for="phone">Doctor's Contact</label>
	    		<input type="text" name ='phone' class="form-control" id="phone">
	  		</div>


	  		<div class="form-group">
	    		<label for="branch">Branch Name</label>
	    		<input type="text" name ='branch' class="form-control" id="branch">
	  		</div>





	  		<button type="submit" name='Addbutton' class="btn btn-success btn-block">Make</button>
	  		<a href = 'index.php'><button type="button" class="btn btn-info btn-sm">Back</button></a>
		</form>
	</div>

</body>
</html>