<?php
class User
{
	private $conn;
	private $table_name = 'users';
	
	public $name;
	public $email;
	public $phoneno;
	public $occupation;
	public $pass;
	
	public function __construct($db){
		
		$this->conn = $db;
	}

	function check(){
		$query="SELECT email FROM ".$this->table_name."WHERE email=:email";
		$stmt = $this->conn->prepare($query);
		$this->email=htmlspecialchars(strip_tags($this->email));
		$stmt->bindParam(":email",$this->email);
		$stmt->execute();
		return $stmt;
	}
	function create()
	{
		$query = "INSERT INTO ".$this->table_name." SET username=:name, email=:email,occupation=:occupation,phone=:phoneno,password=:pass";
		$stmt = $this->conn->prepare($query);
		
		$this->name=htmlspecialchars(strip_tags($this->name));
		$this->email=htmlspecialchars(strip_tags($this->email));
		$this->pass=htmlspecialchars(strip_tags($this->pass));
		$this->phoneno=htmlspecialchars(strip_tags($this->phoneno));
		$this->occupation=htmlspecialchars(strip_tags($this->occupation));
		
		 $stmt->bindParam(":name",$this->name);
		 $stmt->bindParam(":email",$this->email);
		 $stmt->bindParam(":pass",$this->pass);
		 $stmt->bindParam(":phoneno",$this->phoneno);
		 $stmt->bindParam(":occupation",$this->occupation);
		 
		 if($stmt->execute()){
			 return true;
		 }else{
			 return false;
		 }
}
function login(){
	
	$query = "SELECT * FROM ".$this->table_name." where email=:email AND password=:pass";
	$stmt = $this->conn->prepare($query);
	$this->email=htmlspecialchars(strip_tags($this->email));
	$this->pass=htmlspecialchars(strip_tags($this->pass));
	
	 $stmt->bindParam(":email",$this->email);
	 $stmt->bindParam(":pass",$this->pass);
	 
	 $stmt->execute();
	 $num = $stmt->rowCount();
	 return $num;
}
}
?>