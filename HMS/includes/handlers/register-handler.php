<?php 


function Sanitize_Username($input){
	$input = strip_tags($input);
	$input = str_replace(" ", "", $input);
	return $input;
}

function Sanitize_String($input){
	$input = strip_tags($input);
	$input = str_replace(" " , "" , $input);
	$input = ucfirst(strtolower($input));
	return $input;
}

function Sanitize_Password($input){
	$input = strip_tags($input);
	return $input;
}


if(isset($_POST['RegisterButton'])){
	$username  = Sanitize_Username($_POST['Username']);
	$firstname = Sanitize_String($_POST['FirstName']);
	$lastname  = Sanitize_String($_POST['LastName']);
	$email     = Sanitize_String($_POST['Email']);
	$cemail    = Sanitize_String($_POST['CEmail']);
	$password  = Sanitize_Password($_POST['Password']);
	$cpassword = Sanitize_Password($_POST['CPassword']);


	$SuccessFul = $account -> register($username , $firstname , $lastname , $email , $cemail , $password , $cpassword);

	if($SuccessFul){
		$_SESSION['UserLoggedIn'] = $username;
		header("Location:Home.php");

	}
}




?>