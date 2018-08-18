<h2>page</h2>
<h2 class="text-right"><a href="?page=page&action=add" class="btn btn-success btn-lg">Add New Section</a></h2>
<?php 

 if($_POST || @$_GET['action'])
 {
    if(isset($_GET['action']) && $_GET['action']=="add")
    {
       include "views/addnewpage.php";
    }
    if(isset($_POST['submit']) && $_POST['submit'] == "Add")
    {
        //`page_id`, `page_name`, `page_content`, `page_status`, `page_visite`, `section_id`, `page_image`, `page_date`, `username`
        include_once "models/uploadfile.php";
        $file = $_FILES['new_image'];
        $allowedext = ['jpg','png','jpeg','jpg'];
        $maxsize = 2048000;
        $uploaddirector ="uplooad/";
        try{
        $myfil = new uplooad($file,$allowedext,$maxsize,$uploaddirector);
        $myfil->upload();
        $url = $myfil->geturl();
        echo "$url";
        }
        catch(Exception $e) {
         echo "Error: " . $e->getMessage();
        }
       
        $newpage["page_name"] = $_POST['page_name'];
        $newpage["page_content"] = $_POST['page_content'];
        $newpage["page_status"] = $_POST['page_status'];
        $newpage["page_visite"] = 10;
        $newpage["section_id"] = $_POST["section"];
        $newpage["page_image"] = $uploaddirector.$url;
        $newpage["page_date"] = $_POST['page_date'];
        $newpage["username"] = $_POST['username'];
        $table = 'pages';
        try{
            include_once "models/addclass.php";
            $add = new add($newpage,$table);
            if($add)
            {
                echo "<script>alert('ADD Sucessful');</script>";
            }
        } catch(Exception $e) {
           echo "Error: " . $e->getMessage();
       }
    }
    if(isset($_GET['action']) && $_GET['action']=="del")
     {
        $id = $_GET['id'];
        $table = 'pages';
        try{ 
            include "models/delsection.php";
            $del = new del($table);
            if($del->deldatabyidandcolum($id,'page_id'))
            {
                echo "<script>alert('del Sucessful');</script>";
            }
        } catch(Exception $e) {
           echo "Error: " . $e->getMessage();
       }

     }
     if(isset($_GET['action']) && $_GET['action']=="edit")
     {
        $id = $_GET['id'];
        $table = 'pages';
        try{
            include_once "models/delsection.php";
            $del = new del($table);
             $updatedate = $del->getdatabyidandcolum($id,'page_id');
        } catch(Exception $e) {
           echo "Error: " . $e->getMessage();
       }
        include_once "views/editpage.php";
    }
    if(isset($_POST['submit']) && $_POST['submit'] == "Update")
    {

        $newpageu["page_name"] = $_POST['page_name'];
        $newpageu["page_content"] = $_POST['page_content'];
        $newpageu["page_status"] = $_POST['page_status'];
        $newpageu["page_visite"] = 10;
        $newpageu["section_id"] = $_POST["section"];
        $newpageu["page_image"] = $_POST['page_image'];
        $newpageu["page_date"] = $_POST['page_date'];
        $newpageu["username"] = $_POST['username'];
        $table = 'pages';
                try{
                    include_once "models/delsection.php";

                    $id = $_GET['id'];
                   $d_l = new del($table);
                   $d_l->updbyidcol_Co($id,$newpageu,'page_id');
               if($d_l)
               {
                   echo "<script>alert('Update Sucessful');</script>";
               }
                }catch(Exception $e) {
                   echo "Error: " . $e->getMessage();
                }
                
    }

 }else{
    include_once "models/sectiondisplay.php";
    try{
       $pages = new displaysection('pages');
    }catch(Exception $e) {
        $pages = NULL;
       echo "Error: " . $e->getMessage();
    }
    include_once "views/v_page.php" ;
}
?>
