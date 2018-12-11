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
<div class="col-md-12">
	
	<div class="hero-unit-table">   
		<div class="charts_container">
            <div class="chart_container">
                <div class="alert alert-info">Financial Chart</div>  
                <!-- <canvas id="chartCanvas1" width="1100" height="400">
                    Your web-browser does not support the HTML 5 canvas element.
                </canvas> -->

                <!-- Monthly Report -->
            <div class="hero-unit-table">   
             <!--    <table class="table table-striped table-bordered table-hover" id="dataTables-example"> -->
                <table class="table table-striped table-bordered table-hover">
                    <div class="alert alert-info" style="text-align:center;">
                        <strong><i class="icon-user icon-large"></i>Monthly Report</strong>
                    </div>
                    <thead>
                        <tr>
                            <th style="text-align:center;">Month</th>
                            <th style="text-align:center;">Total Income</th>
                            <th style="text-align:center;">Total Expenses</th>
                            <th style="text-align:center;">Total Net Asset</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php include ('connect.php');
                $query = mysqli_query($aVar,"select * from tb_bank");
                while ($row = mysqli_fetch_array($query)) {
                $id = $row['bank_id'];
                                           
                $q1 = mysqli_query($aVar,"SELECT SUM(credit) as credt FROM tb_bank WHERE bankName != 'EPF' and month = '1'");
                $q2 = mysqli_query($aVar,"SELECT SUM(credit) as credt FROM tb_bank WHERE bankName != 'EPF' and month = '2'");
                $q3 = mysqli_query($aVar,"SELECT SUM(credit) as credt FROM tb_bank WHERE bankName != 'EPF' and month = '3'");
                $q4 = mysqli_query($aVar,"SELECT SUM(credit) as credt FROM tb_bank WHERE bankName != 'EPF' and month = '4'");
                $q5 = mysqli_query($aVar,"SELECT SUM(credit) as credt FROM tb_bank WHERE bankName != 'EPF' and month = '5'");
                $q6 = mysqli_query($aVar,"SELECT SUM(credit) as credt FROM tb_bank WHERE bankName != 'EPF' and month = '6'");
                $q7 = mysqli_query($aVar,"SELECT SUM(credit) as credt FROM tb_bank WHERE bankName != 'EPF' and month = '7'");
                $q8 = mysqli_query($aVar,"SELECT SUM(credit) as credt FROM tb_bank WHERE bankName != 'EPF' and month = '8'");
                $q9 = mysqli_query($aVar,"SELECT SUM(credit) as credt FROM tb_bank WHERE bankName != 'EPF' and month = '9'");
                $q10 = mysqli_query($aVar,"SELECT SUM(credit) as credt FROM tb_bank WHERE bankName != 'EPF' and month = '10'");
                $q11 = mysqli_query($aVar,"SELECT SUM(credit) as credt FROM tb_bank WHERE bankName != 'EPF' and month = '11'");
                $q12 = mysqli_query($aVar,"SELECT SUM(credit) as credt FROM tb_bank WHERE bankName != 'EPF' and month = '12'");

                $u1 = mysqli_query($aVar,"SELECT SUM(debit) as debt FROM tb_bank WHERE month = '1'");
                $u2 = mysqli_query($aVar,"SELECT SUM(debit) as debt FROM tb_bank WHERE month = '2'");
                $u3 = mysqli_query($aVar,"SELECT SUM(debit) as debt FROM tb_bank WHERE month = '3'");
                $u4 = mysqli_query($aVar,"SELECT SUM(debit) as debt FROM tb_bank WHERE month = '4'");
                $u5 = mysqli_query($aVar,"SELECT SUM(debit) as debt FROM tb_bank WHERE month = '5'");
                $u6 = mysqli_query($aVar,"SELECT SUM(debit) as debt FROM tb_bank WHERE month = '6'");
                $u7 = mysqli_query($aVar,"SELECT SUM(debit) as debt FROM tb_bank WHERE month = '7'");
                $u8 = mysqli_query($aVar,"SELECT SUM(debit) as debt FROM tb_bank WHERE month = '8'");
                $u9 = mysqli_query($aVar,"SELECT SUM(debit) as debt FROM tb_bank WHERE month = '9'");
                $u10 = mysqli_query($aVar,"SELECT SUM(debit) as debt FROM tb_bank WHERE month = '10'");
                $u11 = mysqli_query($aVar,"SELECT SUM(debit) as debt FROM tb_bank WHERE month = '11'");
                $u12 = mysqli_query($aVar,"SELECT SUM(debit) as debt FROM tb_bank WHERE month = '12'");

                $epf = mysqli_query($aVar,"SELECT SUM(credit) as credt from tb_bank where bankName = 'EPF'");
                
                $total1 = mysqli_fetch_array($q1);
                $total2 = mysqli_fetch_array($q2);
                $total3 = mysqli_fetch_array($q3);
                $total4 = mysqli_fetch_array($q4);
                $total5 = mysqli_fetch_array($q5);
                $total6 = mysqli_fetch_array($q6);
                $total7 = mysqli_fetch_array($q7);
                $total8 = mysqli_fetch_array($q8);
                $total9 = mysqli_fetch_array($q9);
                $total10 = mysqli_fetch_array($q10);
                $total11 = mysqli_fetch_array($q11);
                $total12 = mysqli_fetch_array($q12);

                $totalu1 = mysqli_fetch_array($u1);
                $totalu2 = mysqli_fetch_array($u2);
                $totalu3 = mysqli_fetch_array($u3);
                $totalu4 = mysqli_fetch_array($u4);
                $totalu5 = mysqli_fetch_array($u5);
                $totalu6 = mysqli_fetch_array($u6);
                $totalu7 = mysqli_fetch_array($u7);
                $totalu8 = mysqli_fetch_array($u8);
                $totalu9 = mysqli_fetch_array($u9);
                $totalu10 = mysqli_fetch_array($u10);
                $totalu11 = mysqli_fetch_array($u11);
                $totalu12 = mysqli_fetch_array($u12);

                $totalEpf = mysqli_fetch_array($epf);

                $totalCre5 = $total5['credt'];
                $totalCre6 = $total6['credt'];
                $totalCre7 = $total7['credt'];
                $totalCre8 = $total8['credt'];
                $totalCre9 = $total9['credt'];
                $totalCre10 = $total10['credt'];
                $totalCre11 = $total11['credt'];
                $totalCre12 = $total12['credt'];

                $totalKwsp = $totalEpf['credt'];

                $totalDe5 = $totalu5['debt'];
                $totalDe6 = $totalu6['debt'];
                $totalDe7 = $totalu7['debt'];
                $totalDe8 = $totalu8['debt'];
                $totalDe9 = $totalu9['debt'];
                $totalDe10 = $totalu10['debt'];
                $totalDe11 = $totalu11['debt'];
                $totalDe12 = $totalu12['debt'];

                $totalNet5 = $totalCre5-$totalDe5;
                $totalNet6 = $totalCre6-$totalDe6;
                $totalNet7 = $totalCre7-$totalDe7;
                $totalNet8 = $totalCre8-$totalDe8;
                $totalNet9 = $totalCre9-$totalDe9;
                $totalNet10 = $totalCre10-$totalDe10;
                $totalNet11 = $totalCre11-$totalDe11;
                $totalNet12 = $totalCre12-$totalDe12;

                ?>
                <?php } ?>
                    </tbody>
                    <tr style="text-align:center;">
                    <td>May</td>
                     <td><?php echo ($totalCre5); ?></td> 
                     <td><?php echo ($totalDe5); ?></td> 
                     <td><?php echo ($totalNet5); ?></td> 
                    </tr>
                    <tr style="text-align:center;">
                    <td>June</td>
                    <td><?php echo ($totalCre6); ?></td> 
                     <td><?php echo ($totalDe6); ?></td> 
                     <td><?php echo ($totalNet6); ?></td>    
                    </tr>
                    <tr style="text-align:center;">
                    <td>July</td>
                    <td><?php echo ($totalCre7); ?></td> 
                     <td><?php echo ($totalDe7); ?></td>
                     <td><?php echo ($totalNet7); ?></td>    
                    </tr>
                    <tr style="text-align:center;">
                    <td>August</td>
                   <td><?php echo ($totalCre8); ?></td> 
                     <td><?php echo ($totalDe8); ?></td>  
                     <td><?php echo ($totalNet8); ?></td>   
                    </tr>
                    <tr style="text-align:center;">
                    <td>September</td>
                    <td><?php echo ($totalCre9); ?></td> 
                     <td><?php echo ($totalDe9); ?></td> 
                     <td><?php echo ($totalNet9); ?></td>   
                    </tr>
                    <tr style="text-align:center;">
                    <td>October</td>
                    <td><?php echo ($totalCre10); ?></td> 
                     <td><?php echo ($totalDe10); ?></td>  
                     <td><?php echo ($totalNet10); ?></td>  
                    </tr>
                    <tr style="text-align:center;">
                    <td>November</td>
                     <td><?php echo ($totalCre11); ?></td> 
                     <td><?php echo ($totalDe11); ?></td> 
                     <td><?php echo ($totalNet11); ?></td> 
                    </tr>
                    <tr style="text-align:center;">
                    <td>December</td>
                    <td><?php echo ($totalCre12); ?></td> 
                     <td><?php echo ($totalDe12); ?></td> 
                     <td><?php echo ($totalNet12); ?></td>    
                    </tr>
                  <!--   <tr style="text-align:center;">
                    <td><B>Total</B></td>
                    <td ><B><?php echo number_format($total5,2); ?></B></td> 
                    </tr> -->
                </table>
            </div>
            <!-- Monthly Report -->
            <br></br>
              <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
              <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
              <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
              <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>

                <?php include ('connect.php');
                 $query = mysqli_query($aVar,"select * from tb_bank");
                 $chart_data = '';
                 while ($row = mysqli_fetch_array($query)) {
                    $chart_data .= "{month:'".$row["month"]."',debit:".$row["debit"].",credit:".$row["credit"]."},";
                    }
                    $chart_data ;//= substr($chart_data, 0,-2);
                ?>
                <h2 style="text-align:center;">Monthly Bar Chart</h2>
                <div id="chart"></div>

                <!-- <div id="myChart" width="400" height="400"></div> -->
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
<script src="assets/js/jquery-1.10.2.js"></script>
  <!-- Bootstrap Js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Metis Menu Js -->
<script src="assets/js/jquery.metisMenu.js"></script>
 <!-- Morris Chart Js -->
 <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="assets/js/morris/morris.js"></script>
  <!-- Custom Js -->
<script src="assets/js/custom-scripts.js"></script>

<script type="text/javascript">
    Morris.Bar({
        element : 'chart',
        data : [<?php echo $chart_data; ?>],
        xkey : 'month',
        ykeys : ['debit','credit'],
        labels : ['debit','credit'],
        hideHover :'auto',
        stacked : true
    });

</script>

<?php include ('script.php');?>
</body>
</html>
