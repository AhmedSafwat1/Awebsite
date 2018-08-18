<table class="table  table-bordered table-responsive table-striped table-hover mb-5  ">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Page Name</th>
      <th scope="col">Page Content</th>
      <th scope="col">Page Status</th>
      <th scope="col">Section Id</th>
      <th scope="col">Page Image</th>
      <th scope="col">Date</th>
      <th scope="col">Created By</th>
      <th scope="col" class="pr-3">Action </th>
    </tr>
  </thead>
  <tbody>
    <?php
      
      if(is_null($pages))
      {
          exit('not found data');
      }
      $pagedata = $pages->data;
      for ($i = 0; $i < count($pagedata); $i++) {
       
 
    ?>
    <!-- `page_id`, `page_name`, `page_content`, `page_status`, `page_visite`, `section_id`, `page_image`, `page_date`, `username` -->
    <th scope='row'><?php echo $pagedata[$i]['page_id']; ?></th>
        <td><?php echo $pagedata[$i]['page_name']; ?> </td>
        <td><?php echo  $pagedata[$i]['page_content'] ;?></td>
        <td><?php echo  $pagedata[$i]['page_status']; ?></td>
        <td><?php echo  $pagedata[$i]['section_id'] ;?> </td>
        <td><?php echo  $pagedata[$i]['page_image']; ?></td>
        <td><?php echo  $pagedata[$i]['page_date']; ?></td>
        <td><?php echo  $pagedata[$i]['username']; ?></td>
        <td>
        <?php $id_page = $pagedata[$i]['page_id']; ?>
         <a href='?page=page&action=edit&id=<?php echo $id_page; ?>' class='border rounded-circle border-info' ><i class='fa fa-edit  fa-fw'></i></a>
         <a href='?page=page&action=del&id=<?php echo $id_page; ?>' class='border rounded-circle border-danger' ><i class='fa fa-cut  fa-fw'></i></a>
        </td>
      </tr>
      <?php }?> 
    </tbody>
</table>