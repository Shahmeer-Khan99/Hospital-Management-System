<?php 
	class Staff{
		private $id;
		private $con;
		private $staffName;
		private $staffType;


		public function __construct($con , $id ){
			$this->con = $con;
			$this->id  = $id;


			$query = mysqli_query($this->con , "SELECT * FROM staff WHERE staff_id='$this->id'");
			$staffInfo = mysqli_fetch_array($query);
			$this->staffName = $staffInfo['name'];
			$this->staffType = $staffInfo['type'];



		}

		public function getStaffName(){
			return $this->staffName;
		}

		public function getStaffType(){
			return $this->staffType;
		}
	}

















?>