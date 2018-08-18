<!-- `section_id`, `section_name`, `section_status`, `section_location`, `section_desc`, `section_data`, `username` -->

<form action="" method="post">
 <h2 class="h1">Add New Section</h2>
 <div class="form-group">
    <label for="sectiontitle">Section Title</label>
    <input type="text" class="form-control" id="sectiontitle1"  name="section_title" placeholder="Section Title" >
  </div>
  <div class="form-group">
    <label for="section_stat">Section Status</label>
    <select class="form-control" id="section_stat" name="section_stat">
      <option value="active">Active</option>
      <option value ="disactive">disactive</option>
    </select>
  </div>
  <div class="form-group">
    <label for="section_postion">Section Postion</label>
    <select class="form-control" id="section_postiont" name="section_postion">
      <option value="side">Side</option>
      <option value ="body">Body</option>
    </select>
  </div>
  <div class="form-group">
    <label for="sectiondesc">Section Description</label>
    <textarea type="email" class="form-control" id="sectiondesc" name="sectiondesc" placeholder="Write section Description"></textarea>
  </div>
  <input type="hidden" name="username" value="<?php echo $_SESSION['user']?>">
  <input type="submit" class="btn btn-dark btn-block btn-lg mb-5" name="submit" value="Add">
</form>