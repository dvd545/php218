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

  public function school_link($school_records){
    if(empty($_GET)) {
        $i = 1;
      foreach($school_records as $school_record) {
          staticLinks::html($school_records, $i);
          $i++;
        /*$nums++;
        $school_record_num = $nums - 1;
        $school_records = $nums - 1;
        echo '<a href=' . '"http://localhost/php218/proj1/college.php?school_record=' .               $school_record_num . '"' . '>School ' . $nums . ' </a>';

     echo '</p>'; */
  }
}



}
    

//merge csv array

//class mergeArray{
  function mergeArray($array1, $array2){
//	$array3[]

//  }

}
   
//constructor

} //class close

//link
class staticLinks{
  static public function html($school_records, $i){
        $school_record_num = $i - 1;
        $school_records = $i - 1;
        echo '<a href=' . '"http://localhost/php218/proj1/college.php?school_record=' .               $school_record_num . '"' . '>School ' . $i . ' </a>';

     echo '</p>';
  }
  
  }




$obj = new challenge;

$myrecords = $obj->importcsv("var.csv");
$school_records = $obj->importcsv("hd2.csv");
$variables = array_column($myrecords, 'varTitle');
//$newvars = array_unshift($school_records, $variables);
//print_r($newvars);

//$school_records = array_column($schools, 'INSTNM');

//$secondrecord = $obj->csvrecord($secondrecord);


/*
if(empty($_GET)) {
  foreach($school_records as $school_record) {
    $nums++;
    $school_record_num = $nums - 1;
    $school_records = $nums - 1;
    echo '<a href=' . '"http://localhost/php218/proj1/college.php?school_record=' . $school_record_num . '"' . '>School ' . $nums . ' </a>';

     echo '</p>';
  }
}
*/

//$display = $obj->school_link($school_records);
$school_record = $obj->importcsv("hd2.csv");
//$school_record = $school_records[$_GET['school_record']];

foreach($school_record as $key) {
  foreach($variables as $value){
      echo $key . ': ' . $value. "<br>\n";
      
      }
}



//print_r($myrecords)
//$myrecords = $obj->csvrecord($myrecords);

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
