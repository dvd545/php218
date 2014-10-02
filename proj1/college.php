<?php
//import csv
class challenge{
public function importcsv($file){
  $first_row = TRUE;
  $records = array();
  ini_set('auto_detect_line_endings',TRUE);
  if (($handle = fopen($file, "r")) !== FALSE) {
    while (($row = fgetcsv($handle, 4096, ",")) !== FALSE) {
       if($first_row == TRUE) {
           $column_heading = $row;
           $first_row = FALSE;
       } else {
           $record = array_combine($column_heading, $row);
           $records[] = $record;
           //print_r($records);
		}
      
   }

    fclose($handle);
}

//$this->csvrecord($records);
//print_r(array_keys($records));
return $records;
    
}

public function csvrecord($records){
  foreach($records as $record) {
    foreach($record as $key => $value) {
     echo $key . ': ' . $value .  "</br> \n";
        
    }
    echo '<hr>';
//      return $records
    }
    //return $records
 }


    
    
    
    
/*
class html{
 public static function html(){
 
        
 
 }
}
*/
    

    
    

//merge csv array

//class mergeArray{
  function mergeArray($array1, $array2){
//	$array3[]

//  }

}
   
//constructor

} //class close

//link


$obj = new challenge;

$myrecords = $obj->importcsv("var.csv");
$secondrecord = $obj->importcsv("hd2.csv");
//print_r($myrecords)
//$myrecords = $obj->csvrecord($myrecords);

$names = array_column($myrecords, 'varTitle', 'varname');
print_r($names);

//$varTitle
//    $obj->csvrecord($records);


//print_r($obj);


//merge arrays
//key array1(dictionary description)-> key array2(variables title row)
//put array into single value
//take single value of array such as description
//echo college title
//link for college title
//total query for college title
//$obj->csvrecord($records);
//new csvrecord($records);


?>
