<?php
	include('includes/config.php');
	if(isset($_POST['Searchbutton'])){
		$search =  $_POST['namesearch'];
		$branchID =  $_POST['id'];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Search <?php echo $search; ?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/Branch-Patient.css">
</head>
<body>
	<div id="top" class="jumbotron jumbotron-fluid">
    	<div id="contents" class="container">
    		<h1 class="display-4">The Care Hospital</h1>
  		</div>
	</div>

	<table id='searchtable' class='table'>
		<thead>
			<th>Patient's ID</th>
			<th>Patient's Name</th>
		</thead>
		<tbody>
			<?php
				$query = mysqli_query($con , "SELECT * FROM patient WHERE branch_id = '$branchID' AND name LIKE '%$search%'");
				while($pat = mysqli_fetch_array($query)){
					echo "<tr>
							<td>" . $pat['pat_id'] . "</td>
							<td><a href='patient.php?patid=".$pat['pat_id'] . "'>". $pat['name'] ."</a></td>
						</tr>";
				}




			?>
			



		</tbody>
	</table>



</body>
</html>