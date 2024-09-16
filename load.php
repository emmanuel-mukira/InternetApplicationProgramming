<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//Class Auto Load
function ClassAutoload($className){
  $directories=["forms","tables","structure","processes","global","store","includes"];

  foreach($directories as $dir){
    $fileName= dirname(__FILE__).DIRECTORY_SEPARATOR.$dir.
    DIRECTORY_SEPARATOR.$className.".php";

    if(file_exists($fileName) && is_readable($fileName)){
      require $fileName;
    }
  }
}

spl_autoload_register("ClassAutoload");


//Classes
$objLayouts= new layouts();
$objMenu =new menus();
$objContents=new contents();


require "includes/constants.php";
require "includes/dbConnection.php";

$conn=new dbConnection(DBTYPE,Hostname,Username,Password,Database,Port);

