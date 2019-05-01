<?php
session_start();
include "database.php";
$db=new database('localhost','root','','itcodes_fastfood');
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db("itcodes_fastfood");
$currency = 'Rs'; //Currency symbol or code
$db_username = 'root';
$db_password = '';
$db_name = 'itcodes_fastfood';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
?>