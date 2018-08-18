<table class="table  table-bordered table-responsive table-striped table-hover mb-5  ">
  <thead class="thead-dark">
    <tr>
    <!-- `id`, `banner_name`, `banner_url`, `status`, `username` -->
      <th scope="col">Id</th>
      <th scope="col">Banner Type</th>
      <th scope="col">Banner urlt</th>
      <th scope="col">Banner Status</th>
      <th scope="col">Created By</th>
      <th scope="col">Created Date</th>
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
    <!-- `id`, `banner_name`, `banner_url`, `status`, `username`, `data` -->
    <th scope='row'><?php echo $pagedata[$i]['id']; ?></th>
        <td><?php echo $pagedata[$i]['banner_type']; ?> </td>
        <td><?php echo  $pagedata[$i]['banner_url'] ;?></td>
        <td><?php echo  $pagedata[$i]['status']; ?></td>
        <td><?php echo  $pagedata[$i]['username']; ?></td>
        <td><?php echo  $pagedata[$i]['data']; ?></td>
        <td class='text-center'>
        <?php $id_page = $pagedata[$i]['id']; ?>
         <a href='?page=banner&action=del&id=<?php echo $id_page; ?>' class='border rounded-circle border-danger' ><i class='fa fa-cut  fa-fw'></i></a>
        </td>
      </tr>
      <?php }?> 
    </tbody>
</table>