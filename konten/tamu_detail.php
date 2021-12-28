	<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				
				<li class="breadcrumb-item"><a href="?tampil=homepage">Admin</a></li>
				<li class="breadcrumb-item"><a href="?tampil=event">Daftar Acara</a></li>
				<li class="breadcrumb-item active" aria-current="page">Data Tamu</li>
			</ol>
		</nav>
		<br>
		
		
<?php

$acara = mysql_query("SELECT * FROM tbl_tamu WHERE id_tamu='$_GET[id]'");
$data=mysql_fetch_array($acara);
?>

<h5>
Tamu Dari     : <?php echo $data['tamunya']; ?> <br>
Nama   &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  : <?php echo $data['nama']; ?> <br>
alamat   &nbsp; &nbsp;  &nbsp;  : <?php echo $data['alamat']; ?> <br>
jenis Tamu   : <?php echo $data['jenis']; ?>
				<center>QR code</center>
						</h5>
                
 <img src="qrcode/<?php echo $data['qrcode']; ?>" width="400" height="400" style="display: block; margin: auto;">
