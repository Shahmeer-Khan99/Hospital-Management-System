<?php 
	class Room{
		private $con;
		private $id;
		private $Rusedfor;
		private $RID;
		
		public function __construct($con , $id){
			$this->con = $con;
			$this->id  = $id;


			$query = mysqli_query($this->con , "SELECT * FROM rooms WHERE room_id='$this->$id'");
			$roomInfo = mysqli_fetch_array($query);
			$this->Rusedfor = $roomInfo['used_for'];
			$this->RID      = $roomInfo['room_id'];

		}



		public function getRoomUsage(){
			return $this->Rusedfor;
		}

		public function getRID(){
			return $this->RID ;
		}
	}






























?>