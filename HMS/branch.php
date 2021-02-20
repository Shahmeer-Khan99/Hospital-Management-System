<?php

   include('includes/config.php');
   include('includes/classes/Branch.php');
   if(isset($_GET['id'])){
   	$branchID = $_GET['id']; 
   }

   else{
   	header("Location : index.php");
   }


   $branch = new Branch($con , $branchID);


?>




<html>
<head>
	<title><?php echo  $branch->getBranchName()?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/branch.css">

</head>
<body>
	<div id="top" class="jumbotron jumbotron-fluid">
    	<div id="contents" class="container">
    		<h1 class="display-4">The Care Hospital</h1>
  		</div>
	</div>
	<div id = 'cure' class="jumbotron jumbotron-fluid branch">
		<a class="display-4 text" href='Branch-Cure.php?id=<?php echo $branchID ?>'>Cure</a>
	</div>

	<div class="jumbotron jumbotron-fluid sep"></div>


	<div id = 'doctor' class="jumbotron jumbotron-fluid branch">
		<a class="display-4 text" href='Branch-Doctor.php?id=<?php echo $branchID ?>'>Doctors</a>
	</div>

	<div class="jumbotron jumbotron-fluid sep"></div>

	<div id = 'staff' class="jumbotron jumbotron-fluid branch">
		<a class="display-4 text" href='Branch-Staff.php?id=<?php echo $branchID ?>'>Other Staff</a>
	</div>

	<div class="jumbotron jumbotron-fluid sep"></div>

	<div id = 'patient' class="jumbotron jumbotron-fluid branch">
		<a class="display-4 text" href='Branch-Patient.php?id=<?php echo $branchID ?>'>Patients</a>
	</div>

	<div class="jumbotron jumbotron-fluid sep"></div>

	<div id = 'practioner' class="jumbotron jumbotron-fluid branch">
		<a class="display-4 text" href='Branch-Practitioner.php?id=<?php echo $branchID ?>'>Practioners</a>
	</div>

	<div class="jumbotron jumbotron-fluid sep"></div>

	<div id = 'room' class="jumbotron jumbotron-fluid branch">
		<a class="display-4 text" href='Branch-Rooms.php?id=<?php echo $branchID ?>'>Rooms</a>
	</div>

	<div class="jumbotron jumbotron-fluid sep"></div>

	<div id = 'appointment' class="jumbotron jumbotron-fluid branch">
		<a class="display-4 text" href='Branch-Appointments.php?id=<?php echo $branchID ?>'>Appointments</a>
	</div>


</body>
</html>