<?php
//import csv
class challenge{
public function importcsv($file){
  $first_row = TRUE;
  $records = array();
  ini_set('auto_detect_line_endings',TRUE);
  if (($handle = fopen($file, "r")) !== FALSE) {
    while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
       if($first_row == TRUE) {
           $column_heading = $row;
           $first_row = FALSE;
       } else {
           $record = array_combine($column_heading, $row);
           $records[] = $record;
		}
      
   }

    fclose($handle);
}

$this->csvrecord($records);

}

private function csvrecord($records){
  foreach($records as $record) {
    foreach($record as $key => $value) {
      echo $key . ': ' . $value .  "</br> \n";
    }
    echo '<hr>';
    }
 }
}



//merge csv array

//class mergeArray{
//  function mergeArray($array1, $array2){
//	$array3[]

//  }
//}
//constructor



//link


//new importcsv("var.csv");

$obj = new challenge;

$obj->importcsv("var.csv");
//$obj->csvrecord($records);
//new csvrecord($records);


?>
