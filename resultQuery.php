<?php
/**
* 
*/
class resultQuery
{

	var $conn;

	function __construct()
	{
		$servername = "localhost";
		$username = "root";
		$password = "tasyj1994";
		$db="mydb";
		$this->conn = new mysqli($servername, $username, $password,$db);

	}

	public function checkRank($admNum){
		if ($this->conn->connect_error) {
			echo 'conn failed';
			throw new Exception("Cannot connect to the DataBase"); 
			die;   
        }


		$sql = "SELECT admNum,rank FROM results WHERE admNum='$admNum'";
		$cn=$this->conn;
		$result = $cn->query($sql);

		$row=$result->fetch_assoc();
        return $row;
	}
}
?>