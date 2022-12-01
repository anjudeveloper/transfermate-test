<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Import Auther Feed</title>
  <style>
      
      body{font-family:arial;margin:0;padding:0}
      
      section{padding:10px;max-width:500px;margin:auto;}
ul.booksdata {
    width: 100%;
    max-width: 400px;
    list-style: none;
    padding: 0;
   
   
}

ul.booksdata li {
   
    border-bottom: 1px solid #ccc;
     display: flex; 
    transition: all 0.3s;
  width:0;
  overflow:hidden;
    
}
ul.booksdata li.show-list{width:100%; padding: 7px 5px;}
ul.booksdata li:last-child{border-bottom:0}
ul.booksdata li span{flex:0 0 50%}
ul.booksdata li:first-child{font-weight:600}
form{padding:0;}
form input {
    border: 1px solid #ccc;
    line-height: 1.5;
    padding: 8px 5px;
}
form input[type="submit"]{padding:8px 10px;cursor:pointer}
  </style>
</head>
<?php

$searchvalue = "";
if(isset($_GET['s']))
{
  $searchvalue =  $_GET['s']; 
    
}

?>
<body>

	<section>
		<div>
		  <form><input type="text" id="search-field" name="s" value="<?=$searchvalue;?>"/><input type="submit"  value="search"/></form>
		  
		   <?php 
		  
		   if($data) {
		   $dataHTml = '';  
		    if($data['data']) {
		  $dataHTml ='<ul class="booksdata"><li class="list-item"><span>Author Name</span><span>Book Name</span></li>';
		   foreach($data['data'] as $row) :
		     
		       $dataHTml .='<li class="list-item"><span>'.$row["Name"].'</span><span>'.$row["BookName"].'</span></li>';
		       endforeach;
		   $dataHTml .='</ul>';
		    } else {
		        
		    $dataHTml = '<p>'.$data["message"].'</p>';
		    }
		   echo $dataHTml;
		  } ?>
		</div>
	<section>
<script>
var interval = 300;
    document.querySelectorAll('.list-item').forEach(function(listitem,index) {
        
     setTimeout(function() {
    listitem.className = listitem.className + " show-list";
  },  index * interval);
 
});
</script>
</body>

</html>