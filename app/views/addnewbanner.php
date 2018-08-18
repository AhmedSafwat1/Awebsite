<form action="" method="post"  enctype="multipart/form-data">
 <h2 class="h1">Add New Banner</h2>
 <div class="form-group">
    <label for="page_name">Page Name</label>
    <input type="text" class="form-control" id="page_name"  name="page_name" placeholder="Write Page Name" >
  </div>
  <div class="form-group">
    <label for="page_content">Page Content</label>
    <textarea type="email" class="form-control" id="page_content" name="page_content" placeholder="Write page content"></textarea>
  </div>
  <div class="form-group">
    <label for="page_status">Page Status</label>
    <select class="form-control" id="page_status" name="page_status">
      <option value="active">Active</option>
      <option value ="disactive">disactive</option>
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
          echo "<option value='$op_v' >$op</option>";
      }
    ?>
    </select>
    <div class="form-group mt-2">
    <label for="page_image">Page Image</label>
    <input type="file" class="form-control-file" id="page_image" name="new_image[]" multiple>
  </div>
  </div>
  <input type="hidden" name="username" value="<?php echo $_SESSION['user']?>">
  <input type="hidden" name="page_date" value="<?php echo date('d-m-y') ;?>">
  <input type="submit" class="btn btn-dark btn-block btn-lg mb-5" name="submit" value="Add">
</form>