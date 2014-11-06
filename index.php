<?php
include "config.php";
error_reporting(E_ALL ^ E_NOTICE);
$id = $_GET['page'];
$row = array();
if($id == '')
{
$data = mysql_query("SELECT id, user_username, category, title, picurl, timeup, gvote, bvote FROM media ORDER BY id ASC LIMIT 0,3");
while($result = mysql_fetch_assoc($data)){
$row[] = $result;
}
echo "{\"post\":".json_encode($row). "}";
}
else
{
$data = mysql_query("SELECT id, user_username, category, title, picurl, timeup, gvote, bvote FROM media ORDER BY id ASC LIMIT $id, 3");
while($result = mysql_fetch_assoc($data)){
$row[] = $result;
}
echo "{\"post\":".json_encode($row). "}";
}
?>