<?php
mysql_query("DELETE FROM tbl_tamu WHERE
id_tamu='$_GET[id]'") or die(mysql_error());

echo "<meta http-equiv='refresh' content='0; url=?tampil=event'>";
?>