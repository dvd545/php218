<?php

//import csv
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

class csvRead {
  function csvRead($handle) {
    $first_row = TRUE;
    while(($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
       if($first_row == TRUE) {
         $column_heading = $row;
 
         $first_row = FALSE;
       }else{
         $record = array_combine($column_heading, $row);
         $records[] = $record;
	 return  $records[];
	 
       }
   
   }
    }
   
}

class keyConvert {
  function keyConvert($records[]) {
//    for each($records as $cord) {
//      for each ($cord as $key=> $value) {
//        echo $key . ': ' . $value . "<br> \n";
	echo "splat";
//	}
//   }
  }
}


//file name -> import
$fileName = 'test.csv';
new fileImport($fileName);
new csvRead($handle);

new keyConvert($records[]);
//merge csv array


//constructor



//link





?>
