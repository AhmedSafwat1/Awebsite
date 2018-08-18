<?php
include_once './include/autoloader.php';
 try{
    
    autoloader("display") ;
    $obj = new display("main_settings");
    $data_info =$obj->data[0];
  }catch(Exception $ex)
    {
        echo $ex->getMessage();
    }
?>