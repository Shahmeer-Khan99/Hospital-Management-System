<?php
	include("includes/config.php");
	include("includes/classes/Doctor.php");
	include("includes/classes/Appointment.php");
	if(isset($_GET['id'])){
		$branchID = $_GET['id'];
	}

	else {
		header['Location:branch.php'];
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Appoinments</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/Branch-Appointment.css">
</head>
<body>
	<div id="top" class="jumbotron jumbotron-fluid">
    	<div id="contents" class="container">
    		<h1 class="display-4">The Care Hospital</h1>
  		</div>
	</div>
	<form id = 'SearchForm' action='appointment-search.php' method='POST'>
		<div class = 'form-group'>
			<input class="form-control" type = 'text' name= 'namesearch'  placeholder="Search for name">
			<input type = 'hidden' name='id' value='<?php echo $branchID; ?>'>
			<button type="submit" name='Searchbutton' class="btn btn-info btn-sm">Search</button>
		</div>
	</form>

	<table class = 'table table-hover table-dark'>
		<thead>
			<th>ID</th>
			<th>Person's Name</th>
			<th>Date</th>
			<th>Time</th>
			<th>Doctor's Name</th>
		</thead>
		<tbody>
			<?php 
				$query = mysqli_query($con , "SELECT * FROM appointments WHERE branch_id = '$branchID'");
				while($data = mysqli_fetch_array($query)){
				$apInfo = new Appoinment($con , $data['ap_id']);
				echo "<tr>
						<td>" . $data['ap_id'] . "</td>
						<td>" . $apInfo->getApName() . "</td>
						<td>" . $apInfo->getApDate() . "</td>
						<td>" . $apInfo->getApTime() . "</td>
						<td>" . $apInfo->getDoc()    ."</td>
					</tr>";

				}
			?>



		</tbody>

	</table>
	<div class ='container'>
		<a href = 'app-control-form.php'><button id='new' class = 'btn btn-lg btn-danger'>Make An Appointment</button></a>
	</div>

</body>
</html>