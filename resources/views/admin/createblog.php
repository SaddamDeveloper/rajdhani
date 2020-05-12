 <?php
error_reporting(E_ERROR | E_PARSE);
include('config/pdo.php');

if(isset($_POST[sub]))
{
  $q = "select * from blog where  title = '$_POST[title]' and category = '$_POST[category]";
  $stmt = $pdo_conn->prepare($q);
  $stmt->execute();
  $count = $stmt->rowCount();


  if($count == 0)
  {

       if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../images/blog/".$file_name);          


   }
 }


    $now = date('Y-m-d H:i:s');
    $q_insert = "INSERT INTO blog (`title`, `category`, `status`, `contents`, `image`, `created_at`, `updated_at`)  VALUES ('$_POST[title]', '$_POST[category]', '$_POST[status]', '$_POST[contents]', 'images/blog/$file_name', '$now', '$now')";
    //echo $q_insert; exit();
    $stmt1 = $pdo_conn->prepare($q_insert);

     if($stmt1->execute())
    {
      echo "Successfully inserted";
    }else
    {
      echo "Error inserting";
    }
  }
}


 ?>
     
       <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-save"></span>Write Blog
                    <div class="pull-right action-buttons">
                        
                    </div>
                </div>
                <div class="panel-body">
                
                       
                     <div class="row">
                     <form name="myForm" id="frm" method="post" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
                       <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Blog Title:</strong>                             
                                
                                 <input type="text" class="form-control" name="title" id="title" placeholder="Enter Blog Title">
                                
                            </div>
                        </div>
                      
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Blog Category:</strong>
                                <input type="text" class="form-control" name="category" id="category" placeholder="Enter Category">
                            </div>
                        </div>

                           <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Blog Status:</strong>
                                <select class="form-control" name="status" id="statsy">
                                  <option>--Choose Status--</option>
                                  <option value="show">Show</option>
                                  <option value="hide">Hide</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Blog Content:</strong>                             
                                
                                <textarea id="contents" name="contents" rows="10" cols="80">
                                          
                                 </textarea>
                                
                            </div>
                        </div>

                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Feature Image:</strong>                             
                                
                                <input type="file" name="image">
                                
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
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="bower_components/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('contents')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>