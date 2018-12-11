<?php
ob_start();
include('header.php');
$get_id = $_GET['id'];
?>
<body>
<div id="wrapper">
<nav class="navbar navbar-default top-navbar" role="navigation">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.html">Personal Project</a>
</div>

<ul class="nav navbar-top-links navbar-right">

<li class="dropdown"> 
<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
						
Welcome : Administrator
</a>

<!-- /.dropdown-user -->
</li>
<!-- /.dropdown -->
</ul>
</nav>
<!--/. NAV TOP  -->
<?php include ('nav_sidebar.php');?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
<div id="page-inner">
<div class="row">
<div class="col-md-5 well">
<div class="hero-unit-table">   
  <div class="hero-unit-table">   
    <?php include ('connect.php');
    $query = mysqli_query($aVar,"select * from tb_bank where bank_id='$get_id'");
    $row = mysqli_fetch_array($query);
    ?>

    <form class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="alert alert-info"><strong>Edit Finance</strong> </div>
        <hr>
       
        <div class="control-group">
            <label class="control-label" for="inputPassword">Bank Name</label>
            <div class="controls">
                <select type="text" name="bankName" class = "form-control" >
                    <option><?php echo $row['bankName'];  ?></option>
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
            <label class="control-label" for="inputPassword">Description</label>
            <div class="controls">
             <input type="text"  name="description"  class = "form-control" value="<?php echo $row['description']; ?>">
            </div>
        </div>
       
        <div class="control-group">
            <label class="control-label" for="inputPassword">Debit</label>
            <div class="controls">
                <input type="text" name="debit" class = "form-control"  value="<?php echo $row['debit']; ?>">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="inputPassword">Credit</label>
            <div class="controls">
                <input type="text" name="credit"  class = "form-control" value="<?php echo $row['credit']; ?>">
            </div>
        </div>

			<hr/>

        <div class="control-group">
            <div class="controls">

                <button type="submit" name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
				<span><a href = "finance.php" class = "btn btn-danger"> Back</a></span>
            </div>
        </div>
    </form>

    <?php
    if (isset($_POST['update'])) {

        $bankName = $_POST['bankName'];
        $description = $_POST['description'];
        $debit = $_POST['debit'];
        $credit = $_POST['credit'];

    mysqli_query($aVar,"update tb_bank set bankName='$bankName',description='$description',debit='$debit',
    credit='$credit' where bank_id='$get_id'");
    header('location: finance.php');
    }
    ?>


</div>
</div>
</div>
</div>
</div> 


</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
   <?php include ('script.php');?>
</body>
</html>
