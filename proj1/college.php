<?php


class csvimport{
function csvimport($file){
$first_row = TRUE;
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
}
}

class keyInsert{
function keyInsert($records)
  foreach($records as $record) {
    foreach($record as $key => $value) {
      echo $key . ': ' . $value .  "</br> \n";
    }
    echo '<hr>';
  }
}
}


$file = "test.csv";
new csvimport($file);
new keyInsert($records);




foreach($records as $record) {
    foreach($record as $key => $value) {
      echo $key . ': ' . $value .  "</br> \n";
    }   
    echo '<hr>';
  }

//import csv




//merge csv array

//constructor



//link





?>
