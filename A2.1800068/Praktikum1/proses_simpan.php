:  <?php
//  panggil  file  database.php  untuk  koneksi  ke  database 03:  require_once  "config/database.php";
//  jika  tombol  simpan  diklik
 if  (isset($_POST['simpan']))  {
//  ambil  data  hasil  submit  dari  form
$nis    =  mysqli_real_escape_string($db,  trim($_POST['nis']));
$nama   =  mysqli_real_escape_string($db,  trim($_POST['nama']));
$tempat_lahir  =  mysqli_real_escape_string($db,  trim($_POST['tempat_lahir'])); 10:	$tanggal_lahir  =  mysqli_real_escape_string($db,  trim(date('Y-m-d',
strtotime($_POST['tanggal_lahir']))));
$jenis_kelamin  =  mysqli_real_escape_string($db,  trim($_POST['jenis_kelamin'])); 12:	$agama	=  mysqli_real_escape_string($db,  trim($_POST['agama']));
$alamat	=  mysqli_real_escape_string($db,  trim($_POST['alamat'])); 14:	$no_hp	=  mysqli_real_escape_string($db,  trim($_POST['no_hp'])); 15:	$nama_file	=  $_FILES['foto']['name'];
$tmp_file	=  $_FILES['foto']['tmp_name']; 17:	//  Set  path  folder  tempat  menyimpan  filenya 18:	$path	=  "foto/".$nama_file;

//  perintah  query  untuk  menampilkan  nis  dari  tabel  siswa  berdasarkan  nis  dari  hasil  submit form 21:	$query  =  mysqli_query($db,  "SELECT  nis  FROM  tbl_siswa  WHERE  nis='$nis'")
	or  die('Ada  kesalahan  pada  query  tampil  data  nis:  '.mysqli_error($db)); 23:	$rows  =  mysqli_num_rows($query);
	//  jika  nis  sudah  ada 25:	if  ($rows  >  0)  {
	//  tampilkan  pesan  gagal  simpan  data
	header("location:  index.php?alert=4&nis=$nis");
	}
	//  jika  nis  belum  ada 30:	else  {
	//  upload  file
	if(move_uploaded_file($tmp_file,  $path))  { 33:		//  Jika  file  berhasil  diupload,  Lakukan :
	//  perintah  query  untuk  menyimpan  data  ke  tabel  siswa
$insert  =  mysqli_query($db,  "INSERT  INTO  tbl_siswa(nis,nama,tempat_lahir,tanggal_lahir,
jenis_kelamin,agama,alamat,no_hp,foto)
	VALUES('$nis','$nama','$tempat_lahir','$tanggal_lahir', '$jenis_kelamin','$agama','$alamat','$no_hp','$nama_file')")
	or  die('Ada  kesalahan  pada  query  insert  :  '.mysqli_error($db)); 38:	//  cek  query
if  ($insert)  {
	//  jika  berhasil  tampilkan  pesan  berhasil  simpan data 41:	header("location:  index.php?alert=1");
}
}
}
}
 //  tutup  koneksi 47:  mysqli_close($db);
?>
