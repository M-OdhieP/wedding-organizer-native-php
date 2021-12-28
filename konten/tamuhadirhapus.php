<?php

mysql_query("DELETE FROM tbl_tamuhadir WHERE
id_tamuhadir='$_GET[id]'") or die(mysql_error());

echo "<meta http-equiv='refresh' content='0; url=?tampil=tamuhadir'>";
?>