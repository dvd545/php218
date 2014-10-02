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
 if(empty($_GET)) {
    foreach($car_orders as $car_order) {
      $i++;
      $car_order_num = $i - 1;
      echo '<a href=' . '"http://web.njit.edu/~kwilliam/is218/cars.php?car_order=' . $car_order_num . '"' . '>Car Order ' . $i . ' </a>';

      echo '</p>';
    }
  }

  $car_order = $car_orders[$_GET['car_order']];
  
   foreach($car_order as $key => $value) {
    echo $key . ': ' . $value . "<br>\n";
   }
   
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
$school_records = $obj->importcsv("hd2.csv");
//$school_records = array_column($schools, 'INSTNM');

//$secondrecord = $obj->csvrecord($secondrecord);


if(empty($_GET)) {
  foreach($school_records as $school_record) {
    $nums++;
    $school_record_num = $nums - 1;
    $school_records = $nums - 1;
    echo '<a href=' . '"http://localhost/php218/proj1/college.php?school_record=' . $school_record_num . '"' . '>School ' . $nums . ' </a>';

     echo '</p>';
  }
}
$school_record = $school_records[$_GET['school_record']];

foreach($school_record as $key=> $value) {
  echo $key . ': ' . $value. "<br>\n";
}



//print_r($myrecords)
//$myrecords = $obj->csvrecord($myrecords);

//$variables = array_column($myrecords, 'varTitle', 'varname');

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
