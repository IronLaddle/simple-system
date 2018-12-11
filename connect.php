<?php
//mysql_select_db('db_project',  mysql_connect('localhost','root','root'))or die(mysql_error());
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "test";

 $conn = new mysqli($servername,$username,$password,$dbname);

 if ($conn -> connect_error) {
 	die(" Connection failed: " . $conn -> connect_error);
 }
 //echo "Connected successfully";

 $aVar = mysqli_connect('localhost','root','','test');
?>


<!--  $servername = "localhost";
 $username = "sendukb1_demo1";
 $password = "q1w2e3r4t%";
 $dbname = "sendukb1_test"; -->