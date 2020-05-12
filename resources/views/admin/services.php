 <?php
error_reporting(E_ERROR | E_PARSE);
include('config/pdo.php');

if(isset($_POST[sub]))
{
  $q = "select * from services where  name = '$_POST[name]' and level='$_POST[level]' and parent='$_POST[parent]'";
  //echo $q; exit;
  $stmt = $pdo_conn->prepare($q);
  $stmt->execute();
  $count = $stmt->rowCount();
//echo $count;exit;

  if($count == 0)
  {

    $q_insert = "INSERT INTO services (`name`, `level`, `parent`, `pgname`, `link`) VALUES ('$_POST[name]', '$_POST[level]', '$_POST[parent]', 'NULL', 'NULL')";

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
       <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-save"></span>Enter service Details
                    <div class="pull-right action-buttons">
                        
                    </div>
                </div>
                <div class="panel-body">
                
                       
                     <div class="row">
                     <form name="myForm" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                       <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Service Name:</strong>                             
                                
                                 <input type="text" class="form-control" name="name" id="name" placeholder="Enter Service name">
                                
                            </div>
                        </div>
                      
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                              <strong>Level:</strong>

                              <select name="level" class="form-control" id="level">
                                      <option value="1">level1</option>
                                      <option value="2">level2</option>
                              </select>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Parent:</strong>
                                <input type="text" class="form-control" name="parent" id="parent" placeholder="Enter parent">
                            </div>
                         </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                              <strong>Page:</strong>

                              <select name="pgname" class="form-control" id="pgname">
                                      
                                        <li>
                                <a href=<?php echo strtolower($r3[pgname]).'.php' ?>><?php echo $r3[pgname]; ?></a>
                            </li>
                                     

    </ul>
 </li>
                                   </li>
                                      <!-- <option value="1">page1</option>
                                      <option value="2">page2</option> -->
                              </select>

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

        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list"></span>Services Details
                    
                </div>
                <div class="panel-body table-responsive">
  <?php 
  $limit= 10;

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
  $start_from = ($page-1) * $limit; 
  $pdo_statement = $pdo_conn->prepare("SELECT * FROM services ORDER BY id DESC LIMIT $start_from, $limit");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
?>
        <?php
$pdo_statement=$pdo_conn->prepare("delete from services where id=" . $_POST['del_id']);
$pdo_statement->execute();
?>
               <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
                <thead>               
                <tr>
                  <th>Slno</th>
                  <th>Service Name</th>
                  <th>Level</th> 
                  <th>Parent</th>
                  <th>Page</th>                
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
    <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["level"]; ?></td>
        <td><?php echo $row["parent"]; ?></td>
        <td><?php echo $row["pgname"]; ?></td>
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
                    $sql = "SELECT COUNT(id) FROM services"; 
                    
                    $pdo_statement1 = $pdo_conn->prepare($sql); 
                    $pdo_statement1->execute();
                    $result1 = $pdo_statement1->fetch(); 
                
                    $total_records = $result1[0]; 
                    $total_pages = ceil($total_records / $limit);

                    $pagLink = "<div class='pagination'>";  
                    for ($i=1; $i<=$total_pages; $i++) {  
                                 $pagLink .= "<a href='index.php?pg=services&page=".$i."'>".$i.">></a>";  
                    };  
                    echo $pagLink . "</div>"; 
                  ?>
                    </div>
                </div>
            </div>
        </div> 
