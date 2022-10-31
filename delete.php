 <?php
 include "class/user.class.php";

$edit = new Record();
$id =$_GET['id'];
$delete = $edit->delete($id);

if ($delete) {
 echo header('location:display.php');
}




?>
