<?php
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");
	$account = new Account($con); 
	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInput($input){
		if(isset($_POST[$input])){
			echo $_POST[$input];
		}
	}

?>







<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=EB+Garamond&family=Maven+Pro:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="includes/assets/css/register.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src ="includes/assets/js/register.js"></script>
</head>
<body>
	<?php
		if(isset($_POST['RegisterButton'])){
			echo '<script>
					$(document).ready(function(){

						$("#LoginForm").hide();
						$("#RegisterForm").show();
					});
				</script>';
			}
		else {
			echo '<script>
					$(document).ready(function(){
						$("#LoginForm").show();
						$("#RegisterForm").hide();
					});
				</script>';

		}
	?>

		<div id ='log' class = 'forms'>
			<form id = 'LoginForm' action= 'register.php' method = 'POST'>
				<h1>Login Form</h1>
				<p>
					<?php echo $account->getError(Constants::$LoginFailed);?>
					<label for = 'LoginUsername'>Username</label>
					<input id = "LoginUsername" name= "LoginUsername" type = 'text'  placeholder="Username" required>
				</p>
				<p>
					<label for = 'LoginPassword'>Password</label>	
					<input id = 'LoginPassword' name = 'LoginPassword' type = 'password' placeholder="Password" required>
				</p>
				<button  type= 'submit' name= 'LoginButton'>Login</button>
				<div class="hasAccount">
					<span id="Logintext" style="cursor:pointer">Don't Have An Account Yet? Sign Up Here!</span>
				</div>




			</form>
		</div>

		<div id = 'reg' class='forms'>
			<form id = 'RegisterForm' action = 'register.php' method="POST">
				<h1>Create New Account</h1>
				<p>
					<?php echo $account->getError(Constants::$usernameError);?>
					<?php echo $account->getError(Constants::$usernameCheck);?>
					<label for = 'Username'>UserName:</label>
					<input id = 'Username' name = 'Username' type = 'text' placeholder= 'E.G Haroon Ahmad' value = '<?php getInput('Username') ?>' required>
				</p>
				<p>
					<?php echo $account->getError(Constants::$firstnameError);?>
					<label for = 'FirstName'>First Name:</label>
					<input id = 'FirstName' name = 'FirstName' type = 'text' placeholder= 'E.G Haroon' value = '<?php getInput('FirstName') ?>' required>
				</p>
				<p>
					<?php echo $account->getError(Constants::$lastnameError);?>
					<label for = 'LastName'>Last Name:</label>
					<input id = 'LastName' name = 'LastName' type = 'text' placeholder= 'E.G Ahmad' value = '<?php getInput('LastName') ?>'  required>
				</p>
				<p>
					<?php echo $account->getError(Constants::$emailMatchError);?>
					<?php echo $account->getError(Constants::$emailInvalidError);?>
					<?php echo $account->getError(Constants::$emailCheck);?>
					<label for = 'Email'>E-mail:</label>
					<input id = 'Email' name = 'Email' type = 'email' placeholder= 'E.G Haroon23@gmail.com' value = '<?php getInput('Email') ?>' required>
				</p>
				<p>
					<label for = 'CEmail'>Confirm Email:</label>
					<input id = 'CEmail' name = 'CEmail' type = 'email' placeholder= 'E.G Haroon23@gmail.com' value = '<?php getInput('CEmail') ?>' required>
				</p>
				<p>
					<?php echo $account->getError(Constants::$passwordMatchError) ?>
					<?php echo $account->getError(Constants::$passwordInvalidError) ?>
					<?php echo $account->getError(Constants::$passwordlengthError) ?>
					<label for = 'Password'>Password:</label>
					<input id = 'Password' name = 'Password' type = 'password' placeholder= 'Password' required>
				</p>
				<p>
					<label for = 'CPassword'>Confirm Password:</label>
					<input id = 'CPassword' name = 'CPassword' type = 'password' placeholder= 'Confirm Password' required>
				</p>
				<button type = 'submit' name = 'RegisterButton'>Register</button>
				<div class="hasAccount">
					<span id="Registertext" style="cursor:pointer">Already Have An Account? Log In Here!<span>
				</div>
			</form>
		</div>







</body>
</html>