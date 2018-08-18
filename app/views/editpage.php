<?php
    include "models/sectiondisplay.php";
    try{
       $section = new displaysection('section');
       $datasection = $section->data;
    }catch(Exception $e) {
       echo "Error: " . $e->getMessage();
    }
    
    $pag_id = $updatedate[0]['page_id'];
    $stat_old = $updatedate[0]['page_status'];
    $stat_op1 = "";
    $stat_op2 = "";
   
    if($stat_old == "active")
    {
        $stat_op1 = "selected";
    }else{
        $stat_op2 = "selected";
    }
?>
<!-- `page_id`, `page_name`, `page_content`, `page_status`, `page_visite`, `section_name`, `page_image`, `page_date` -->
<form action="" method="post" enctype="multipart/form-data">
 <h2 class="h1">Add New page</h2>
 <div class="form-group">
    <label for="page_name">Page Name</label>
    <input type="text" class="form-control" id="page_name"  name="page_name" placeholder="Write Page Name" value="<?php echo $updatedate[0]['page_name'];?>" >
  </div>
  <div class="form-group">
    <label for="page_content">Page Content</label>
    <textarea type="email" class="form-control" id="page_content" name="page_content" placeholder="Write page content">
    <?php  echo $updatedate[0]['page_content']; ?>
    </textarea>
  </div>
  <div class="form-group">
    <label for="page_status">Page Status</label>
    <select class="form-control" id="page_status" name="page_status">
      <option value="active" <?php echo $stat_op1 ;?>>Active</option>
      <option value ="disactive" <?php echo $stat_op2 ;?> >disactive</option>
    </select>
  </div>
  <div class="form-group">
    <label for="section_name">Section Name</label>
    <select class="form-control" id="section_name" name="section">
    <option selected value="active">--- chose section name ---</option>
    <?php 
     
      for($i=0 ; $i<count($datasection) ; $i++)
      {
          $op = $datasection[$i]['section_name'];
          $op_v =$datasection[$i]['section_id'];
          if($op_v == $updatedate[0][section_id])
          {
            echo "<option value='$op_v' selected >$op</option>";
          }
          else
          {
            echo "<option value='$op_v' >$op</option>";
          }
          
      }
    ?>
    </select>
    <div class="form-group mt-2">
    <label for="page_image">Page Image</label>
    <input type="file" class="form-control-file" id="page_image" name="new_image[]" >
    <img src="<?php  echo $updatedate[0]['page_image']; ?>" alt="..." class="img-thumbnail img-fluid">
  </div>
  </div>
  <input type="hidden" name="username" value="<?php echo $_SESSION['user']?>">
  <input type="hidden" name="page_date" value="<?php echo date('d-m-y') ;?>">
  <input type="submit" class="btn btn-outline-info btn-block btn-lg mb-5" name="submit" value="Update">
</form>