<?php

class dbModel{
	  private $dbHost     = "";
    private $dbUser     = "";
    private $dbPass     = "";
    private $dbName     = "";
	private $conn = '';
public function __construct(){
	
	 
	$this->dbHost   = DB_HOST;
	$this->dbUser   = DB_USER;
	$this->dbPass   = DB_PASS;
	$this->dbName   = DB_NAME;
	
	
}
 public function connect(){
	 $connection = mysqli_connect($this->dbHost,$this->dbUser,$this->dbPass,$this->dbName);
	 if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}
	 
        return $connection;
		
	 
 }
 
 public function createtable()
 {
	$this->conn = $this->connect();
	 
                $query = "CREATE TABLE Authers (
                          ID int(11) AUTO_INCREMENT,
                          Name varchar(255) NOT NULL,
                          created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                          updated_data TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                          PRIMARY KEY  (ID)
                          )";
                $result = mysqli_query($this->conn, $query);

                $query = "CREATE TABLE Books (
                          ID int(11) AUTO_INCREMENT,
						  auther_id int(11),
                          BookName varchar(255) NOT NULL,
                          created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                          updated_data TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                          PRIMARY KEY  (ID),
						  FOREIGN KEY(auther_id) REFERENCES Authers(ID)
                          )";
                $result = mysqli_query($this->conn, $query);

 }
 
 
}



?>