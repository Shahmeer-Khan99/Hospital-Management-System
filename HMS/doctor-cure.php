<?php
	include("includes/config.php");
	include("includes/classes/Cure.php");
	if(isset($_GET['id'])){
		$cureID = $_GET['id'];
	}

	else {
		header["Location: Branch-Cure.php"];
	}

	if(isset($_GET['bid'])){
		$branchID = $_GET['bid'];
	}

	else {
		header["Location: Branch-Cure.php"];
	}



	$cureInfo = new Cure($con , $cureID);
?>


<!DOCTYPE html>
<html>
<head>
	<title><?php echo $cureInfo->getCureName() ?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/doctor-cure.css">
</head>
<body>

	<div id ="top" class="jumbotron jumbotron-fluid">
		<div id="contents" class="container">
    		<h1 class="display-4">The Care Hospital</h1>
  		</div>		
  	</div>
  	<table class="table table-striped table-dark">
  		<thead>
    		<tr>
      			<th scope="col">Doctor's ID</th>
      			<th scope="col">Doctor's Name</th>
   			</tr>
  		</thead>
    	<tbody>
    		<?php 
				$doctors = mysqli_query($con , "SELECT * FROM doctor WHERE cure_id='$cureID'  AND branch_id='$branchID'");
				while($doc = mysqli_fetch_array($doctors)){
					echo "<tr>
						<td>". $doc['doctor_id'] . "</td>
						<td><a href='doctor.php?id=" . $doc['doctor_id'] . "'>" . $doc['name'] . "</a></td>  
					</tr>";
				}
			?>
		</tbody>
	</table>


</body>
</html>