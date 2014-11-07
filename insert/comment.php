<?php
include "../config.php";
$userid = $_POST['userid'];
$username = $_POST['username'];
$mediaid = $_POST['mediaid'];
$comment = $_POST['comment'];

mysql_query("INSERT INTO comment (user_id, user_username, media_id, comment) VALUES ('$userid', '$username', '$mediaid', '$comment')");
echo '{"status":"success"}';

?>