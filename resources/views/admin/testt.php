
<?php
if(!empty($_POST["add_record"])) {
	require_once("db.php");
	$sql = "INSERT INTO posts ( post_title, description, post_at ) VALUES ( :post_title, :description, :post_at )";
	$pdo_statement = $pdo_conn->prepare( $sql );
		
	$result = $pdo_statement->execute( array( ':post_title'=>$_POST['post_title'], ':description'=>$_POST['description'], ':post_at'=>$_POST['post_at'] ) );
	if (!empty($result) ){
	  header('location:index.php');
	}
}
?>


<div style="margin:20px 0px;text-align:right;"><a href="index.php" class="button_link">Back to List</a></div>
<div class="frm-add">
<h1 class="demo-form-heading">Add New Record</h1>
<form name="frmAdd" action="" method="POST">
  <div class="demo-form-row">
	  <label>Title: </label><br>
	  <input type="text" name="post_title" class="demo-form-field" required />
  </div>
  <div class="demo-form-row">
	  <label>Description: </label><br>
	  <textarea name="description" class="demo-form-field" rows="5" required ></textarea>
  </div>
  <div class="demo-form-row">
	  <label>Date: </label><br>
	  <input type="date" name="post_at" class="demo-form-field" required />
  </div>
  <div class="demo-form-row">
	  <input name="add_record" type="submit" value="Add" class="demo-form-submit">
  </div>
  </form>
</div> 


<?php	
	$pdo_statement = $pdo_conn->prepare("SELECT * FROM posts ORDER BY id DESC");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
?>
<div style="text-align:right;margin:20px 0px;"><a href="add.php" class="button_link"><img src="crud-icon/add.png" title="Add New Record" style="vertical-align:bottom;" /> Create</a></div>
<table class="tbl-qa">
  <thead>
	<tr>
	  <th class="table-header" width="20%">Title</th>
	  <th class="table-header" width="40%">Description</th>
	  <th class="table-header" width="20%">Date</th>
	  <th class="table-header" width="5%">Actions</th>
	</tr>
  </thead>
  <tbody id="table-body">
	<?php
	if(!empty($result)) { 
		foreach($result as $row) {
	?>
	  <tr class="table-row">
		<td><?php echo $row["post_title"]; ?></td>
		<td><?php echo $row["description"]; ?></td>
		<td><?php echo $row["post_at"]; ?></td>
		<td><a class="ajax-action-links" href='edit.php?id=<?php echo $row['id']; ?>'><img src="crud-icon/edit.png" title="Edit" /></a> <a class="ajax-action-links" href='delete.php?id=<?php echo $row['id']; ?>'><img src="crud-icon/delete.png" title="Delete" /></a></td>
	  </tr>
    <?php
		}
	}
	?>
  </tbody>
</table>

<?php
if(!empty($_POST["save_record"])) {
	$pdo_statement=$pdo_conn->prepare("update posts set post_title='" . $_POST[ 'post_title' ] . "', description='" . $_POST[ 'description' ]. "', post_at='" . $_POST[ 'post_at' ]. "' where id=" . $_GET["id"]);
	$result = $pdo_statement->execute();
	if($result) {
		header('location:index.php');
	}
}
$pdo_statement = $pdo_conn->prepare("SELECT * FROM posts where id=" . $_GET["id"]);
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
?>

<?php
$pdo_statement=$pdo_conn->prepare("delete from posts where id=" . $_GET['id']);
$pdo_statement->execute();
header('location:index.php');
?>