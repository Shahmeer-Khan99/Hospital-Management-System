<?php

	include("includes/config.php");
	include("includes/classes/Doctor.php");
	include("includes/classes/Cure.php");
	if(isset($_GET['id'])){
		$doctorID = $_GET['id'];
	}

	else {
		header['Location:Branch-Doctor.php'];
	}

	$doctorInfo = new Doctor($con , $doctorID);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Doctor <?php echo $doctorInfo->getDocName()?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/doctor.css">
</head>
<body>
	<div id="top" class="jumbotron jumbotron-fluid">
    	<div id="contents" class="container">
    		<h1 class="display-4">The Care Hospital</h1>
  		</div>
	</div>

	<div id="cardc" class="container">
		<div class="card">
	  		<div class="card-header">Information</div>
	  		<div class="card-body">
	    		<h5 class="card-title">Doctor <?php echo $doctorInfo->getDocName()?> </h5>
	    		<p class="card-text">Name : <?php echo $doctorInfo->getDocName()?></p>
	    		<p class="card-text">Qualification : <?php echo $doctorInfo->getDocQua()?></p>
	    		<p class="card-text">Experience : <?php echo $doctorInfo->getDocExp()?></p>
	    		<p class="card-text">Specilization : <?php echo $doctorInfo->getDocSpec()?></p>
	    		<p class="card-text">Can cure problems of : <?php echo $doctorInfo->getCure()?></p>
	    		<p class="card-text">Fee for checkup : <?php echo $doctorInfo->getfee()?></p>
	    		<p class="card-text">Phone Number : <?php echo $doctorInfo->getContact()?></p>

	  		</div>
		</div>
	</div>

</body>
</html>