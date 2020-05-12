<?php
error_reporting(E_ERROR | E_PARSE);
include('config/pdo.php');
// $q = "select * from booking order by booking_date DESC";
// $stmt = $pdo_conn->prepare($q);
// $stmt->execute();
// $result = $stmt->fetchAll();

?>
<div class="row">
  <a href="index.php?pg=createblog"><button class="btn btn-info pull-right">Add Blog</button></a>
</div>
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list"></span>Blog Details
                    
                </div>
                <div class="panel-body table-responsive">

    <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
                <thead>               
                <tr>
                  <th>slno</th>
                  <th>Blog Title</th>
                  <th>Blog Category</th>
                  <th>Blog Content</th>
                  <th>Image</th>                 
                  <th>Status</th> 
                  <th>Created Date</th> 
                  <th>Updated Date</th> 
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                   <?php
                   $q = "select * from blog order by created_at DESC";
                    $stmt = $pdo_conn->prepare($q);
                    $stmt->execute();
                    $result = $stmt->fetchAll();
                      if(!empty($result)) { 
                      $i=0;
                      foreach($result as $row) {
                  ?>
                    <tr>
                      <td><?php echo ++$i; ?></td>
                      <td><?php echo $row[title]; ?></td>
                      <td><?php echo $row[category]; ?></td>
                      <td><?php echo strlen($row[contents]) >= 100 ?  
substr($row[contents], 0, 99) .'....' : 
$row[contents]; ?></td>
                      <td><img src="<?php echo "../".$row[image];?>" height="100" width="100"> </td>
                      
                      <td><?php echo $row[status]; ?></td>
                      <td><?php echo $row[created_at]; ?></td>
                      <td><?php echo $row[updated_at]; ?></td>
                    
                      <td><a href="index.php?pg=booking_detail&id=<?php echo $row[id]; ?>"><button class="btn btn-primary btn-xs">View Details</button></a></td>
                    </tr>
                  <?php
                      }
                    }
                  ?>
                </tbody>
                <tfoot>
                <tr>
                  
                </tr>
                </tfoot>
              </table>
          
                </div>
                <div class="panel-footer">
                    <div class="row">
 
                    </div>
                </div>
            </div>
        </div> 
