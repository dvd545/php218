<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

//include 'code/loadcalling.php';

spl_autoload_register( function ($className) {
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
});



$main = new Classes\Models\filemanipulate();


$myrecords = $main->importcsv("var.csv"); //import first csv into array

$schools = $main->importcsv("hd2.csv"); //import secont csv into seperate array

//takes array values varname and vartitle and places them into array
$vals = \Classes\Models\arrayreplace::array_replace($myrecords, $schools, 'varname', 'varTitle');

$display = $main->school_link($vals); //creates links 

$table = \Classes\Models\html::table($vals)  //create table





?>
