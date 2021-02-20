<?php
	include('includes/config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Operation Charges</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/Branch-Rooms.css">
</head>
<body>
	<div id="top" class="jumbotron jumbotron-fluid">
    	<div id="contents" class="container">
    		<h1 class="display-4">The Care Hospital</h1>
  		</div>
	</div>

	<table class = 'table table-striped table-dark'>
		<thead>
			<th>Operation</th>
			<th>Charges</th>
		</thead>
		<tbody>
			<?php
				$query = mysqli_query($con , 'SELECT * FROM opercharges');
				while($oper = mysqli_fetch_array($query)){
					echo "<tr>
						   <td>". $oper['type'] ."</td>
						   <td>" . $oper['charges'] . "</td>
						</tr>";

				}



			?>



		</tbody>





	</table>


</body>
</html>