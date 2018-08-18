<?php 
include_once "include/init.php";
include_once './include/autoloader.php';
try{
     
     autoloader('sectiondisplay') ;
     autoloader('delsection');
     $obj_p_s = new del("pages");
     $data_p_s_info = $obj_p_s->getdatabyidandcolum('12','section_id');
}catch(Exception $ex)
{
      echo $ex->getMessage();
}
?>
<!-- `page_id`, `page_name`, `page_content`, `page_status`, `page_visite`, `section_id`, `page_image`, `page_date`, `username` -->
<div id="latestprojects">
<h1>Latest Projects:</h1> 
<?php 
 for ($i=0; $i < count($data_p_s_info) ; $i++) { 
?>
  <div class="project">
         <img src="<?php echo APP.$data_p_s_info[$i]['page_image'] ;?>" width="140" height="100" />
      <h2><?php  echo $data_p_s_info[$i]['page_name'] ?></h2>
      <p>
      <?php  echo $data_p_s_info[$i]['page_content'] ?>...                  
      
      </p>
      <a href="page.php?id=<?php echo $data_p_s_info[$i]['page_id']; ?>">Read more »</a>
  </div>
 <?php }?>
  
  </div>
