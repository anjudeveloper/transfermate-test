<?php 
namespace App\Models;
use dbModel;
class Auther
{
	/**
     * Create a new model instance.
     *
     * @return void
     */
    private $conn; 
	public function __construct() { 
       $dbcon = new dbModel(); 
       // this is not needed in your case
       // you can use $this->conn = $this->connect(); without calling parent()
       $this->conn = $dbcon->connect();
    }
	
	protected $id;
	protected $title;
	protected $description;
	protected $price;
	protected $sku;
	protected $image;
	
    // GET METHODS
	public function getId()
	{
		return $this->id;
	}
	
	public function getTitle()
	{
		return $this->title;
	}
	
	public function getDescription()
	{
		return $this->description;
	}
	
	public function getPrice()
	{
		return $this->price;
	}
	
	public function getSku()
	{
		return $this->sku;
	}
	
	public function getImage()
	{
		return $this->image;
	}
	
    // SET METHODS
    public function setTitle(string $title)
	{
		$this->title = $title;
	}
	
	public function setDescription(string $description)
	{
		$this->description = $description;
	}
	
	public function setPrice(string $price)
	{
		$this->price = $price;
	}
	
	public function setSku(string $sku)
	{
		$this->sku = $sku;
	}
	
	public function setImage(string $image)
	{
		$this->image = $image;
	}

    // CRUD OPERATIONS
	public function create(array $data)
	{
	 $auther = $data['author'];	
	 $query=mysqli_query($this->conn,"select ID from Authers where Name='".$auther."' ");
	 $duplicate=mysqli_num_rows($query);
if($duplicate==0)
    {
	 $sql = "INSERT INTO Authers (Name) VALUES ('$auther')";	
	 
	if(mysqli_query($this->conn, $sql)){
   $last_id = mysqli_insert_id($this->conn);
   return $last_id;
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($this->conn);
	}
	} else 
	{
		
		$ather_Id = mysqli_fetch_row($query)[0];
     return $ather_Id;
	}		
	}
	
	public function read(int $id)
	{
		

		return $this;
	}
	
	public function update(int $id, array $data)
	{
		
	}
	
	public function delete(int $id)
	{
		
	}
}