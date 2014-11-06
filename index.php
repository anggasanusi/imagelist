<?php
include "config.php";
$row = array();
$data = mysql_query("SELECT title, urlgambar FROM media ORDER BY id ASC LIMIT 1,3");
while($result = mysql_fetch_assoc($data)){
$row[] = $result;
}
echo "{\"user\":".json_encode($row). ",";
echo "\"media\":".json_encode($row). ",";
echo "\"comment\":".json_encode($row). "}";
?>