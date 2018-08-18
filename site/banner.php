<h2>Banner</h2>
<!-- <h2 class="text-right"><a href="?page=banner&action=add" class="btn btn-success btn-lg">Add New Section</a></h2> -->
<?php
 if($_POST || @$_GET['action'])
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
        $myname = $myfil->getname();
        print_r( $myname);
        print_r ($url);
        }
        catch(Exception $e) {
         echo "Error: " . $e->getMessage();
        }
        // foreach ($file as $fil) {
        //     # code...
        //     print_r($fil);
        //     echo "<br>";
        // }
        // `id`, `banner_name`, `banner_url`, `status`, `username`, `data`
        include_once "models/addclass2.php";
        $bn = new add('banner');
        for($i=0;$i<count($file['name']);$i++)
        {
            $file_no{$i}['banner_name'] =($myname[$i]);
            $file_no{$i}['banner_url'] =$url[$i];
            $file_no{$i}['status'] =1;
            $file_no{$i}['username'] =$_SESSION['user'];
            $file_no[$i]['banner_type'] = $_POST['banner_type'];
            print_r($file_no{$i});
            try{
                $bn->adddata($file_no{$i});
             }catch(Exception $e) {
                echo "Error: " . $e->getMessage();
             }
        }
        echo "<div class=\"alert alert-info\" role=\"alert\">
             Add Sucessful !
            </div>";
      }
    }
    if(isset($_GET['action']) && $_GET['action']=="del")
    {
       $id = $_GET['id'];
       $table = 'banner';
       try{ 
           include "models/delsection.php";
           $del = new del($table);
           $data_id = $del->getdatabyidandcolum($id,'id');
           $filesTodalete = $data_id[0]['banner_url'];
           if($del->deldatabyidandcolum($id,'id'))
           {
               echo "<script>alert('del Sucessful');</script>";
           }
           if(file_exists($filesTodalete))
           { 
               unlink($filesTodalete); 
               echo "<div class=\"alert alert-info\" role=\"alert\">
             Delete  Sucessful  from Upload and Daatbse!
            </div>";  
           }
           else{
               throw new Exception("Error Processing file not xist");
           }
          
       } catch(Exception $e) {
          echo "Error: " . $e->getMessage();
      }

    }

 }
 else{
 
    include_once "models/sectiondisplay.php";
    try{
       $pages = new displaysection('banner');
    }catch(Exception $e) {
        $pages = NULL;
       echo "Error: " . $e->getMessage();
    }
     include_once "views/v_banner.php";
 }
?>