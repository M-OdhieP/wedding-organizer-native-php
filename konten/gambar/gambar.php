<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="?tampil=homepage">Admin</a></li>
<li class="breadcrumb-item active" aria-current="page">Gambar</li>
</ol>
</nav>

<h4>Tambah Gambar</h4>
<form name="tambah" method="post"
action="?tampil=tambah_gambarproses&id=<?php echo $data['id_acara']; ?>"
enctype="multipart/form-data">
<table>
<tr>
<td>Gambar Untuk</td>
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
</select></td></tr>

<tr><td>Gambar</td>

<td><input type="file" required class="form-control" name="gambar">
</tr><tr>

<td></td>
<td><input type="submit" class="btn btn-primary" 
name="tambah" value="Tambah">
<a href="?tampil=event" class="btn btn-success"> Acara </a> 
</td></tr>



</table>
</form>



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

$tampil = mysql_query("SELECT * FROM gambar ORDER BY id_gambar DESC") or die(mysql_error());
while($data=mysql_fetch_array($tampil)) {
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

