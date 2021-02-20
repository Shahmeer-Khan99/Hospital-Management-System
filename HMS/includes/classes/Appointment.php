<?php

	class Appoinment {
		private $id;
		private $con;
		private $name;
		private $time;
		private $docID;
		private $date;
		private $branchID;		

		public function __construct($con , $id){
			$this->id  = $id;
			$this->con = $con;


			$query = mysqli_query($this->con , "SELECT * FROM appointments WHERE ap_id = '$this->id'");

			$Info  = mysqli_fetch_array($query);

			$this->name  	= $Info['name'];
			$this->date  	= $Info['ap_date'];
			$this->time  	= $Info['ap_time'];
			$this->docID    = $Info['doctor_id'];
			$this->branchID = $Info['branch_id']; 

		}


		public function getApName(){
			return $this->name;
		}

		public function getApDate(){
			return $this->date;
		}


		public function getApTime(){
			return $this->time;
		}


		public function getDoc(){
			$doc = new Doctor($this->con , $this->docID);
			return $doc->getDocName(); 
		}

	}






























?>