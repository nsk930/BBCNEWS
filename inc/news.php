<?php
class News
{
	private $conn;
	private $table_name = 'newsentity';
	
	public $name;
	public $email;
	public $phoneno;
	public $occupation;
	public $pass;
	
	public function __construct($db){
		
		$this->conn = $db;
	}

	function fetch(){
		$query="SELECT * FROM ".$this->table_name." where catagory = 'election'";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}
	function fetchsports(){
		$query="SELECT * FROM ".$this->table_name." where catagory = 'sports'";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}
	function fetchscience(){
		$query="SELECT * FROM ".$this->table_name." where catagory = 'science'";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}
	function fetchasia(){
		$query="SELECT * FROM ".$this->table_name." where catagory = 'asia'";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}
	function fetchindia(){
		$query="SELECT * FROM ".$this->table_name." where catagory = 'india'";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}
	function fetchbuisness(){
		$query="SELECT * FROM ".$this->table_name." where catagory = 'buisness'";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}
	function fetchistories(){
		$query="SELECT * FROM ".$this->table_name." where catagory = 'stories'";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}
	function fetchentertainment(){
		$query="SELECT * FROM ".$this->table_name." where catagory = 'entertainment'";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}
	function fetchhealth(){
		$query="SELECT * FROM ".$this->table_name." where catagory = 'health'";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}
	function fetchall(){
		$query="SELECT * FROM ".$this->table_name;
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}

	
}
?>