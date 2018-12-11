<?php
include('connect.php');

$get_id=$_GET['id'];



$sql = "DELETE FROM tb_bank where bank_id='$get_id'";
if(mysqli_query($aVar, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($aVar);
}
header('location:finance.php');
?>
