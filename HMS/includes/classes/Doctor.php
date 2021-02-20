<?php 
	class Doctor{
		private $con;
		private $id;
		private $docName;
		private $docQua;
		private $docExp;
		private $Spec;
		private $CureID;
		private $fee;
		private $contact;



		public function __construct($con , $id){
			$this->con = $con;
			$this->id  = $id;

			$query   = mysqli_query($this->con , "SELECT * FROM doctor WHERE doctor_id = $this->id");
			$docInfo = mysqli_fetch_array($query);

			$this->docName = $docInfo['name'];
			$this->docQua  = $docInfo['qualification'];
			$this->docExp  = $docInfo['experience'];
			$this->Spec    = $docInfo['specialization'];
			$this->CureID  = $docInfo['cure_id'];
			$this->fee     = $docInfo['fee']; 
			$this->contact = $docInfo['Contact'];

		}


		public function getDocName(){
			return $this->docName;

		}

		public function getDocQua(){
			return $this->docQua;
		}

		public function getDocExp(){
			return $this->docExp;
		}

		public function getDocSpec(){
			return $this->Spec;

		}
		public function getCure(){
			$cure = new Cure($this->con , $this->CureID);
			return $cure->getCureName();
		}

		public function getfee(){
			return $this->fee;
		}	

		public function getContact(){
			return $this->contact;
		}


	}

?>