<?php 

namespace App\Controllers;

use App\Models\Books;
use App\Models\Auther;
use Symfony\Component\Routing\RouteCollection;
use DOMDocument;
class feedController
{
    /**
     * Function for home page.
    */
	public function index(RouteCollection $routes)
	{
            		$data = '';
            		      
            			   
			    if(isset($_GET['s'])) { 
	         
        	        $book = new Books();
        	       $data = $book->searchdata($_GET['s']);
        	     
        	     }
			    
			   
				require_once APP_ROOT . '/views/home.php';
	}
	
 /**
     *Function for read all XML data from xml folder and save in database.
    */
	public function fetchxmlfeeddata(RouteCollection $routes)
	{
	     
			$auther = new Auther();
			$book = new Books();
			 $xmlfiles = glob(ASSETS_URL . "/xml/*xml");
			 
			 if (is_array($xmlfiles)) {
			 $data_array = array();
			 
			 foreach($xmlfiles as $xmlfile) {
				$xml_file = file_get_contents($xmlfile);
				$xml = simplexml_load_string($xml_file, "SimpleXMLElement");
				$json = json_encode($xml);
				$array = json_decode($json,TRUE);
				
				 if($array['book']) {
					 foreach($array['book'] as $data) {
                         $auther_ID = $auther->create($data);
						 $data['auther_id'] = $auther_ID ;
                         $auther_ID = $book->create($data);
					 }
				 }
				
			   }
				 
			}
			   
	}
}