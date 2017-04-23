<?php
// Define a class  
	    class imageClass{  
		// Declaring private varaibles  
		 private $farm_id;  
		 private $server_id;  
		 private $photo_id;
		 private $secret;
		 private $title;
		   
		// Declarte construct method which accepts three parameters  
		 function __construct($farm_id,$server_id,$photo_id,$secret,$title){  
		 $this->$farm_id = $farm_id;  
		 $this->$server_id = $server_id;  
		 $this->$photo_id = $photo_id; 
		 $this->$secret = $secret; 
		 $this->$title = $title;  
		 }  
		// Declare a method for customize print   
		 function generateImage(){  
		 echo "https://farm".$this->$farm_id.".staticflickr.com/".$this->$server_id."/".$this->$photo_id."_".$this->$secret."_m.jpg";  
		 //https://farm1.staticflickr.com/656/33007332980_cc2ceb8004_m.jpg
		 }   
		 }
?>