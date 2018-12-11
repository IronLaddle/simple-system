<?php
include('connect.php');

$get_id=$_GET['id'];

//mysqli_query("delete from tb_products where productID='$get_id'");


$sql = "DELETE FROM tb_products where productID='$get_id'";
if(mysqli_query($aVar, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($aVar);
}
header('location:product.php');
?>
