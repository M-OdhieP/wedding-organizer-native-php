	<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				
				<li class="breadcrumb-item"><a href="?tampil=homepage">Admin</a></li>
				<li class="breadcrumb-item"><a href="?tampil=event">Daftar Acara</a></li>
				<li class="breadcrumb-item active" aria-current="page">Tamu Hadir</li>
			</ol>
		</nav>
		<br>
		
		
<?php

$acara = mysql_query("SELECT * FROM tbl_acara WHERE id_acara='$_GET[id]'");
$data=mysql_fetch_array($acara); $id_acara=$data['id_acara'];
?>

<h5>						 <?php echo $data['nama_acara']; ?>   &nbsp;  &nbsp;  : <?php echo $data['nama']; ?> 
						<br>				 tanggal &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  : <?php echo $data['tanggal']; ?> 
						<br>				 tempat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   : <?php echo $data['tempat']; ?>
						<br>				
						</h5>
                
<br>

		<br>
<h3>Tamu Hadir</h3>

<div class="table-responsive">
<table width="100%" cellspacing="0" class="odhie data table table-bordered table-striped table-hover" border="1">

<tr>
<th>No</th>
<th>Acara</th>
<th>Nama</th>
<th>Alamat</th>
<th>Jenis</th>
<th>Jam Hadir</th>
<th>Aksi</th>

</tr>
<?php

$no=1;
$tampil = mysql_query("SELECT * FROM tbl_tamuhadir WHERE tbl_tamuhadir.id_acara='$id_acara'")
 or die(mysql_error());

 
while($data=mysql_fetch_array($tampil)) {
$tanggal = tgl_indonesia($data['tanggal']);
?>


<tr>
<td><?php echo $no; ?> </td>
<td><?php echo $data['tamunya']; ?></td>
<td><?php echo $data['nama']; ?></td>
<td><?php echo $data['alamat']; ?></td>
<td><?php echo $data['jenis']; ?></td>
<td><?php echo $data['jamdatang']; ?></td>
<td>
<a onclick="return confirm('apakah anda yakin ingin menghapus Data Tamu ?')" href="?tampil=tamu_hapus2&id=<?php echo
$data['id_tamu']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
</td>

</tr>
<?php
$no++;
}
?>
</table>

</div>	
