<?php
include "config.php";
$id = $_GET['postid'];
$row = array();
$getview = mysql_query("SELECT id, user_username, category, title, description, picurl, timeup, gvote, bvote, view FROM media WHERE id = $id");

$tview = mysql_fetch_assoc($getview);
$tviews = $tview['view'];
$incview = $tviews + 1;
mysql_query("UPDATE media SET view = '$incview' WHERE id = $id");

$data = mysql_query("SELECT id, user_username, category, title, description, picurl, timeup, gvote, bvote, view FROM media WHERE id = $id");

while($result = mysql_fetch_assoc($data)){
$row[] = $result;

}
$data1 = mysql_query("SELECT id, user_id, media_id, user_username, comment FROM comment WHERE media_id = $id ORDER BY id ASC");
while($result1 = mysql_fetch_assoc($data1)){
$row1[] = $result1;
}
echo "{\"detail\":".json_encode($row). ",";
echo "\"comment\":".json_encode($row1). "}";
?>