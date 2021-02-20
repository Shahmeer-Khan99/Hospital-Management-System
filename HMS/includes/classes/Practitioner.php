<?php

	class Practitioner {
		private $pracName;
		private $con;
		private $id;
		private $pracArea;


		public function __construct($con , $id){
			$this->con = $con;
			$this->id  = $id;
		


		$query = mysqli_query($this->con , "SELECT * FROM practitioner WHERE prac_id = '$this->id'");
		$pracInfo = mysqli_fetch_array($query);

		$this->pracName = $pracInfo['name'];
		$this->pracArea = $pracInfo['area'];
	}


		public function getPracName(){
			return $this->pracName;
		}

		public function getPracArea(){
			return $this->pracArea;
		}







	}




?>