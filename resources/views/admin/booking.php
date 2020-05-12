<?php
error_reporting(E_ERROR | E_PARSE);
include('config/pdo.php');
$q = "select * from booking order by booking_date DESC";
$stmt = $pdo_conn->prepare($q);
$stmt->execute();
$result = $stmt->fetchAll();

?>

        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list"></span>Booking Details
                    
                </div>
                <div class="panel-body table-responsive">

    <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
                <thead>               
                <tr>
                  <th>slno</th>
                  <th>Patient Name</th>
                  <th>Patient Mobile</th>
                  <th>Test Code</th>
                  <th>Test Name</th>                 
                  <th>Prescription</th> 
                  <th>Booking Date</th> 
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                      if(!empty($result)) { 
                      $i=0;
                      foreach($result as $row) {
                  ?>
                    <tr>
                      <td><?php echo ++$i; ?></td>
                      <td><?php echo $row[patient_name]; ?></td>
                      <td><?php echo $row[mobile]; ?></td>
                      <td><?php echo $row[test_code]; ?></td>
                      <td><?php echo $row[test_name]; ?></td>
                      <td><a href="<?php echo "../".$row[pres]; ?>"><img src="<?php echo "../".$row[pres]; ?>" height="50" width="50"></a></td>
                      <td><?php echo $row[booking_date]; ?></td>
                    
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
