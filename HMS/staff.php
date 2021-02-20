<?php
	include("includes/config.php");
	include("includes/classes/Staff.php");
	if(isset($_GET['id'])){
		$memID = $_GET['id'];
	}

	else {
		header['Location : Branch-Staff.php'];
	}


	$memInfo = new Staff($con , $memID);
?>


<!DOCTYPE html>
<html>
<head>
	<title><?php echo $memInfo->getStaffName() ?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/staff.css">
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
	    		<h5 class="card-title"> Mr/Mrs <?php echo $memInfo->getStaffName()?> </h5>
	    		<p class="card-text">Job Type : <?php echo $memInfo->getStaffType()?></p>
	  		</div>
		</div>
	</div>

</body>
</html>