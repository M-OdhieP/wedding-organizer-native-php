<?php

$data=mysql_fetch_array(mysql_query("SELECT * FROM tbl_tamu
WHERE id_tamu='$_GET[id]'"));
if($data['qrcode'] != "")
unlink("qrcode/$data[qrcode]");


mysql_query("DELETE FROM tbl_tamu WHERE
id_tamu='$_GET[id]'") or die(mysql_error());

echo "<meta http-equiv='refresh' content='0; url=?tampil=tamu'>";
?>