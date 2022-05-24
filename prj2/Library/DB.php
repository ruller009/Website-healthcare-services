<?php
class DB{
	public $connect;
	function __construct(){
		// $this->con=mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);
		// mysqli_select_db($this->con,$this->dbname);
		// mysqli_query($this->con,"SET NAMES 'utf8' ");
		
		$this->connect = pg_connect("host=localhost dbname=ruller user=postgres password=anhlaso1");
		pg_query($this->connect, "SET NAMES 'utf8'");
	}
	
}
