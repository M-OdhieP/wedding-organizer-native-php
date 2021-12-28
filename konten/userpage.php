	<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				
				<li class="breadcrumb-item"><a href="?tampil=homepage">Admin</a></li>
		
				<li class="breadcrumb-item active" aria-current="page">Userpage select</li>
			</ol>
		</nav>

<h4>Pilih Userpage</h4>

		
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


<a href="?tampil=acaraberjalan&id=<?php echo
$data['id_acara']; ?>" class="btn btn-info btn-sm"> Mulai </a> 

</td>
</tr>
<?php
$no++;
}
?>
</table>
</div>