<?php
include "../config.php";
$name = $_POST['name'];
$photo = $_POST['photo'];
$username = $_POST['username'];
mysql_query("UPDATE user SET name = '$name', photo = '$photo' WHERE username = '$username'");
echo '{"status":"success"}';
?>