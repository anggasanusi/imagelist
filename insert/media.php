<?php
include "../config.php";
$userid = $_POST['userid'];
$username = $_POST['username'];
$picurl = $_POST['picurl'];
$title = $_POST['title'];
$category = $_POST['category'];
$timeup = date("Y-m-d h:i:sa");
$description = $_POST['description'];

mysql_query("INSERT INTO media (user_id, user_username, picurl, title, category, timeup, description) VALUES ('$userid', '$username', '$picurl', '$title', '$category', '$timeup', '$description')");
echo '{"status":"success"}';

?>