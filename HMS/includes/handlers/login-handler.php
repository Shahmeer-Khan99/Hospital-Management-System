<?php 
	if(isset($_POST['LoginButton'])){	
		$username = $_POST['LoginUsername'];
		$password = $_POST['LoginPassword'];

		$result = $account->userlogin($username , $password);
		if($result){
			header("Location:Home.php");
			$_SESSION['UserLoggedIn'] = $username;
		}

		$adminresult = $account->adminlogin($username , $password);
			if($adminresult){
				header("Location:Home-Admin.php");
				$_SESSION['UserLoggedIn'] = $username;
			}
		$hospresult = $account->hosplogin($username , $password);
			if($hospresult){
				header("Location:Home-Hosp.php");
				$_SESSION['UserLoggedIn'] = $username;
			}

	}

?>