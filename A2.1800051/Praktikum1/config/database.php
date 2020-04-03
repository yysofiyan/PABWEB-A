<?php

date_default_timezone_set("ASIA/JAKARTA");

$server    ="localhost";
$username  ="id13066305_admin";
$password  ="fikri1933";
$database  ="id13066305_db_sekolah";

$db = mysqli_connect ($server,$username,$password,$database);

if(!$db) {
    die('Koneksi database gagal : ' .mysqli_connect_error());
}

?>