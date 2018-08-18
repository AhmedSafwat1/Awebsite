<h2>Main Setting</h2>

<?php
//`site_name`, `site_url`, `site_description`, `site_email`, `site_tages`, `site_homepanel`, `fb`, `fw`, `rss`, `yt`
if($_POST)
{
  if(isset($_POST['submit']) && $_POST['submit'] == "Update")
  {
    $mainsetting["site_name"] = $_POST["sitename"];
    $mainsetting['site_url'] = $_POST['siteurl'];
    $mainsetting["site_description"] = $_POST["sitedesc"];
    $mainsetting['site_email'] = $_POST['siteemail'];
    $mainsetting['site_tages'] = $_POST['sitetages'];
    $mainsetting['site_homepanel'] = $_POST['sitehomepanel'];
    $mainsetting['fb'] = $_POST['fb'];
    $mainsetting['fw'] = $_POST['tw'];
    $mainsetting['rss'] = $_POST['rss'];
    $mainsetting['yt'] = $_POST['yt'];
    include "models/addclass.php";
    try{
      $setting = new add($mainsetting,"main_settings");
      if($setting == TRUE)
      {
        echo"<div class=\"alert alert-info\" role=\"alert\">
        This Update Sucessful !
      </div>";
      }
    }catch(Exception $ex)
    {
        echo $ex->getMessage();
    }
  }

}
else{
  try{
    include "models/display.php";
    $obj = new display("main_settings");
    $data =$obj->data[0];
    // print_r($data-);

  }catch(Exception $ex)
    {
        echo $ex->getMessage();
    }
  include "views/v_mainsettings.php";
}
?>
