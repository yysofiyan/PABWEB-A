<?php

date_default_timezone_set("ASIA/JAKARTA");

$server    ="localhost";
$username  ="id13234976_stansa11";
$password  ="3d8~|8PX8^-j!UdN";
$database  ="id13234976_stansa";

$db = mysqli_connect ($server,$username,$password,$database);

if(!$db) {
    die('Koneksi database gagal : ' .mysqli_connect_error());
}

?>