<?php
namespace Classes\Models;


interface Filemanipulate_interface{
    public static function importcsv($file); 
    public static function school_link($school_records);
    
}
 
class Filemanipulate implements Filemanipulate_interface {
 public static function importcsv($file){ //file import
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

   return $records;
 }
 public static function school_link($school_records){ //creates links
    if(empty($_GET)) {
        $i = - 1;
      foreach($school_records as $school_record) {
		  $i++;
          html::links($school_record, $i);
            
       }
     }
  }
}



?>