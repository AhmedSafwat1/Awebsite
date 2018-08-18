<?php
include_once "./include/autoloader.php";
include_once "./include/init.php";
// header.php
 include_once "./site/header.php";

//  contensts star
 echo "<div id=\"contents\">";

 //sliderbar.php

 include_once "./site/siderbar.php";
 echo "<div id=\"conts\">";
 //sdlider.php
echo "<script>
</script>";
echo "<div class='page'>";
// `page_id`, `page_name`, `page_content`, `page_status`, `page_visite`, `section_id`, `page_image`, `page_date`, `username`
$id = $_GET['id'];
autoloader('delsection');
$d= new del("pages");
try{
  $dat_d = $d->getdatabyidandcolum($id,'page_id');
}catch(Exception $e) {
  $dat_d = FALSE;
  echo "Error: " . $e->getMessage();
}
if($dat_d == FALSE)
{
  echo "</div>";

echo "</div>";

//  footer.php
 include_once "site/footer.php";
 echo "</div>";
  exit();
}
$dat_d = $dat_d[0];
$im = APP.$dat_d['page_image'];
echo "<div class=\"card mb-3\">
<img class=\"card-img-top\" src='".$im."' alt=\"Card image cap\">
<div class=\"card-body\">
  <h4 class=\"card-title\">".$dat_d['page_name']."</h4>
  <p class=\"card-text\">".$dat_d['page_content']."</p>
  <p class=\"card-text\"><small class=\"text-muted\">".$dat_d['page_date']."</small></p>
  </div>
</div>
</div>";


echo "</div>";

echo "</div>";

//  footer.php
 include_once "site/footer.php";
 echo "</div>";


?>