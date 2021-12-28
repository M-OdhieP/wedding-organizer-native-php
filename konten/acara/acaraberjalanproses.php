<?php
$acara = mysql_query("SELECT * FROM tbl_acara WHERE id_acara='$_GET[id]'");
$data=mysql_fetch_array($acara);

$id_acara= $data['id_acara'];
$nama_acara= $data['nama_acara'];
$nama= $data['nama'];
$tanggal= $data['tanggal'];
$tempat= $data['tempat'];

mysql_query("INSERT INTO acara_on SET

id_acara = '$id_acara',
nama_acara = '$nama_acara',
nama = '$nama',
tanggal = '$tanggal',
tempat = '$tempat'



") or die(mysql_error());



echo "<meta http-equiv='refresh' content='0; url=./user.php'>";
?>