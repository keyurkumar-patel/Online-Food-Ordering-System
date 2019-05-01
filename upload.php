<?php
if(is_uploaded_file($_FILES['uploadFile']['tmp_name']))
{
$filename = $_FILES['uploadFile']['name'];
$ext = explode('.', $filename);
$ans = $ext[1];
$fname = $ext[0];
$r = mt_rand(); 
$fname = $r.".".$ans;
$file=$path."/".$fname;
move_uploaded_file($_FILES['uploadFile']['tmp_name'], $path."/".$fname) or die("couldnt copy");
}
?>