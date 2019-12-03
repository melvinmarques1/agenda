<?php
class DBController {
	private $host = "localhost";
	private $user = "Melvin";
	private $password = "fac@2019";
	private $database = "reservasalas";
	private $conn;
	
        function __construct() {
        $this->conn = $this->DBconnect();
	}	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		mysqli_set_charset($conn, 'utf8');
		return $conn;
	}
        function runQuery($query) {
                $result = mysqli_query($this->conn,$query);
                while($row=mysqli_fetch_assoc($result)) {
                $resultset[] = $row;
                }		
                if(!empty($resultset))
                return $resultset;
	}
}

?>