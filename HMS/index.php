<!DOCTYPE html>


<?php 
	include('includes/config.php');

	if(isset($_SESSION['UserLoggedIn'])){
		$UserLoggedIn = $_SESSION['UserLoggedIn'];
	}

	else {
		header("Location:register.php");
	}


?>
<html>
<head>
	<title>Branches</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/index.css">
</head>
<body>
	<div id="top" class="jumbotron jumbotron-fluid">
    	<div id="contents" class="container">
    		<h1 class="display-4">The Care Hospital</h1>
  		</div>
	</div>

	<div class="container-fluid">
		<?php
			$branch = mysqli_query($con , 'SELECT * FROM branch');

			while($row = mysqli_fetch_array($branch)){
				echo "<div class='jumbotron branch'>
						<a class='display-4' href='branch.php?id=" . $row['branch_id'] . "'>
						 ". $row['Name'] . " </a>
						 <hr>
						 <p>" . $row['Location'] . " 

						</div>";




			}
		?>

	

</body>
</html>