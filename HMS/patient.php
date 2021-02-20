<?php 
	include("includes/config.php");
	include("includes/classes/Patient.php");
	include("includes/classes/Doctor.php");
	include("includes/classes/Cure.php");
	if(isset($_GET['patid'])){
		$patID = $_GET['patid'];
	}

	else {
		header("Location : Branch-Patient.php");
	}

	$patient      = new Patient($con , $patID);
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $patient->getPatName();?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/patient.css">
</head>
<body>
	<div id="top" class="jumbotron jumbotron-fluid">
    	<div id="contents" class="container">
    		<h1 class="display-4">The Care Hospital</h1>
  		</div>
	</div>

	<div id="cardc" class="container">
		<div id ='infocard' class="card">
	  		<div class="card-header">Information</div>
	  		<div class="card-body">
	    		<h5 class="card-title"><?php echo $patient->getPatName()?> </h5>
	    		<p class="card-text">Age : <?php echo $patient->getPatAge()?></p>
	    		<p class="card-text">Suffers from : 
	    			<?php 
						$cureQuery = mysqli_query($con , "SELECT * FROM suffer WHERE pat_id = '$patID'");
						while($cureID = mysqli_fetch_array($cureQuery)){
							$cure    = new Cure($con , $cureID['cure_id']);

							echo $cure->getCureName() .",";
						}	    				
					?>
	    		</p>
	    		<p class = 'card-text'>Doctor is :
	    			<?php 
	    				$DocQuery = mysqli_query($con , "SELECT * FROM suffer WHERE pat_id = '$patID'");
	    				while($DocID = mysqli_fetch_array($DocQuery)){
	    					$doc  = new Doctor($con , $DocID['doctor_id']);

	    					echo $doc->getDocName() . ",";
	    				}
	    			?>
	    		</p>
	    	</div>
	    </div>
	    <h3>Prescriptions</h3>
	    <?php  
	    	$query = mysqli_query($con , "SELECT * FROM prescriptions WHERE pat_id = '$patID'");
	    	while($data = mysqli_fetch_array($query)){
	    		$docp  = new Doctor($con , $data['doctor_id']);
	    		echo "<div id = 'prescard' class = 'card'>
	    				<div class ='card-header'>Prescription #" . $data['pres_id'] . "</div>
	    				<div class = 'card-body'>
	    					<h5>" . $data['pres_date'] . "</h5>
	    					<p class = 'card-text'>Treatment : " . $data['treatment'] . "</p>
	    					<p class = 'card-text'>Charges : " . $data['charges'] ."</p>
	    					<p class = 'card-text'>By Doctor : " . $docp->getDocName() ."</p>
	    				</div>
	    			  </div>";
	    	}
	    ?>
	</div>

</body>
</html>