<?php

mysql_query("INSERT INTO tbl_acara SET
nama_acara = '$_POST[nama_acara]',
nama = '$_POST[nama]',
tanggal = '$_POST[tanggal]',
tempat = '$_POST[tempat]'

") or die(mysql_error());



echo "<meta http-equiv='refresh' content='0; url=?tampil=event'>";
?>