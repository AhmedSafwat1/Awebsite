<p>
    secttion 
</p>
<h2 class="text-right"><a href="?page=secttion&action=add" class="btn btn-success btn-lg">Add New Section</a></h2>
<?php
include_once "./include/autoloader.php";
 if($_POST || @$_GET['action'])
 {
     if(isset($_GET['action']) && $_GET['action']=="add")
     {
        include "views/addnewsection.php";
     }
     if(isset($_POST['submit']) && $_POST['submit'] == "Add")
     {
        //  `section_id`, `section_name`, `section_status`, `section_location`, `section_desc`, `section_data`, `username`
         $newsection["section_name"] = $_POST['section_title'];
         $newsection["section_status"] = $_POST['section_stat'];
         $newsection["section_location"] = $_POST['section_postion'];
         $newsection["section_desc"] = $_POST['sectiondesc'];
         $newsection["username"] = $_POST['username'];
         $table = 'section';
         try{
             //include "models/addclass.php";
             $add = new add($newsection,$table);
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
        $table = 'section';
        try{
            include "models/delsection.php";
            $del = new del($table);
            if($del->deldatabyid($id))
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
        $table = 'section';
        try{
            include "models/delsection.php";
            $del = new del($table);
            $updatedate = $del->getdatabyid($id);
        } catch(Exception $e) {
           echo "Error: " . $e->getMessage();
       }
        include "views/editsection.php";
        // try{
           
        //     }
        // } catch(Exception $e) {
        //    echo "Error: " . $e->getMessage();
       //}

     }
     if(isset($_POST['submit']) && $_POST['submit'] == "Update")
     {
                 //  `section_id`, `section_name`, `section_status`, `section_location`, `section_desc`, `section_data`, `username`

                 $newsection["section_name"] = $_POST['section_title'];
                 $newsection["section_status"] = $_POST['section_stat'];
                 $newsection["section_location"] = $_POST['section_postion'];
                 $newsection["section_desc"] = $_POST['sectiondesc'];
                 $newsection["username"] = $_POST['username'];
                 $table2 = 'section';
                 try{
                    $d_l = $del;
                    $d_l->updbyid($id,$newsection);
                if($d_l)
                {
                    echo "<script>alert('Update Sucessful');</script>";
                }
                 }catch(Exception $e) {
                    echo "Error: " . $e->getMessage();
                 }
                 
     }

 }
 else{
     include "models/sectiondisplay.php";
     try{
        $section = new displaysection('section');
        
     }catch(Exception $e) {
        echo "Error: " . $e->getMessage();
     }
     include "views/v_section.php";
 }
?>
