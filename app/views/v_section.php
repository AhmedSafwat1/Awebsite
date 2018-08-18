<!-- 
     echo "
        
        ";
     }
 -->


<!-- / table -->
<table class="table  table-bordered table-responsive table-striped table-hover mb-5  ">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Section Name</th>
      <th scope="col">Status</th>
      <th scope="col">Location</th>
      <th scope="col">Section Desc</th>
      <th scope="col">Date</th>
      <th scope="col">Created By</th>
      <th scope="col pd-3">Action </th>
    </tr>
  </thead>
  <tbody>
    <?php
     
      if (@$section == FALSE)
      {
        exit();
      }
      $sectiondata = $section->data;
      for ($i = 0; $i < count($sectiondata); $i++) {
       
 
    ?>
    <th scope='row'><?php echo $sectiondata[$i]['section_id']; ?></th>
        <td><?php echo $sectiondata[$i]['section_name']; ?> </td>
        <td><?php echo $sectiondata[$i]['section_status'] ;?></td>
        <td><?php echo  $sectiondata[$i]['section_location']; ?></td>
        <td><?php echo $sectiondata[$i]['section_desc'] ;?> </td>
        <td><?php echo $sectiondata[$i]['section_data']; ?></td>
        <td><?php echo $sectiondata[$i]['username']; ?></td>
        <td>
        <?php $id_sec = $sectiondata[$i]['section_id']; ?>
         <a href='?page=secttion&action=edit&id=<?php echo $id_sec; ?>' class='border rounded-circle border-info' ><i class='fa fa-edit  fa-fw'></i></a>
         <a href='?page=secttion&action=del&id=<?php echo $id_sec; ?>' class='border rounded-circle border-danger' ><i class='fa fa-cut  fa-fw'></i></a>
        </td>
      </tr>
      <?php }?>
    <!-- `section_id`, `section_name`, `section_status`, `section_location`, `section_desc`, `section_data`, `username` -->
    </tbody>
</table>
