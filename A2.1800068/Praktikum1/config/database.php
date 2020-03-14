<?php
date_default_timezone_set("ASIA/JAKARTA");
$server="localhost";
$username="id12920684_admin";
$password="12345";
$database="id12920684_db_sekolah";

$db=mysqli_connect($server, $username, $password, $database);

if(!$db){

    die('koneksi database gagal :'.mysqli_connect_error());
}
?>