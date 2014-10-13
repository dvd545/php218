<?php
namespace Classes\Models;
    
class Html{
    static public function links($school_record, $i){ //link creation function
	       $school_record_num = $i ;
            /*echo '<a href=' . '"http://web.njit.edu/~dcs24/college.php?school_record=' .                            $school_record_num . '"' . '>' . $school_record['Institution (entity) name'] . '                    </a>'; */ 
        //switch for localhost
            echo '<a href=' . '"http://localhost/php218/proj1/college.php?school_record=' .                            $school_record_num . '"' . '>' . $school_record['Institution (entity) name'] . '                    </a>';

        
            echo '</p>';
    }

    static public function table($vals){ //table creation function
       echo "<table border = 1 bordercolor= black cellspacing=0 cellpadding=5 style='font   -                   size:14pt'>";
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



?>