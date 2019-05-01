<?php
include "conn.php";

$cname=$_POST['ffcatid'];
$sname=$_POST['subcatname'];	

mysql_query("insert into sub_cat values('$cname','','$sname')") or die(mysql_error());
 
?>