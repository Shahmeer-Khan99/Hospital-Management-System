<?php
	include("includes/config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Equipment</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/Branch-Patient.css">
</head>
<body>
	<div id="top" class="jumbotron jumbotron-fluid">
    	<div id="contents" class="container">
    		<h1 class="display-4">The Care Hospital</h1>
  		</div>
	</div>
	<form id = 'SearchForm' action='equipment.php' method='POST'>
		<div class = 'form-group'>
			<input class="form-control" type = 'text' name= 'search'  placeholder="Enter Branch ID">
			<button type="submit" name='Searchbutton' class="btn btn-info btn-sm">Search</button>
		</div>
	</form>

	<table class = 'table table-striped table-dark'>
		<thead>
			<tr>
				<th>Equipment ID</th>
				<th>Equipment Name</th>
				<th>Equipment Quantity</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				if(isset($_POST['Searchbutton'])){
					$id = $_POST['search'];
				
					$query = mysqli_query($con , "SELECT * FROM equipments WHERE branch_id = '$id'");
					while($equip = mysqli_fetch_array($query)){
						echo "<tr>
							<td>" . $equip['equip_id'] . "</td>
							<td>" . $equip['name'] . "</td>
							<td>" . $equip['quantity'] ."</td>
							</tr>";
				}
			}
			?>
		</tbody>
	</table>
	<a href = 'equipment-form.php'><button id='equipb' class='btn btn-lg btn-danger'>Equipment Form</button></a>
</body>
</html>