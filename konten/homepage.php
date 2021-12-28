<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				
		
		
				<li class="breadcrumb-item active" aria-current="page">Admin Homepage</li>
			</ol>
		</nav>
		<br>


<div class="container card-transparent" style=' max-width: 500px;'>
    <h5 class="odhie"> <p><img src="logo.png" width="80" height="80">
   ODHIE WEDDING ORGANIZER Melayani Customer Walaupun permintaannya aneh-aneh :) </p></h5>
</div>


<div class="card-header bg-info text-white">
<h5>Daftar Acara<h5>
</div>


	
<div name="Daftar Acara"class="table-responsive">
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
$tampil = mysqli_query($mysqli,"SELECT * FROM tbl_acara ORDER BY id_acara DESC") or die(mysql_error());
while($data=mysqli_fetch_array($tampil)) {
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

<br><br>
<div class="card-header bg-info text-white">
<h5>Gambar<h5>
</div>

<div name="gambar"class="table-responsive">
<table width="100%" cellspacing="0" class="odhie data table table-bordered table-striped table-hover" border="1">

<tr>
<th>No</th>
<th>Gambar</th>
<th>Nama</th>
<th>Tanggal</th>
<th>Aksi</th>
</tr>
<?php

$no=1;

$tampil = mysqli_query($mysqli,"SELECT * FROM gambar ORDER BY id_gambar DESC");
while($data=mysqli_fetch_array($tampil)) {
$tanggal = tgl_indonesia($data['tanggal']);

?>

<tr>
<td><?php echo $no; ?> </td>
<td> <img src="gambar/<?php echo
$data['gambar']; ?>" width="100"> </td>

<td><?php echo$data['milik']; ?></td>

<td><?php echo $tanggal; ?>      </td>

<td><a href="?tampil=gambar_hapus&id=<?php echo
$data['id_gambar']; ?>" onclick="return confirm('apakah anda yakin ingin menghapus Data Gambar ?')" class="btn btn-danger btn-sm"> Hapus </a></td>
</tr>
<?php
$no++;
}
?>
</table>
</div>


<br><br>
<div class="card-header bg-info text-white">
<h5>Tamu<h5>
</div>

<div class="table-responsive">
<table width="100%" cellspacing="0" class="data table table-bordered table-striped table-hover" border="1">

<tr>

<th>No</th>
<th>Tamunya</th>
<th>Nama</th>
<th>Alamat</th>
<th>Jenis</th>
<th>QRcode</th>
<th>Aksi</th>
</tr>
<?php

$no=1;
$tampil = mysqli_query($mysqli,"SELECT * FROM tbl_tamu ORDER BY id_tamu DESC");

 
while($data=mysqli_fetch_array($tampil)) {
$tanggal = tgl_indonesia($data['tanggal']);
?>

<tr>

<td><?php echo $no; ?> 
</td>
<td><?php echo $data['tamunya']; ?></td>
<td><?php echo $data['nama']; ?></td>
<td><?php echo $data['alamat']; ?></td>
<td><?php echo $data['jenis']; ?></td>
<td> <img src="qrcode/<?php echo $data['qrcode']; ?>" width="40"> </td>

<td>

<a href="?tampil=tamu_detail&id=<?php echo
$data['id_tamu']; ?>" class="btn btn-info btn-sm"> Detail </a>

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


















 
 
 
 <style>


</style>