<?php 
require_once " config/database.php";
if (isset($_GET['nis'])){
$nis = $_GET['nis'];
$query = mysql_query($db, "SELECT foto FROM tbl_siswa WHERE nis= '$nis'")
or die ('ada kesalahan pada query tampil data foto :'.mysql_error($db));
$data = mysql_fetch_assoc($query);
$foto = $data['foto'];
$hapus_file = unlink("foto/$foto");
if ($hapus_file){
	$delete = mysql_query($db,"DELETE FROM tbl_siswa WHERE nis='$nis'") or die ('ada kesalahan pada query delete :'.mysql_error($db));
	if ($delete){
		header("location: index.php?alert=3");
		}
	}
}
mysql_close($db);
?>