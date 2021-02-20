<?php
	include("includes/config.php");
	include("includes/classes/Practitioner.php");
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
	<title>Practitioners</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/Branch-Practitioner.css">
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
      			<th scope="col">Practitioner's ID</th>
      			<th scope="col">Practitioner's Name</th>
   			</tr>
  		</thead>
    	<tbody>
    		<?php 
    			$pracs = mysqli_query($con , "SELECT * FROM practitioner WHERE branch_id='$branchID'");

    			while($prac = mysqli_fetch_array($pracs)){
    				echo "<tr>
    						<td>" . $prac['prac_id'] . "</td>
    						<td><a href='practitioner.php?id=" . $prac['prac_id'] . "'>" .$prac['name']  . "</a></td>
    					  </tr>";

    				}
    		?>
  		</tbody>
	</table>


</body>
</html>