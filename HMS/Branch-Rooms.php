<?php

	include("includes/config.php");
	include("includes/classes/Room.php");
	
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
	<title>Rooms</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/Branch-Rooms.css">
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
				<th>Room's ID</th>
				<th>Used As</th>
				<th>Charges</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$rooms = mysqli_query($con , "SELECT * FROM rooms WHERE branch_id='$branchID'");
				while($room = mysqli_fetch_array($rooms)){
					if($room['used_for'] == 'Operation Theatre'){
						echo "<tr>
					    	<td>" .$room['room_id'] . "</td>
					    	<td><a href = 'op-charges.php'>" . $room['used_for'] . "</a></td>
					    	<td>" . $room['charges'] . "</td>
						</tr>";
					}
					else {
					echo "<tr>
					    <td>" .$room['room_id'] . "</td>
					    <td>" . $room['used_for'] . "</td>
					    <td>" . $room['charges'] . "</td>
					</tr>";
				}
				}
			?>
	

		</tbody>
	</table>

</body>
</html>