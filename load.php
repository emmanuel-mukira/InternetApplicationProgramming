<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//Class Auto Load
function ClassAutoload($className){
  $directories=["forms","tables","structure","processes","global","store"];

  foreach($directories as $dir){
    $fileName= dirname(__FILE__).DIRECTORY_SEPARATOR.$dir.
    DIRECTORY_SEPARATOR.$className.".php";

    if(file_exists($fileName) && is_readable($fileName)){
      require $fileName;
    }
  }
}

spl_autoload_register("ClassAutoload");

$objLayouts= new layouts();
$objMenu =new menus();

