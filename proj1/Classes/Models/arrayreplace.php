<?php
namespace Classes\Models;
   
interface array_replace_interface {
    public static function array_replace($arrays1, $arrays2, $key_1, $value_1);

}

 class arrayreplace implements array_replace_interface {
    public static function array_replace($arrays1, $arrays2, $key_1, $value_1){
      foreach($arrays1 as $array){
		
	     $replace[$array[$key_1]]=  $array[$value_1];		  
      }
      foreach($arrays2 as $array2 ){
		  $vals[] = array_combine($replace,$array2);

	   }
	   return $vals;
   } 	
	
    
    
}

?>