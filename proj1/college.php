<?php

//import csv
class fileImport{
   function fileImport($fileName){ 
     ini_set('auto_detect_line_endings' , TRUE);
     if(($handle = fopen($fileName, 'r')) !== FALSE){
        echo "handle returned";     
	print_r($handle);
        return $handle;
     }
     echo "handle closed";
     fclose($handle);
    }

   function fclose($handle) {
    
   
   }
}

merge csv array


constructor



link





?>
