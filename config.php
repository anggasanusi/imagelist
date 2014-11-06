<?php
$host = "localhost";
$user = "root";
$pass = "internet";
$db   = "test";

$koneksi = mysql_connect($host,$user,$pass) or die ("koneksi ke database gagal") ;
$koneksi_database = mysql_select_db($db,$koneksi);
?>