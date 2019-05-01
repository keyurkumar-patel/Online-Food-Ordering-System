<?php
include "conn.php";
$file="";
$path="gallery";
include "upload.php";
$reid=$_POST['Reid'];
mysql_query("insert into real_gallery values('','$file','$reid')");


?>