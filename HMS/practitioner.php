<?php 

	include("includes/config.php");
	include("includes/classes/Practitioner.php");
	if(isset($_GET['id'])){
		$pracID = $_GET['id'];
	}

	else {
		header["Location:Branch-Practitioner.php"];
	}

	$pracInfo = new Practitioner($con , $pracID);

?>




<!DOCTYPE html>
<html>
<head>
	<title><?php echo $pracInfo->getPracName() ?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/practitioner.css">
</head>
<body>

	<div id="top" class="jumbotron jumbotron-fluid">
    	<div id="contents" class="container">
    		<h1 class="display-4">The Care Hospital</h1>
  		</div>
	</div>

	<div class="container">
		<div class="card">
	  		<div class="card-header">Information</div>
	  		<div class="card-body">
	    		<h5 class="card-title"><?php echo $pracInfo->getPracName()?> </h5>
	    		<p class="card-text">Name : <?php echo $pracInfo->getPracName()?></p>
	    		<p class="card-text">Area of Study : <?php echo $pracInfo->getPracArea()?></p>

	  		</div>
		</div>
	</div>

</body>
</html>