	<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				
				<li class="breadcrumb-item"><a href="?tampil=homepage">Admin</a></li>
				<li class="breadcrumb-item"><a href="?tampil=event">Daftar Acara</a></li>
				<li class="breadcrumb-item active" aria-current="page">Data Tamu</li>
			</ol>
		</nav>
		<br>
		
		
<?php

$acara = mysql_query("SELECT * FROM tbl_acara WHERE id_acara='$_GET[id]'");
$data=mysql_fetch_array($acara);
?>

<h5>						 <?php echo $data['nama_acara']; ?>   &nbsp;  &nbsp;  : <?php echo $data['nama']; ?> 
						<br>				 tanggal &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  : <?php echo $data['tanggal']; ?> 
						<br>				 tempat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   : <?php echo $data['tempat']; ?>
						<br>				
						</h5>
                
<br>
<a href="?tampil=gambar" class="btn btn-info btn-sm">Tambah gambar</a>
<br><br>
<div class="table-responsive">
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

$tampil = mysql_query("SELECT * FROM gambar WHERE id_acara='$_GET[id]'") or die(mysql_error());
while($data=mysql_fetch_array($tampil)) {
$tanggal = tgl_indonesia($data['tanggal']);

?>

<tr>
<td><?php echo $no; ?> </td>
<td> <img src="gambar/<?php echo
$data['gambar']; ?>" width="100"> </td>

<td><?php echo$data['gambar']; ?></td>

<td><?php echo $tanggal; ?>      </td>

<td><a href="?tampil=gambar_hapusdetail&id=<?php echo
$data['id_gambar']; ?>" onclick="return confirm('apakah anda yakin ingin menghapus Data Gambar ?')" class="btn btn-danger btn-sm"> Hapus </a></td>
</tr>
<?php
$no++;
}
?>
</table>
</div>






<style>
.files input {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 120px 0px 85px 35%;
    text-align: center !important;
    margin: 0;
    width: 100% !important;
}
.files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
 }
.files{ position:relative}
.files:after {  pointer-events: none;
    position: absolute;
    top: 60px;
    left: 0;
    width: 50px;
    right: 0;
    height: 56px;
    content: "";
    background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
    display: block;
    margin: 0 auto;
    background-size: 100%;
    background-repeat: no-repeat;
}
.color input{ background-color:#f1f1f1;}
.files:before {
    position: absolute;
    bottom: 10px;
    left: 0;  pointer-events: none;
    width: 100%;
    right: 0;
    height: 57px;
   
    display: block;
    margin: 0 auto;
    color: #2ea591;
    font-weight: 600;
    text-transform: capitalize;
    text-align: center;
}





</style>

