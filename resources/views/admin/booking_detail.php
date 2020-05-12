<?php
error_reporting(E_ERROR | E_PARSE);
include('config/pdo.php');
$q = "select * from booking where id='$_GET[id]'";
$stmt = $pdo_conn->prepare($q);
$stmt->execute();
$result = $stmt->fetch();
?>
<a href="index.php?pg=booking"><button class="btn btn-info">BACK</button></a>
    <div class="panel panel-success" >
                    <div class="panel-heading">
                        <div class="panel-title">Test</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                            
                              <div class="form-group col-md-12">
                                <label for="inputType" class="col-md-2 control-label"> Test Code</label>
                                <div class="col-md-2">
                             		<?php echo $result[test_code]; ?>
                                  
                                </div>
                                 <label for="inputType" class="col-md-2 control-label">Test</label>
                                <div class="col-md-2">
                                    <?php echo $result[test_name]; ?>
                                </div>
                              </div>
                              
                          <div class="form-group">
                                <label for="inputType" class="col-md-2 control-label">Upload Prescription</label>
                                <div class="col-md-10">

                                    <a href="<?php echo "../".$result[pres]; ?>"><img src="<?php echo "../".$result[pres]; ?>" height='100' width="100" ></a>
                                </div>
                             
                              </div>

                      </div>
                      </div>                
            <div class="panel panel-success" >
                    <div class="panel-heading">
                        <div class="panel-title">Partient Details</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                            
                              <div class="form-group col-md-12">
                                <label for="inputType" class="col-md-2 control-label">Patient Name</label>
                                <div class="col-md-4">
                                   <?php echo $result[patient_name]; ?>
                                </div>
                                 <label for="inputType" class="col-md-2 control-label">Date of Birth</label>
                                <div class="col-md-4">
                                    
                                     <?php echo $result[dob]; ?>
                                </div>
                              </div>
                             <div class="form-group col-md-12">
                                <label for="inputType" class="col-md-2 control-label">Gender</label>
                                <div class="col-md-4">
                                    <?php echo $result[gender]; ?>
                                </div>
                                 <label for="inputType" class="col-md-2 control-label">Mobile No:</label>
                                <div class="col-md-4">
                                    <?php echo $result[mobile]; ?>
                                </div>
                              </div>
                         

                      </div>
                      </div>
                       <div class="panel panel-success" >
                    <div class="panel-heading">
                        <div class="panel-title">Partient Address</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                            
                              <div class="form-group col-md-12">
                                <label for="inputType" class="col-md-2 control-label">Locality</label>
                                <div class="col-md-4">
                                     <?php echo $result[locality]; ?>
                                </div>
                                 <label for="inputType" class="col-md-2 control-label">City Name</label>
                                <div class="col-md-4">
                                     <?php echo $result[city]; ?>
                                </div>
                              </div>
                              <div class="form-group col-md-12">
                                <label for="inputType" class="col-md-2 control-label">House No:</label>
                                <div class="col-md-4">
                                    <?php echo $result[hno]; ?>
                                </div>
                                 <label for="inputType" class="col-md-2 control-label">Street</label>
                                <div class="col-md-4">
                                     <?php echo $result[street]; ?>
                                </div>
                              </div>
                         

                      </div>
                      </div>