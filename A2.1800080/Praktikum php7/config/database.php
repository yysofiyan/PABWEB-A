<?php
date_default_timezone_set("ASIA/JAKARTA");

$server = "localhost";
$username = "root";
$passwoard = "";
$database = "db_sekolah";

$db = mysqli_connect($server,$username,$passwoard,$database);

 if (!$db){
     die('koneksin database gagal :'.mysqli_connect_error());
 }
 ?>