<?php 

	class Cure{
		private $con;
		private $id;
		private $cureName;


		public function __construct($con , $id){
			$this->con = $con;
			$this->id  = $id;

			$query    = mysqli_query($this->con , "SELECT * FROM cure WHERE cure_id='$this->id'");
			$cureInfo = mysqli_fetch_array($query);

			$this->cureName = $cureInfo['name'];
		}

		public function getCureName(){
			return $this->cureName;
		}



}


?>