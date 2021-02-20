<?php
	include("includes/config.php");
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
	<title>Staff</title>
</head>
<body>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/Branch-Staff.css">

	<div id="top" class="jumbotron jumbotron-fluid">
    	<div id="contents" class="container">
    		<h1 class="display-4">The Care Hospital</h1>
  		</div>
	</div>
	<table class="table table-striped table-dark">
  		<thead>
    		<tr>
      			<th scope="col">Member's ID</th>
      			<th scope="col">Member's Name</th>
   			</tr>
  		</thead>
    	<tbody>
    		<?php 
    			$mems = mysqli_query($con , "SELECT * FROM staff WHERE branch_id='$branchID'");

    			while($mem = mysqli_fetch_array($mems)){
    				echo "<tr>
    						<td>" . $mem['staff_id'] . "</td>
    						<td><a href='staff.php?id=" . $mem['staff_id'] . "'>" .$mem['name']  . "</a></td>
    					  </tr>";

    				}
    		?>
  		</tbody>
	</table>





</body>
</html>