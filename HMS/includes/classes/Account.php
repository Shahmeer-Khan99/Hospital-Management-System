<?php 
	class Account{
		private $errorArray;
		private $con;
		public function __construct($con){
			$this->con = $con;
			$this->errorArray = array();
		}

		public function userlogin($un , $pw){
			$pw = md5($pw);
			$checkusername = mysqli_query($this->con , "SELECT * FROM users WHERE username = '$un' AND password = '$pw'");
			if(mysqli_num_rows($checkusername) == 1){
				return True;
			}
			else {
				array_push($this->errorArray , Constants::$LoginFailed);
				return False;
			}
		}

		public function adminlogin($un , $pw){
			$pw = md5($pw);
			$checkadminname = mysqli_query($this->con , "SELECT * FROM adminusers WHERE username = '$un' AND password = '$pw'");
			if(mysqli_num_rows($checkadminname) == 1){
				return True;
			}
			else {
				array_push($this->errorArray , Constants::$LoginFailed);
				return False;
			}
		}

		public function hosplogin($un , $pw){
			$pw = md5($pw);
			$checkhospname = mysqli_query($this->con , "SELECT * FROM hospusers WHERE username = '$un' AND password = '$pw'");
			if(mysqli_num_rows($checkhospname) == 1){
				return True;
			}
			else {
				array_push($this->errorArray , Constants::$LoginFailed);
				return False;
			}
		}







		public function register($un , $fn , $ln , $em , $cem , $pw , $cpw){
			$this->ValidateUsername($un);
			$this->ValidateFirstname($fn);
			$this->ValidateLastname($ln);
			$this->ValidateEmail($em , $cem);
			$this->ValidatePassword($pw , $cpw);

			if(empty($this->errorArray)){
				return $this->InsertUsers($un , $fn , $ln , $em , $pw);
			}
			else {
				return False;
			}
		}

		public function getError($error){
			if(!in_array($error, $this->errorArray)){
				$error = "";
			}
			
			return "<span class ='errorMessage'>$error</span>";
			
		}

		private function InsertUsers($un , $fn , $ln , $em , $pw){
			$encryptedpw = md5($pw);

			$result = mysqli_query($this->con , "INSERT INTO users VALUES ('' , '$un' , '$fn' , '$ln' , '$em' , '$encryptedpw')");
			return $result;

		}

		private function ValidateUsername($un){
			if(strlen($un) > 25 || strlen($un) < 5){
				array_push($this->errorArray , Constants::$usernameError);
				return;
			}

			$AdminUserCheck = mysqli_query($this->con , "SELECT username FROM adminusers WHERE username = '$un'");

			if(mysqli_num_rows($AdminUserCheck) != 0){
				array_push($this->errorArray , Constants::$usernameCheck);
				return;
			}

			$HospUserCheck =  mysqli_query($this->con , "SELECT username FROM hospusers WHERE username = '$un'");
			if(mysqli_num_rows($HospUserCheck) != 0){
				array_push($this->errorArray , Constants::$usernameCheck);
				return;
			}

			$usernamecheck = mysqli_query($this->con , "SELECT username FROM users WHERE username = '$un'");
			if (mysqli_num_rows($usernamecheck) != 0){
				array_push($this->errorArray , Constants::$usernameCheck);
				return;
			}

		}

		private function ValidateFirstname($fn){
			if(strlen($fn) > 30 || strlen($fn) < 2){
				array_push($this->errorArray , Constants::$firstnameError);
				return;
			}
		}		

		private function ValidateLastname($ln){
			if(strlen($ln) > 30 || strlen($ln) < 2){
				array_push($this->errorArray , Constants::$lastnameError);
				return;
			}		
		}

		private function ValidateEmail($em , $cem){
			if($em != $cem){
				array_push($this->errorArray , Constants::$emailMatchError);
				return;
			}
			if(!filter_var($em , FILTER_VALIDATE_EMAIL)){
				array_push($this->errorArray , Constants::$emailInvalidError);
				return;
			}

			$emailcheck = mysqli_query($this->con , "SELECT email FROM users WHERE email = '$em'");
			if(mysqli_num_rows($emailcheck) != 0){
				array_push($this->errorArray , Constants::$emailCheck);
				return;
			}
			
		}

		private function ValidatePassword($pw , $cpw){
			if($pw != $cpw){
				array_push($this->errorArray , Constants::$passwordMatchError);
				return;
			}
			if(preg_match("/[^A-Za-z0-9]/", $pw)){
				array_push($this->errorArray , Constants::$passwordInvalidError);
				return;
			}

			if(strlen($pw) > 30 || strlen($pw) < 5){
				array_push($this->errorArray , Constants::$passwordlengthError);
				return;
			
			}
		}
	}



?>