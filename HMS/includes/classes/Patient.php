<?php 
	class Patient{
		private $con;
		private $id;
		private $patName;
		private $patAge;

		public function __construct($con , $id){
			$this->con = $con;
			$this->id  = $id;


			$query   = mysqli_query($this->con , "SELECT * FROM patient WHERE pat_id = '$this->id'");
			$patInfo = mysqli_fetch_array($query);

			$this->patName = $patInfo['name'];
			$this->patAge  = $patInfo['Age'];

		}


		public function getPatName(){
			return $this->patName;
		}

		public function getPatAge(){
			return $this->patAge;
		}

	}














?>