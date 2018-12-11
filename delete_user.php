<?php
include('connect.php');

$get_id=$_GET['id'];

//mysqli_query("delete from tb_user where user_id='$get_id'");
header('location:user.php');

$sql = "DELETE FROM tb_user where user_id='$get_id'";
if(mysqli_query($aVar, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($aVar);
}
header('location:user.php');
?>
