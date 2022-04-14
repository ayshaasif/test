<?php 
  //  include_once 'includes/newclass.inc.php';
  //  include_once 'includes/dbh.inc.php';
  //  include_once 'includes/user.inc.php';
  //  include_once 'includes/viewuser.inc.php';
     spl_autoload_register('myAutoLoader');
     
     function myAutoLoader($className){
       $path = "../oop_Skillset/includes/";
       $extension = ".inc.php";
       $fullPath = $path.$className.$extension;

       if(!file_exists($fullPath)){
           echo "NOt found 404";
           return false;
       }
       include_once $fullPath;

     }
?>