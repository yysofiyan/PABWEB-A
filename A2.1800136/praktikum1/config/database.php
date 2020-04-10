<?php
date_default_timezone_set("ASIA/JAKARTA");
$server="localhost";
$username="id13099867_vettyap";
$password="Indraamd1@@";
$database="id13099867_db_sekolah";

$db=mysqli_connect($server, $username, $password, $database);

if(!$db){

    die('koneksi database gagal :'.mysqli_connect_error());
}
?>