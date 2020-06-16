<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contoh URL</title>
</head>
<body>
    <h1>Contoh URL</h1>
    <p>Base_url()</p>
    <?php echo base_url() ?>
    <br>
    <p>ini adalah gambar pencegahan virus corona</P>
    <img src="<?php echo base_url('assets/corona.png') ?>" 
    width="200px" height="150px">
    <br>2. Site_url()</P>
    <?php echo site_url() ?>
    <br>
    <p><a href="<?php echo site_url('halaman')?>">Ke Halaman View</a></p>
    <br>
    <?php echo anchor('url/detail/1','ke halaman detail') ?>
    <br>
    <?php echo anchor('url/blank','ke halaman blank') ?>
</body>
</html>