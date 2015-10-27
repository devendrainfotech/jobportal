<?php
	class Connectivity{
		private $con;
		private $rows;
		private $result;
		
		function __construct(){
			//$this->con = mysqli_connect("fdb7.biz.ht","1936711_job","jobportal123","1936711_job",3306);
			$this->con = mysqli_connect("localhost","root","","jobportal");
			if(mysqli_connect_errno()){
				echo "Failed to connect to mysql".mysqli_connect_error();
			}
			//echo "<br/>Connected!!<br/>";
		}		
//		function __destruct(){
//			mysqli_free_result($this->result);
//			mysqli_close($this->con);
//		}
		private static function Connect(){
			echo "<br/>Connected!!<br/>";
		}
		
		function getData($query){
			self::Connect();
			$this->result = mysqli_query($this->con,$query);

			$arr;// = Array(mysqli_num_rows($this->result));
			$i=0;
			/*
			$arr[0] = Array("Dalwadi",1,0.3);
			$arr[1] = Array("Dalwadi",1,0.3);
			$arr[2] = Array("Dalwadi",1,0.3,"1212");
			$array1 = array("asd","color"=>"ssssssss");
			print_r ($array1);
			*/
			while(($this->rows = mysqli_fetch_array($this->result))){
				//print_r ($rows . "<br/>");
				//echo "Row : ". $this->rows[0] . "=>" . $this->rows[1] ."<br/>";
				//echo is_array($this->rows) . " ????";
				$arr[$i++] = Array($this->rows);
			}
			if( isset( $arr ) ){
			print_r ($arr);
				//echo "Row : ". $this->rows[0] . "=>" . $this->rows[1] ."<br/>";
			
			//return $this->rows;
			return $arr;}			
		}
	}
	
?>