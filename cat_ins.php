<?php
include "conn.php";
$cname=$_POST['catname'];
$catdesc=$_POST['cat_description'];	
mysql_query("insert into fastfood_cat values('','$cname','abcd')") or die(mysql_error());
header("location:category.php");
 
?>