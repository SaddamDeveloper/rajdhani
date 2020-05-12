 <?php
error_reporting(E_ERROR | E_PARSE);
include('config/pdo.php');

if(isset($_POST[sub]))
{
  $q = "select * from test where  test_name = '$_POST[test_name]' and test_code='$_POST[test_code]'";
  $stmt = $pdo_conn->prepare($q);
  $stmt->execute();
  $count = $stmt->rowCount();
//echo $count;exit;

  if($count == 0)
  {

    $q_insert = "INSERT INTO test (`test_code`, `test_name`) VALUES ('$_POST[test_code]', '$_POST[test]')";
    //echo $q_insert; exit();
    $stmt_ins = $pdo_conn->prepare($q_insert);
   
    
    if($stmt_ins->execute())
    {
      echo "Successfully inserted";
    }else
    {
      echo "Error inserting";
    }
  }else{
    echo "Data already exists";
  }
}

 ?>


 <div class="row">
       <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-save"></span>Enter Test Details
                    <div class="pull-right action-buttons">
                        
                    </div>
                </div>
                <div class="panel-body">
                
                       
                     <div class="row">
                     <form name="myForm" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                       <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Test Code:</strong>                             
                                
                                 <input type="text" class="form-control" name="test_code" id="test_code" placeholder="Enter Your Test">
                                
                            </div>
                        </div>
                      
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Test Name:</strong>
                                <input type="text" class="form-control" name="test" id="test" placeholder="Enter Your Test Name">
                            </div>
                        </div>

                      <div class="col-xs-12 col-sm-12 col-md-12 text-center" id="form_sub">
                              <button type="submit" name="sub" class="btn btn-primary btn-xs">Submit</button>
                      </div>
                       
                     </form>
                     

                    
                   

                </div>
                <div class="panel-footer">
                    <div class="row">
                
                    </div>
                </div>
            </div>
        </div> 
</div>

        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list"></span>Test Details
                    
                </div>
                <div class="panel-body table-responsive">
  <?php 
  $limit= 10;

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
  $start_from = ($page-1) * $limit; 
  $pdo_statement = $pdo_conn->prepare("SELECT * FROM test ORDER BY id DESC LIMIT $start_from, $limit");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
?>
        <?php
$pdo_statement=$pdo_conn->prepare("delete from test where id=" . $_POST['del_id']);
$pdo_statement->execute();
?>
               <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
                <thead>               
                <tr>
                  <th>slno</th>
                  <th>Test Code</th>
                  <th>Test Name</th>                 
                 
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
  if(!empty($result)) { 
    $i=0;
    foreach($result as $row) {
  ?>
    <tr class="table-row">
    <td><?php echo ++$i;?></td>
    <td><?php echo $row["test_code"]; ?></td>
        <td><?php echo $row["test_name"]; ?></td>
        <td>

        <form method="post">
          <input type="hidden" name="del_id" id="del_id" value="<?php echo $row['id'];?>">
          <button class="btn btn-xs btn-primary" type="submit" name="del">Delete</button>
        </form>
        
        </td>
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
                <?php  
                    $sql = "SELECT COUNT(id) FROM test"; 
                    
                    $pdo_statement1 = $pdo_conn->prepare($sql); 
                    $pdo_statement1->execute();
                    $result1 = $pdo_statement1->fetch(); 
                
                    $total_records = $result1[0]; 
                    $total_pages = ceil($total_records / $limit);

                    $pagLink = "<div class='pagination'>";  
                    for ($i=1; $i<=$total_pages; $i++) {  
                                 $pagLink .= "<a href='index.php?pg=test&page=".$i."'>".$i.">></a>";  
                    };  
                    echo $pagLink . "</div>";  
                  ?>
                    </div>
                </div>
            </div>
        </div> 
