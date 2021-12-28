
<?php
 include "lib/koneksi.php"; 
$tampil = mysql_query("SELECT * FROM acara_on ORDER BY id_berjalan DESC LIMIT 1") or die(mysql_error());
while($dataa=mysql_fetch_array($tampil)) {

$id_acaraa = $dataa ['id_acara']; }

$tampil = mysql_query("SELECT * FROM tbl_tamu WHERE tbl_tamu.id_acara='$id_acaraa'") or die(mysql_error());
$data=mysql_fetch_array($tampil);

$jenis = $_POST['jenis'];
$id_acara=$data['id_acara'];
$tamunya=$data['tamunya'];
$jamdatang=date("h:i:sa");

mysql_query("INSERT INTO tbl_tamuhadir SET
id_acara = '$id_acara',
tamunya = '$tamunya',
nama = '$_POST[nama]',
alamat = '$_POST[alamat]',
jenis = '$jenis', 
jamdatang ='$jamdatang'

") or die(mysql_error());




echo "<meta http-equiv='refresh' content='0; url=tamuhadir.php'>";
?>