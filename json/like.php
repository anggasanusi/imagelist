<?php
include "config.php";
$id = $_GET['id'];
$getlike = mysql_query("SELECT * FROM media WHERE id = $id");

$tlike = mysql_fetch_assoc($getlike);
$tlikes = $tlike['gvote'];
$inclike = $tlikes + 1;
mysql_query("UPDATE media SET gvote = '$inclike' WHERE id = $id");

?>