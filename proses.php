<?php

$_id = $_POST['id'];
$_kode = $_POST['kode'];
$_nama_pasien = $_POST['nama_pasien'];
$_tmp_lahir = $_POST['tmp_lahir'];
$_tgl_lahir = $_POST['tgl_lahir'];
$_email = $_POST['email'];
$_jk = $_POST['jk'];
$_proses = $_POST['proses'];

echo 'Id '. $_id;
echo '</br>Kode : '.$_kode;
echo '<br/>Nama Pasien : '.$_nama_pasien;
echo '<br/>Tempat Lahir : '.$_tmp_lahir;
echo '<br/>Tanggal Lahir : '.$_tgl_lahir;
echo '<br/>Email : '.$_email;
echo '<br/>Gender : '.$_jk;

?>
 <hr>
<p>Untuk selanjutnya silahkan buka</p>
         <a href="BMI_Pasien.php">BMI Pasien</a>