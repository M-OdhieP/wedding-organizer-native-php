<?php
$data=mysql_fetch_array(mysql_query("SELECT * FROM gambar
WHERE id_gambar='$_GET[id]'"));
if($data['gambar'] != "")
unlink("gambar/$data[gambar]");
mysql_query("DELETE FROM gambar WHERE
id_gambar='$_GET[id]'") or die(mysql_error());
echo "<meta http-equiv='refresh' content='0;url=?tampil=gambar'>";
?>