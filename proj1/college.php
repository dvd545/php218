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
    }
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
    public function merge($school_records, $variables){
       foreach($school_records as $record) {
       $result = array_combine($variables, $record);
       }
     return $result;
    }

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
$schools = $obj->importcsv("hd2.csv");
$variables = array_column($myrecords, 'varTitle', 'varname' );

$school_records = $obj->merge($schools, $variables);


print_r($school_records);


//$secondrecord = $obj->csvrecord($secondrecord);

//$finalvars= array_combine($variables, $school_records);

//print_r($finalvars);



// if($first_row == TRUE) {
        //   $column_heading = $row;
        //   $first_row = FALSE;
       //} else {
         //  $record = array_combine($column_heading, $row);
          // $records[] = $record;
//$vars2 = $obj->csvrecord($newvars);


$display = $obj->school_link($school_records);
$school_record = $school_records[$_GET['school_record']];


foreach($school_record as $key => $value) {
      echo $key . ': ' . $value . "<br>\n";
   }




//foreach(array_keys($variables) as $key){
    
//    echo $variables[$key] . ': ' . $school_records[$value]. "<br>\n";

//}



?>
