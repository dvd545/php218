<?php
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
	 print_r($record);
	 echo "bug";
 	 return array($records, $record);
       }
   
    }
   }
}

class keyConvert {
  function keyConvert($records, $record) {
    for each($records as $record) {
      for each ($record as $key=> $value) {
        echo $key . ': ' . $value . "<br> \n";
	echo "splat";
	}
   }
  }
}

//file name -> import
$fileName = 'test.csv';
new fileImport($fileName);
new csvRead($handle);
new keyConvert($records, $record);

//imported file handle -> file import
//csvRead($handle);

//return records -> key convert

//$fileName = 'test.csv';

//$csv = new fileImport($fileName);





/*
$first_row = TRUE;
ini_set('auto_detect_line_endings',TRUE);
if (($handle = fopen("test.csv", "r")) !==FALSE){
	while(($row = fgetcsv($handle, 1000, ",")) !== FALSE){
	  if($first_row == TRUE) {
	    $column_heading = $row;
	    $first_row = FALSE;
	}else{
	 $record = array_combine($column_heading, $row);
  	 $records[] = $record;
	}

    }
    fclose($handle);
} 

  foreach($records as $record) {
    foreach($record as $key => $value) { 
      echo $key . ': ' . $value . "</br> \n";
    }
    echo '<hr>'; 
  }
*/

?>

