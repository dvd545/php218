<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

class challenge{

  public function importcsv($file){ //file import
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

 public function school_link($school_records){ //creates links
    if(empty($_GET)) {
        $i = - 1;
      foreach($school_records as $school_record) {
		  $i++;
          static_html::links($school_record, $i);
            
       }
     }
  }

   public function array_replace($arrays1, $arrays2, $key_1, $value_1){
      foreach($arrays1 as $array){
		
	     $replace[$array[$key_1]]=  $array[$value_1];		  
      }
      foreach($arrays2 as $array2 ){
		  $vals[] = array_combine($replace,$array2);

	   }
	   return $vals;
   } 	
	

} //class close

class static_html{
  static public function links($school_record, $i){ //link creation function
		//foreach($school_record as $record){
	  $school_record_num = $i ;
     echo '<a href=' . '"http://web.njit.edu/~dcs24/college.php?school_record=' .               $school_record_num . '"' . '>' . $school_record['Institution (entity) name'] . ' </a>';

     echo '</p>';
	//	}
  }
  
    
  static public function table($vals){ //table creation function
       echo "<table border = 1 bordercolor= black cellspacing=0 cellpadding=5 style='font-size:14pt'>";
     echo "<tr>";

	$school = $vals[$_GET['school_record']];
  
    foreach($school as $key => $value){
        echo '<th>', $key, '</th>';
        echo '<td>', $value, '</td>';
        echo '</tr>';
      }

     echo '</table>';

  }
    
}



$obj = new challenge; //create new object

$myrecords = $obj->importcsv("var.csv"); //import first csv into array
$schools = $obj->importcsv("hd2.csv"); //import secont csv into seperate array
$vals = $obj->array_replace($myrecords, $schools, 'varname', 'varTitle');
$display = $obj->school_link($vals); //creates links 
$table = static_html::table($vals)  //create table


?>
