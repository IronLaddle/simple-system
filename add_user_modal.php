<div class="modal fade" id="joke" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          
            <h4 class="modal-title" id="myModalLabel"></h4>
        </div>
        <div class="modal-body">
<form  method="post" enctype="multipart/form-data">
<div class="alert alert-info"><strong><center>Add User </center></strong></div>
<hr>

<div class="control-group">
    <label class="control-label" for="inputEmail">FirstName:</label>
    <div class="controls">
        <input type="text" class = "form-control"name="fn" id="inputEmail" placeholder="Firstname">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="inputPassword">LastName:</label>
    <div class="controls">
        <input type="text"  name="ln" class = "form-control" placeholder="Lastname">
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="inputPassword">Username:</label>
    <div class="controls">
        <input type="text" name="un"  class = "form-control" placeholder="Username">
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="inputPassword">Password:</label>
    <div class="controls">
        <input type="password" name="p" class = "form-control"  placeholder="Password">
    </div>
</div>

<div class = "modal-footer">
			 <button name = "go" class="btn btn-primary">Save</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
	
</form>  

<?php
if (isset($_POST['go'])) {    
      $aVar = mysqli_connect('localhost','root','','test');

        $fn = mysqli_real_escape_string($aVar, $_REQUEST['fn']);
        $ln = mysqli_real_escape_string($aVar, $_REQUEST['ln']);
        $un = mysqli_real_escape_string($aVar, $_REQUEST['un']);
        $p  = mysqli_real_escape_string($aVar, $_REQUEST['p']);

        $sql = "INSERT INTO tb_user (firstname,lastname,username,password) VALUES ('$fn','$ln','$un','$p')";

        if(mysqli_query($aVar, $sql)){
         echo "Success";
        } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($aVar);
        }
}
?>
	  
</div>
</div>