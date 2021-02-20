<?php

	include("includes/config.php");
	include("includes/classes/Cure.php");
	
	if(isset($_GET['id'])){
		$branchID = $_GET['id'];
	}


	else {
		header["Location : branch.php"];
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Cures</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/Branch-Cure.css">
</head>
<body>
	<div id="top" class="jumbotron jumbotron-fluid">
    	<div id="contents" class="container">
    		<h1 class="display-4">The Care Hospital</h1>
  		</div>
	</div>
	<table class="table table-striped table-dark">
		<thead>
			<tr>
				<th>Cure's ID</th>
				<th>Name</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$cures = mysqli_query($con , "SELECT * FROM branchcure WHERE branch_id='$branchID'");
				while($cure = mysqli_fetch_array($cures)){
					$cureInfo = new Cure($con , $cure['cure_id']);
					echo "<tr>
					    <td>" .$cure['cure_id'] . "</td>
					    <td><a href='doctor-cure.php?id=" .$cure['cure_id'] . "&bid=".  $branchID ."'>" . $cureInfo->getCureName() . "</a></td>
					</tr>";
				}
			?>
	

		</tbody>
	</table>

</body>
</html>