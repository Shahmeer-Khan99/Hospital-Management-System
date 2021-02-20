<?php 
	include("includes/config.php");
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
	<title>Doctors</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/Branch-Doctor.css">

</head>
<body>

	<div id="top" class="jumbotron jumbotron-fluid">
    	<div id="contents" class="container">
    		<h1 class="display-4">The Care Hospital</h1>
  		</div>
	</div>

  <form id = 'SearchForm' action='doctor-search.php' method='POST'>
      <div class = 'form-group'>
        <input class="form-control" type = 'text' name= 'namesearch'  placeholder="Search for name">
        <input type = 'hidden' name='id' value='<?php echo $branchID; ?>'>
        <button type="submit" name='Searchbutton' class="btn btn-info btn-sm">Search</button>
      </div>
  </form>


	<table class="table table-striped table-dark">
  		<thead>
    		<tr>
      			<th scope="col">Doctor's ID</th>
      			<th scope="col">Doctor's Name</th>
   			</tr>
  		</thead>
    	<tbody>
    		<?php 
    			$doctors = mysqli_query($con , "SELECT * FROM doctor WHERE branch_id='$branchID'");

    			while($doctor = mysqli_fetch_array($doctors)){
    				echo "<tr>
    						<td>" . $doctor['doctor_id'] . "</td>
    						<td><a href='doctor.php?id=" . $doctor['doctor_id'] . "'>" .$doctor['name']  . "</a></td>
    					  </tr>";

    				}
    		?>
  		</tbody>
	</table>
</body>
</html>