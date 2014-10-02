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
    public function merge($schools, $variables){
        foreach($schools as $record){
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
//$school_records = $obj->merge($schools, $variables);
//print_r($school_records);
//$school_records = $obj->merge($schools, $variables);

 

$display = $obj->school_link($schools);
$school = $schools[$_GET['school_record']];

/*foreach($school as $record){
       $school_records = $obj->merge($schools, $variables);
        print_r($school_records);
       }

*/
//foreach($schools as $key => $value) {
   // foreach($schools as $record){

        $vals= array_combine($variables, $school);

foreach($vals as $key=>$value){

  echo $key . ': ' . $value . "<br>\n";

       }
  //          echo $key . ': ' . $value . "<br>\n";
//           }











?>
