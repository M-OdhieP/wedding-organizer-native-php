<?php
$data = $_POST['id_acara'];
$tanggal = date('Ymd');

$nama_gambar = $_FILES['gambar']['name'];
$lokasi_gambar = $_FILES['gambar']['tmp_name'];
$tipe_gambar = $_FILES['gambar']['type'];


$tampil = mysql_query("SELECT * FROM tbl_acara WHERE id_acara=$data") or die(mysql_error());
$dataa=mysql_fetch_array($tampil);
$milik = $dataa['nama'];


if($lokasi_gambar=="") {


mysql_query("INSERT INTO gambar SET
id_acara = '$data',
milik = '$milik',
tanggal = '$tanggal'

") or die(mysql_error());
}
else {
move_uploaded_file($lokasi_gambar, "./gambar/$nama_gambar");
mysql_query("INSERT INTO gambar SET
id_acara = '$data',
milik = '$milik',
gambar = '$nama_gambar',
tanggal = '$tanggal'
") or die(mysql_error());
}

echo "<meta http-equiv='refresh' content='1; url=?tampil=gambar'>";
?>