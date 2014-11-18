<?php
header('Content-type: application/json');


include "config.php";
error_reporting(E_ALL ^ E_NOTICE);
$id = $_GET['page'];
$row = array();

$data = mysql_query("SELECT id AS idgambar, user_username, category, title AS judul, picurl AS gambar, timeup AS waktu, description AS deskripsi, gvote AS suka, bvote AS tidaksuka FROM media ORDER BY id DESC LIMIT $id, 3");
while($result = mysql_fetch_assoc($data)){
$row[] = $result;
}
echo $_GET['jsoncallback'] . '(' . json_encode($row) . ');';


?>