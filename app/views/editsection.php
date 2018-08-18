<?php 
 $name_old = $updatedate[0]['section_name'];
 $stat_old = $updatedate[0]['section_status'];
 $pos_old =  $updatedate[0]['section_location'];
 $stat_op1 = "";
 $stat_op2 = "";
 $pos_op1 = "";
 $pos_op2 = "";
 if($stat_old == "active")
 {
     $stat_op1 = "selected";
 }else{
     $stat_op2 = "selected";
 }
 if($pos_old == "Side")
 {
    $pos_op1 = "selected";
 }
 else{
    $pos_op2 = "selected";
 }
 ?>
<!-- `section_id`, `section_name`, `section_status`, `section_location`, `section_desc`, `section_data`, `username` -->
<form action="" method="post">
 <h2 class="h1">Edit Section</h2>
 <div class="form-group">
    <label for="sectiontitle">Section Title</label>
    <input type="text" class="form-control" id="sectiontitle1"  name="section_title" placeholder="Section Title" value = "<?php echo $name_old; ?>">
  </div>
  <div class="form-group">
    <label for="section_stat">Section Status</label>
    <select class="form-control" id="section_stat" name="section_stat">
      <option value="active" <?php echo $stat_op1; ?>>Active</option>
      <option value ="disactive" <?php echo $stat_op2; ?>>disactive</option>
    </select>
  </div>
  <div class="form-group">
    <label for="section_postion">Section Postion</label>
    <select class="form-control" id="section_postiont" name="section_postion">
      <option value="side" <?php echo $pos_op1; ?>>Side</option>
      <option value ="body" <?php echo $pos_op2; ?>>Body</option>
    </select>
  </div>
  <div class="form-group">
    <label for="sectiondesc">Section Description</label>
    <textarea type="email" class="form-control" id="sectiondesc" name="sectiondesc" placeholder="Write section Description">
    <?php echo $updatedate[0]['section_desc'] ;?>
    </textarea>
  </div>
  <input type="hidden" name="username" value="<?php echo $_SESSION['user']?>">
  <input type="submit" class="btn btn-outline-info btn-block btn-lg mb-5" name="submit" value="Update">
</form>