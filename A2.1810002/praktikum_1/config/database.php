<?php
date_default_timezone_set("ASIA/JAKARTA");

$server         = "localhost";
$username       = "id13169237_dianamega";
$password       = "Megalistina_12";
$database       = "id13169237_diana_db_sekolah";

$db = mysqli_connect($server, $username, $password, $database);

if (!$db) {
    die('koneksi database gagal :'.mysqli_connect_error());
}
?>