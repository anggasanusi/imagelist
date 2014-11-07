<?php
include "../config.php";
$username = $_POST['username'];
$name = $_POST['name'];
$socialid = $_POST['socialid'];
$check = mysql_query("SELECT * FROM user WHERE username = '$username'");
$isexist = mysql_num_rows($check);
if ($isexist > 0)
{
echo '{"status":"Username Not Available. "}';
}
else
{
mysql_query("INSERT INTO user (username, name, socialid) VALUES ('$username', '$name', '$socialid')");
echo '{"status":"Registration Successfull"}';
}
?>