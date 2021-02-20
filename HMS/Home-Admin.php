<?php
	include('includes/config.php');

	if(isset($_SESSION['UserLoggedIn'])){
		$UserLoggedIn = $_SESSION['UserLoggedIn'];
	}

	else {
		header("Location:register.php");
	}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/home-admin.css">
	<link href="https://fonts.googleapis.com/css2?family=Cabin&family=Inconsolata:wght@500&family=Nunito&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">

</head>
<body>
	<div class='container'>
		<div id="contents">
			<div class="row">
				<div class="col-lg-12">
					<h1>The Care Hospital</h1>
					<hr>
					<a href="index.php"><button id = 'branch' type="button" class="btn btn-danger btn-lg">Branches</button></a>
					<a class= 'formb' href="cure-form.php"><button id='forms' type="button" class="btn btn-info btn-sm">Cure Form</button></a>
					<a class= 'formb' href="doctor-form.php"><button id='forms' type="button" class="btn btn-info btn-sm">Doctor Form</button></a>
					<a class= 'formb' href="branch-form.php"><button id='forms' type="button" class="btn btn-info btn-sm">Branch Form</button></a>


					
					
				</div>

			</div>

			
		</div>


	</div>



</body>
</html>