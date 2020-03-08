<?php
//  panggil  file  database.php  untuk  koneksi  ke  database 03:  require_once  "config/database.php";
 //  jika  tombol  simpan  diklik 05:  if  (isset($_POST['simpan']))  {
	if  (isset($_POST['nis']))  {
//  ambil  data  hasil  submit  dari  form
	$nis	=  mysqli_real_escape_string($db,  trim($_POST['nis'])); 09:	$nama	=  mysqli_real_escape_string($db, trim($_POST['nama']));
	$tempat_lahir    =  mysqli_real_escape_string($db,  trim($_POST['tempat_lahir'])); 11:	$tanggal_lahir  =  mysqli_real_escape_string($db,  trim(date('Y-m-d',
strtotime($_POST['tanggal_lahir']))));
	$jenis_kelamin  =  mysqli_real_escape_string($db,  trim($_POST['jenis_kelamin'])); 13:	$agama	=  mysqli_real_escape_string($db,  trim($_POST['agama']));
	$alamat	=  mysqli_real_escape_string($db, trim($_POST['alamat'])); 15:	$no_hp	=  mysqli_real_escape_string($db,  trim($_POST['no_hp'])); 16:	$nama_file	=  $_FILES['foto']['name'];
	$tmp_file	= $_FILES['foto']['tmp_name']; 18:	//  Set  path  folder  tempat  menyimpan  filenya 19:	$path	=  "foto/".$nama_file;

	//  jika  foto  tidak  diubah 22:	if  (empty($nama_file))  {
	//  perintah  query  untuk  mengubah  data  pada  tabel  siswa
	$update  =  mysqli_query($db,  "UPDATE  tbl_siswa  SET  nama	=  '$nama',
	tempat_lahir	=  '$tempat_lahir',
	tanggal_lahir  =  '$tanggal_lahir',
	jenis_kelamin  =  '$jenis_kelamin',
	agama	=  '$agama',
	alamat	=  '$alamat',
	no_hp	=  '$no_hp'
	WHERE  nis	=  '$nis'")
		or  die('Ada  kesalahan  pada  query  update  :  '.mysqli_error($db)); 33:	//  cek  query
	if  ($update)  {
	//  jika  berhasil  tampilkan  pesan  berhasil  ubah  data 36:	header("location:  index.php?alert=2");
	}
	}
	//  jika  foto  diubah 40:	else  {
	//  upload  file
	if(move_uploaded_file($tmp_file,  $path))  { 43:		//  Jika  file  berhasil  diupload,  Lakukan :
	//  perintah  query  untuk  mengubah  data  pada  tabel  siswa
	$update  =  mysqli_query($db,  "UPDATE  tbl_siswa  SET  nama	=  '$nama',
	tempat_lahir	=  '$tempat_lahir',
	tanggal_lahir  =  '$tanggal_lahir',
	jenis_kelamin  =  '$jenis_kelamin',
	agama	=  '$agama',
	alamat	=  '$alamat',
	no_hp	=  '$no_hp',
	foto	=  '$nama_file'
	WHERE  nis	=  '$nis'")
		or  die('Ada  kesalahan  pada  query  update  :  '.mysqli_error($db)); 55:	//  cek  query
	if  ($update)  {
	//  jika  berhasil  tampilkan  pesan  berhasil  ubah data 58:	header("location:  index.php?alert=2");
	}
}
}
}
}
//  tutup  koneksi
 mysqli_close($db);
  ?>
