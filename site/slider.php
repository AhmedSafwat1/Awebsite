<?php 
include_once "include/init.php";
include_once "include/autoloader.php" ;
autoloader('delsection');
$obj_b = new del("banner");
$data_b = $obj_b->getdatabyidandcolum('slider','banner_type');
//`banner_type``id`, `banner_name`, `banner_type`, `banner_url`, `status`, `username`, `data`
echo "<div id=\"slider\">";
	   for ($i=0; $i <count($data_b) ; $i++) { 
		 $src =APP.$data_b[$i]['banner_url'];
		  echo "<img src='".$src."'  width='810' height='330'>";
	   } 
	   
echo "</div>";

?>

