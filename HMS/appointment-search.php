<?php
	include('includes/config.php');
	include('includes/classes/Doctor.php');
	if(isset($_POST['Searchbutton'])){
		$search = $_POST['namesearch'];
		$id     = $_POST['id'];

	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Search <?php echo $search ?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/Branch-Appointment.css">
</head>
<body>
	<div id="top" class="jumbotron jumbotron-fluid">
    	<div id="contents" class="container">
    		<h1 class="display-4">The Care Hospital</h1>
  		</div>
	</div>


	<table id='searchtable' class='table'>
		<thead>
			<th>ID</th>
			<th>Person's Name</th>
			<th>Date</th>
			<th>Time</th>
			<th>Doctor's Name</th>
		</thead>

		<tbody>
			<?php
				$docquery = mysqli_query($con , "SELECT * FROM doctor WHERE name LIKE  '$search%' AND branch_id = '$id'");
				$Info     = mysqli_fetch_array($docquery);
				$docid    = $Info['doctor_id'];
				$query = mysqli_query($con , "SELECT * FROM appointments WHERE doctor_id = '$docid'");
				$doc   = new Doctor($con , $docid);
				while($apInfo = mysqli_fetch_array($query)){
					echo "<tr>
							<td>" .$apInfo['ap_id']. "</td>
							<td>" .$apInfo['name']. "</td>
							<td>" .$apInfo['ap_date']. "</td>
							<td>" .$apInfo['ap_time']. "</td>
							<td>" .$doc->getDocName(). "</td>


						  </tr>";
				}




			?>


		</tbody>



	</table>

</body>
</html>