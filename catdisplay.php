<ul>                        
<?php
$q="select * from fastfood_cat order by cat_id";
$a=$db->fetch_all_array($q);
foreach($a as $k=>$v)
{
echo "<a href=viewcatelog.php?catid={$v['cat_id']}> <li>"."{$v['cat_name']}"."</li></a>";
}
?> 

</ul>
