<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
                                          
<div class="alert alert-info"><strong><center>Add Finance </center></strong></div>
</div>
<div class="modal-body">
<form  method="post" enctype="multipart/form-data">

<hr>

<div class="control-group">
<label class="control-label" for="inputPassword">Bank Name:</label>
<div class="controls">
    <select type="text" name="bankName" class = "form-control" placeholder="Bank Name" >

        <option></option>
        <option>Cimb Bank</option>
        <option>Maybank</option>
        <option>Tabung Haji</option>
        <option>Bank Islam</option>
        <option>EPF</option>
    </select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="inputPassword">Description:</label>
<div class="controls">
    <input type="text" class = "form-control"  name="description"  placeholder="Description" >
</div>
</div>

<div class="control-group">
<label class="control-label" for="inputPassword">Debit:</label>
<div class="controls">
    <input type="number" name="debit" class = "form-control" placeholder="Money Out">
</div>
</div>

<div class="control-group">
<label class="control-label" for="inputPassword">Credit:</label>
<div class="controls">
    <input type="number" name="credit"  class = "form-control" placeholder="Money In" >
</div>
</div>

<div class = "modal-footer">
 <button name = "go" class="btn btn-primary">Save</button>
 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</form>
</div>
</div>
  
  
<?php include ('connect.php');
if (isset($_POST['go'])) {    
//$aVar = mysqli_connect('localhost','root','','test');

$bankName = mysqli_real_escape_string($aVar, $_REQUEST['bankName']);
$description = mysqli_real_escape_string($aVar, $_REQUEST['description']);
$debit  = mysqli_real_escape_string($aVar, $_REQUEST['debit']);
$credit = mysqli_real_escape_string($aVar, $_REQUEST['credit']);

$mydate = date('Y-m-d H:i:s');
$month = date("m",strtotime($mydate));

$sql = "INSERT INTO tb_bank (bankName,description,debit,credit,trans_date,month) VALUES ('$bankName','$description','$debit','$credit',NOW(),$month)";

if(mysqli_query($aVar, $sql)){
 //echo "Success";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($aVar);
}

//header('location:finance.php');
}
?>  
  
</div>
</div>