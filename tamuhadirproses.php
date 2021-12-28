







<?php
 include "lib/koneksi.php"; 
$tampil = mysql_query("SELECT * FROM scanner ORDER BY id_scanner DESC LIMIT 1") or die(mysql_error());
$datas=mysql_fetch_array($tampil);
$idscan=$datas['qrscan'];

$tampil = mysql_query("SELECT * FROM tbl_tamu WHERE tbl_tamu.qrcode='$idscan'") or die(mysql_error());
$data=mysql_fetch_array($tampil);


$id_acara=$data['id_acara'];
$tamunya=$data['tamunya'];
$nama=$data['nama'];
$alamat=$data['alamat'];
$jenis=$data['jenis'];
$jamdatang=date("h:i:sa");

mysql_query("INSERT INTO tbl_tamuhadir SET
id_acara = '$id_acara',
tamunya = '$tamunya',
nama =   '$nama',
alamat = '$alamat',
jenis = '$jenis', 
jamdatang ='$jamdatang'

") or die(mysql_error());




echo "<meta http-equiv='refresh' content='0; url=user.php'>";
?>
