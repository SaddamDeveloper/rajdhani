<?php
error_reporting(E_ERROR | E_PARSE);
include('config/pdo.php');

 if($_REQUEST[id] == '')
 {
 	if(isset($_POST[sub]))
{




   if(isset($_FILES['deskImg'])){
      $errors= array();
      $file_name = $_FILES['deskImg']['name'];
      $file_size =$_FILES['deskImg']['size'];
      $file_tmp =$_FILES['deskImg']['tmp_name'];
      $file_type=$_FILES['deskImg']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['deskImg']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../images/gallery/".$file_name);
          $q_insert = "INSERT INTO gallery (`name`, `image`) VALUES ('$_POST[name]', 'images/gallery/$file_name')";
	    //echo $q_insert; exit();
	    $stmt_ins = $pdo_conn->prepare($q_insert);
	    $stmt_ins->execute();
      }else{
         print_r($errors);
      }


   }
}

?>


<style>


.displayImg
{
width:200px;
border:solid 1px #dedede;
padding:5px;
margin:5px;
}
#displayImg
{
color:#cc0000;
font-size:12px
}

</style>

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

                     <form name="myForm" id="frm" method="post" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
                       <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Galllery Name:</strong>                             
                                
                                 <input type="text" class="form-control" name="name" id="name" placeholder="Enter Gallery Name">
                                
                            </div>
                        </div>
                      
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Upload your image:</strong>
                                <div id='imgLoading' style='display:none'><img src="images/loading.gif" alt="Uploading...."/></div>
								<div id='ingLoadButton'>
									<input type="file" name="deskImg" id="deskImg" />
								</div>
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
                    <span class="glyphicon glyphicon-list"></span>GAllery Details
                    
                </div>
                <div class="panel-body table-responsive">
		<?php
	  $pdo_statement = $pdo_conn->prepare("SELECT * FROM gallery group by name");
	  $pdo_statement->execute();
	  $result = $pdo_statement->fetchAll();

	 


	?>
           <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
                <thead>               
                <tr>
                  <th>slno</th>
                  <th>Gallery Name</th>
                  <th>No of Image</th>                 
                 
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
							        <td><?php 

							        	 $stmt = $pdo_conn->prepare("SELECT count(*) FROM gallery where name='$row[name]'");
										    $stmt->execute();
										  $res = $stmt->fetch();

										  echo $res[0];

							         ?></td>
							        <td>

							       
							         <a href="index.php?pg=gallery&id=<?php echo $row[name]; ?>"> <button class="btn btn-xs btn-primary" type="submit" name="del">Details</button></a>
							    
							        
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
      </div>
	</div>
	
</div>

<?php

 }else
 {
  if(isset($_POST[del]))
  {
    $q_del = "DELETE from gallery WHERE id='$_POST[image_id]'";
    
    $stmt = $pdo_conn->prepare($q_del);
    $stmt->execute();
  }

 	$q1="select * from gallery where name='$_GET[id]'";

 	$statement = $pdo_conn->prepare($q1);
 	  $statement->execute();
	  $result1 = $statement->fetchAll();
	  ?>
<div class="col-md-12">
	<?php
		if(!empty($result1)) { 
						    $i=0;
						    foreach($result1 as $row1) {
						    	?>
						    	<div class="col-md-3">
						    		<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                      <input type="hidden" name="image_id" value="<?php echo $row1[id]; ?>">
						    			<button name="del" class="btn btn-xs btn-danger" type="submit"><i class="fa fa-trash"></i></button>
						    		</form>
						    		
						    		<img src="<?php echo "../".$row1[image];?>" height="150" width="250" ">

						    	</div>

						    	<?php
						    }
						}

	?>
</div>
<div class="row" style="padding-left:40px;">
  <a href="index.php?pg=gallery"><button class="btn btn-info">Back</button></a>  
</div>

	  <?php

 }

?>

