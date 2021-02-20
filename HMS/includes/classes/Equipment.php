<?php
	class Equipment {
		private $id;
		private $con;
		private $name;
		private $eID;
		private $quantity; 




		public function __construct($con , $id){
			$this->con = $con;
			$this->id  = $id;

			$query = mysqli_query($this->con , "SELECT * FROM equipments WHERE equip_id = '$this->id'");
			$info  = mysqli_fetch_array($query);

			$this->eID = $info['equipID'];
			$this->name = $info['name'];
			$this->quantity = $info['quantity'];

		}


		public function getID(){
			return $this->eID;
		}

		public function getName(){
			return $this->name;
		}

		public function getQuan(){
			return $this->quantity;
		}

	}




























?>