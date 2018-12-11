<?php include ('header.php');?>
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
<a class="navbar-brand" href="# ">Personal Project</a>
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
<div class="col-md-12">
<h1 class="page-header">
     <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
      Add Financial
    </button>
</h1>
<?php include ('finance_add_modal.php');?>

<div class="hero-unit-table">   
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <div class="alert alert-info">
            <strong><i class="icon-user icon-large"></i>Finance Table</strong>
        </div>
        <thead>
            <tr>
                <th>No</th>
                <th>Bank Name</th>
                <th>Description</th>
                <th>Transaction Date</th>
                <th>Debit (out)</th>
                <th>Credit (in)</th>
               <!--  <th style="text-align:center;">Balance</th> -->
                <!-- <th>Quantity</th> -->
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
    <?php include ('connect.php');
    $query = mysqli_query($aVar,"select * from tb_bank");
    $counter = 1;
    while ($row = mysqli_fetch_array($query)) {
    $id = $row['bank_id'];
                               
    $query1 = mysqli_query($aVar,"SELECT *,SUM(debit) as debt FROM tb_bank ");
    $query2 = mysqli_query($aVar,"SELECT *,SUM(credit) as credt FROM tb_bank ");
    $row1 = mysqli_fetch_array($query2);
    $row2 = mysqli_fetch_array($query1);
    $total=$row1['credt'] - $row2['debt'];

    $rowcount=mysqli_num_rows($query);
    //$query2 = mysqli_query ($aVar,"UPDATE product set quantity = '$total' where productID = '$id'");

    ?>
    <tr class="warning">
    <td width="20"><?php echo $counter ?></td>
     <?php $counter++  ?> 
    <td><?php echo $row['bankName']; ?></td> 
    <td><?php echo $row['description']; ?></td> 
    <td><?php echo $row['trans_date']; ?></td> 
    <td><?php echo $row['debit']; ?></td> 
    <td><?php echo $row['credit']; ?></td> 
    <!-- <td style="text-align:right;"><?php echo number_format($row['price'],2); ?></td>  -->
   <!--  <td style="text-align:center;"><?php echo $total; ?></td> --> 
    <td width="160">
    <a href="#finance_delete<?php echo $id; ?>" role="button"  data-target = "#finance_delete<?php echo $id;?>"data-toggle="modal" class="btn btn-danger">Delete</a>
    <a href="finance_edit.php<?php echo '?id=' . $id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;Edit</a>
    </td>
        <!-- product delete modal -->
<?php include ('finance_delete_modal.php');?>
<!-- end delete modal -->
        </tr>
    <?php } ?>
        </tbody>
        <tr>
        <td bgcolor="#FCFF3F !important" colspan="5" style="text-align:right;"><B>Total</B></td>
        <td bgcolor="#00FF00 !important" style="text-align:center;"><B><?php echo number_format($total,2); ?></B></td> 
        </tr>
    </table>
</div>

<!-- total saving -->
<div class="hero-unit-table">   
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <div class="alert alert-info" style="text-align:center;">
            <strong><i class="icon-user icon-large"></i>Total Saving</strong>
        </div>
        <thead>
            <tr>
                <th style="text-align:center;">Bank Name</th>
                <th style="text-align:center;">Total (Latest)</th>
               <!--  <th style="text-align:center;">Balance</th> -->
                <!-- <th>Quantity</th> -->
            </tr>
        </thead>
        <tbody>
    <?php include ('connect.php');
    $query = mysqli_query($aVar,"select * from tb_bank");
    while ($row = mysqli_fetch_array($query)) {
    $id = $row['bank_id'];
                               
    $q1 = mysqli_query($aVar,"SELECT *,SUM(credit) as credt FROM tb_bank WHERE bankName = 'Cimb Bank'");
    $q2 = mysqli_query($aVar,"SELECT *,SUM(credit) as credt FROM tb_bank WHERE bankName = 'Maybank'");
    $q3 = mysqli_query($aVar,"SELECT *,SUM(credit) as credt FROM tb_bank WHERE bankName = 'Tabung Haji'");
    $q4 = mysqli_query($aVar,"SELECT *,SUM(credit) as credt FROM tb_bank WHERE bankName = 'Bank Islam'");
    $q5 = mysqli_query($aVar,"SELECT *,SUM(credit) as credt FROM tb_bank WHERE bankName = 'EPF'");
    $q11 = mysqli_query($aVar,"SELECT *,SUM(debit) as debt FROM tb_bank WHERE bankName = 'Cimb Bank'");
    $q22 = mysqli_query($aVar,"SELECT *,SUM(debit) as debt FROM tb_bank WHERE bankName = 'Maybank'");
    $q33 = mysqli_query($aVar,"SELECT *,SUM(debit) as debt FROM tb_bank WHERE bankName = 'Tabung Haji'");
    $q44 = mysqli_query($aVar,"SELECT *,SUM(debit) as debt FROM tb_bank WHERE bankName = 'Bank Islam'");
    $q55 = mysqli_query($aVar,"SELECT *,SUM(debit) as debt FROM tb_bank WHERE bankName = 'EPF'");
    $totalC = mysqli_fetch_array($q1);
    $totalM = mysqli_fetch_array($q2);
    $totalT = mysqli_fetch_array($q3);
    $totalB = mysqli_fetch_array($q4);
    $totalE = mysqli_fetch_array($q5);
    $totalC1 = mysqli_fetch_array($q11);
    $totalM2 = mysqli_fetch_array($q22);
    $totalT3 = mysqli_fetch_array($q33);
    $totalB4 = mysqli_fetch_array($q44);
    $totalE5 = mysqli_fetch_array($q55);
    $totalCimb = $totalC['credt'] - $totalC1['debt'];
    $totalMaybank = $totalM['credt'] - $totalM2['debt'];
    $totalTh = $totalT['credt'] - $totalT3['debt'];
    $totalBankIslam = $totalB['credt'] - $totalB4['debt'];
    $totalEpf = $totalE['credt'] - $totalE5['debt'];
    $totalAll = $totalCimb + $totalMaybank + $totalTh + $totalBankIslam+ $totalEpf
    ?>
    <?php } ?>
        </tbody>
        <tr style="text-align:center;">
        <td>Cimb Bank</td>
        <td><?php echo ($totalCimb); ?></td>   
        </tr>
        <tr style="text-align:center;">
        <td>Maybank</td>
        <td><?php echo ($totalMaybank); ?></td>   
        </tr>
        <tr style="text-align:center;">
        <td>Tabung Haji</td>
        <td><?php echo ($totalTh); ?></td>   
        </tr>
        <tr style="text-align:center;">
        <td>Bank Islam</td>
        <td><?php echo ($totalBankIslam); ?></td>   
        </tr>
        <tr style="text-align:center;">
        <td>EPF</td>
        <td><?php echo ($totalEpf); ?></td>   
        </tr>
        <tr style="text-align:center;">
        <td><B>Total</B></td>
        <td ><B><?php echo number_format($totalAll,2); ?></B></td> 
        </tr>
    </table>
</div>
<!-- end saving -->

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
