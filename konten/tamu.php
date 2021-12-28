

<script src="plugin/validate/jquery.js"></script>
<script src="plugin/validate/jquery.validate.js"></script>
   <script>
       $(document).ready(function(){
           $("#odhieee").validate();
        });
   </script>


<style type="text/css">
       label.error {
           color: red; padding-left: .5em;
       }            
</style>

<style>
 .odhie {
  height: 200px;
 
    display: block;
}
</style>








<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				
				<li class="breadcrumb-item"><a href="?tampil=homepage">Admin</a></li>
				
				<li class="breadcrumb-item active" aria-current="page">Data Tamu</li>
			</ol>
		</nav>
<h4>Tambah Tamu</h4>
<form id="odhieee" name="tambah" method="post"
action="?tampil=tamu_tambahproses&id=<?php echo
$data['id_acara']; ?>"
enctype="multipart/form-data">
<table>
<tr>

<td>
<select id="id_acara" name="id_acara" class="form-control">


<?php

$no=1;
$tampil = mysql_query("SELECT * FROM tbl_acara ORDER BY id_acara") or die(mysql_error());
while($data=mysql_fetch_array($tampil)) {
$tanggal = tgl_indonesia($data['tanggal']);
?>
<option value="<?php echo $data['id_acara']; ?>"><?php echo $data['nama']; ?></option>
<?php } ?>

</select>

</td>
</tr>
<tr>

<td><input placeholder="Nama" required class="required form-control" type="text" name="nama" size="50"></td>
</tr>
<tr>

<td><input placeholder="Alamat" required class="required form-control" type="text" name="alamat" size="50"></td>
</tr>
<tr>

<td>
<select id="jenis" name="jenis" class="form-control">
<option value="normal">Normal</option>
<option value="vip">VIP</option>
<option value="vvip">VVIP</option>
</select>

</td>
</tr>

<tr>

<td><input type="submit" class="btn btn-primary" name="tambah" value="Tambah"></td>
</tr>



</table>
</form>

		<br>
		
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
$tampil = mysql_query("SELECT * FROM tbl_tamu ORDER BY id_tamu DESC")
 or die(mysql_error());

 
while($data=mysql_fetch_array($tampil)) {
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


















	