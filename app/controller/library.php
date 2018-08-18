<p>
    library
</p>

<?php 
 if($_POST)
 {
    
  if(isset($_POST['submit']) && $_POST['submit']=="Upload")
    {
      if(isset($_FILES))
      {
        include_once "models/uploadfile.php";
        $file = $_FILES['new_image'];
        $allowedext = ['jpg','png','pdf','txt','jpeg,jpg'];
        $maxsize = 2048000;
        $uploaddirector ="uplooad/";
        try{
        $myfil = new uplooad($file,$allowedext,$maxsize,$uploaddirector);
        $myfil->upload();
        $url = $myfil->geturl();
        //echo "$url";
        }
        catch(Exception $e) {
         echo "Error: " . $e->getMessage();
        }
      }
    }
    if(isset($_POST['submit']) && $_POST['submit']=="Delete")
    {
      if(isset($_POST['select']))
      {
        $file_del = $_POST['select'];
        try
        {
           include_once "models/deltefile.php";
           $delf = new del_F($file_del);
           if($delf)
           {
            echo "<div class=\"alert alert-info\" role=\"alert\">
            Delete Sucessful !
            </div>";
           }
           else{
            echo "<div class=\"alert alert-danger\" role=\"alert\">
            Not Delete  !
            </div>";
           }
        }
        catch(Exception $e) {
          echo "Error: " . $e->getMessage();
         }
      }
      else
      {
        echo "<div class=\"alert alert-warning\" role=\"alert\">
         Not Select Any Thing !
      </div>";
      }

     
    }
     
 
 
 
}
else
{
  include_once "views/library.php";
  echo "<hr>";
  $uploaddirector ="uplooad/";
  $dir = scandir($uploaddirector);
  $dirn = array_diff($dir,array('..','.'));
  echo "<form action='' method='post'><div class='row'>";
  foreach ($dirn as $value) {
    # code...
    $ff = $uploaddirector.$value;
    echo "<figure class=\"figure col-md-3 border rounded \" >";
    echo "<img src='". $ff . "' class=\"figure-img img-fluid rounded\" style='min-height:150px; max-height:150px'> ";
    echo "<figcaption class=\"figure-caption\">
    <div class=\"form-check\">
    <label class=\"form-check-label\">
      <input type=\"checkbox\" class=\"form-check-input\" name='select[]' value='$ff'>
      Check me out
    </label>
  </div>
    </figcaption>";
    echo" </figure>";
  }
  echo "</div>
  <input type=\"submit\" class=\"btn btn-danger btn-block btn-lg mb-5\" name=\"submit\" value='Delete'>
  </form>";
}
?>