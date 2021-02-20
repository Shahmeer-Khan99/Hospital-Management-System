<?php 
	class Branch {
		private $con;
		private $id;
		private $branchId;
		private $branchName;
		private $branchLocation;


		public function __construct($con , $id){
			$this->con = $con;
			$this->id  = $id;


			$query = mysqli_query($this->con , "SELECT * FROM branch WHERE branch_id = '$this->id'");
			$branchinfo = mysqli_fetch_array($query);

			$this->branchName    = $branchinfo['Name'];
			$this->branchLocation = $branchinfo['Location'];
		}

		public function getBranchName(){
			return $this->branchName;
		}

		public function getBranchLocation(){
			return $this->branchLocation;
		}


	}

?>