	<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				
				<li class="breadcrumb-item"><a href="?tampil=homepage">Admin</a></li>
		
				<li class="breadcrumb-item active" aria-current="page">Daftar Acara</li>
			</ol>
		</nav>

<h4>Tambah Acara</h4>
<form name="tambah" method="post"
action="?tampil=acara_tambahproses"
enctype="multipart/form-data">
<table>
<tr>

<td><input placeholder="Nama Acara" required class="form-control" type="text" name="nama_acara" size="50"></td>
</tr>
<tr>

<td><input placeholder="Nama" required class="form-control" type="text" name="nama" size="50"></td>
</tr>
<tr>

<td><input placeholder="Tanggal yyyy/mm/dd" required class="form-control" id="tanggal" type="text" name="tanggal" size="50"></td>
</tr>
<tr>

<td><input placeholder="Tempat" required class="form-control" type="text" name="tempat" size="50"></td>
<tr>

<td><input type="submit" class="btn btn-sm btn-primary" name="tambah" value="Tambah"></td>
</tr>
</table>
</form>



<br><br>


		
<div class="table-responsive">
<table width="100%" cellspacing="0" class="odhie data table table-bordered table-striped table-hover" border="1">

<tr>
<th>No</th>
<th>Acara</th>
<th>Nama</th>
<th>Tanggal</th>
<th>Tempat</th>
<th>Aksi</th>
</tr>
<?php

$no=1;
$tampil = mysql_query("SELECT * FROM tbl_acara ORDER BY id_acara DESC") or die(mysql_error());
while($data=mysql_fetch_array($tampil)) {
$tanggal = tgl_indonesia($data['tanggal']);
?>

<tr>
<td><?php echo $no; ?> </td>
<td><?php echo $data['nama_acara']; ?></td>
<td><?php echo $data['nama']; ?></td>
<td><?php echo $tanggal; ?></td>
<td><?php echo $data['tempat']; ?></td>

<td>

<a onclick="return confirm('apakah anda yakin ingin menghapus Data acara ?')" href="?tampil=acara_hapus&id=<?php echo
$data['id_acara']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
<a href="?tampil=acara_tamu&id=<?php echo
$data['id_acara']; ?>" class="btn btn-info btn-sm"> Data Tamu </a> 
<a href="?tampil=acara_tamuhadir&id=<?php echo
$data['id_acara']; ?>" class="btn btn-info btn-sm"> Tamu Hadir </a> 
<a href="?tampil=acaraberjalan&id=<?php echo
$data['id_acara']; ?>" class="btn btn-warning btn-sm"> Mulai </a> 
<a href="?tampil=gambar_detail&id=<?php echo
$data['id_acara']; ?>" class="btn btn-primary btn-sm"> Gambar </a> 
</td>
</tr>
<?php
$no++;
}
?>
</table>
</div>