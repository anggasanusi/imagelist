<?php
include "config.php";
$row = array();
$user = $_GET['username'];
$data = mysql_query("SELECT * FROM user WHERE username = '$user'");
while($result = mysql_fetch_assoc($data)){
$row[] = $result;
}
echo "{\"profile\":".json_encode($row). "}";
?>