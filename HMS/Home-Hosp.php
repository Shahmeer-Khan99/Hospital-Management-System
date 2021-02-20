<?php
	include('includes/config.php');

	if(isset($_SESSION['UserLoggedIn'])){
		$UserLoggedIn = $_SESSION['UserLoggedIn'];
	}

	else {
		header("Location:register.php");
	}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/home-hosp.css">
	<link href="https://fonts.googleapis.com/css2?family=Cabin&family=Inconsolata:wght@500&family=Nunito&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">

</head>
<body>
	<div class='container'>
		<div id="contents">
			<div class="row">
				<div class="col-lg-12">
					<h1>The Care Hospital</h1>
					<hr>
					<a href="index.php"><button id="branch" type="button" class="btn btn-danger btn-lg">Branches</button></a>
					<a class= 'formb' href="patient-form.php"><button id='forms' type="button" class="btn btn-info btn-sm">Patients Form</button></a>
					<a class= 'formb' href="room-form.php"><button id='forms' type="button" class="btn btn-info btn-sm">Rooms Form</button></a>
					<a class= 'formb' href="practitioner-form.php"><button id='forms' type="button" class="btn btn-info btn-sm">Practitioners Form</button></a>
					<a class= 'formb' href="staff-form.php"><button id='forms' type="button" class="btn btn-info btn-sm">Staff Form</button></a>
					<a class= 'formb' href="prescription-form.php"><button id='forms' type="button" class="btn btn-info btn-sm">Prescription Form</button></a>
					<a class= 'formb' href="appointment-form.php"><button id='forms' type="button" class="btn btn-info btn-sm">Appointment Form</button></a>
					<a class= 'formb' href="equipment.php"><button id='forms' type="button" class="btn btn-info btn-sm">Equipment</button></a>


					
					
				</div>

			</div>

			
		</div>


	</div>



</body>
</html>