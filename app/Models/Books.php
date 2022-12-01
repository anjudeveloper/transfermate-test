<?php 

namespace App\Models;
use dbModel;
class Books
{
	  private $conn; 
	public function __construct() { 
       $dbcon = new dbModel(); 
       // this is not needed in your case
       // you can use $this->conn = $this->connect(); without calling parent()
       $this->conn = $dbcon->connect();
    }
	

    // CRUD OPERATIONS
	public function create(array $data)
	{
	 $bookname = $data['name'];	
	 $auther_id = $data['auther_id'];	
	
	 $query=mysqli_query($this->conn,"select ID from Books where BookName='".$bookname."' ");
	 $duplicate=mysqli_num_rows($query);	
		if($duplicate==0)
			{
			 $sql = "INSERT INTO Books (BookName,auther_id) VALUES ('$bookname','$auther_id')";	
			 
				if(mysqli_query($this->conn, $sql)){
					$last_id = mysqli_insert_id($this->conn);
					return $last_id;
				} else{
					echo "ERROR: Could not able to execute $sql. " . mysqli_error($this->conn);
				}
			} 		
	}
	 // Seaarch query for search books based on author name
	public function searchdata($search)
	{
	    

	 $query=mysqli_query($this->conn,"select Name,BookName from Authers RIGHT  JOIN Books ON Authers.ID = Books.auther_id where Authers.Name LIKE '%$search%'");
          $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
        
      if ($result) {
          
       return array('message'=>'record founds','status'=>0,'data'=>$result);
      }
	   return array('message'=>'no record found','status'=>0,'data'=>'');
	}
	
}