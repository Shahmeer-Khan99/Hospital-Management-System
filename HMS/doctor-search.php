<?php
	include('includes/config.php');
	if(isset($_POST['namesearch'])){
		$search =  $_POST['namesearch'];
	}

	if(isset($_POST['id'])){
		$branchID =  $_POST['id'];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Search <?php echo $search; ?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/Branch-Doctor.css">
</head>
<body>
	<div id="top" class="jumbotron jumbotron-fluid">
    	<div id="contents" class="container">
    		<h1 class="display-4">The Care Hospital</h1>
  		</div>
	</div>

	<table id='searchtable' class='table'>
		<thead>
			<th>Doctor's ID</th>
			<th>Doctor's Name</th>
		</thead>
		<tbody>
			<?php
				$query = mysqli_query($con , "SELECT * FROM doctor WHERE branch_id = '$branchID' AND name LIKE '%$search%'");
				while($doc = mysqli_fetch_array($query)){
					echo "<tr>
							<td>" . $doc['doctor_id'] . "</td>
							<td><a href='doctor.php?id=".$doc['doctor_id'] . "'>". $doc['name'] ."</a></td>
						</tr>";
				}




			?>
			



		</tbody>
	</table>



</body>
</html>