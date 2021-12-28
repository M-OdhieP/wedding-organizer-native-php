<?php
session_start();
 include("lib/koneksi.php");
  include("lib/fungsi_tglindonesia.php"); 
 define("INDEX",true);

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<html>
  <head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">




                      
                            
                <br><br><br>
<div class="container special-card" >
		
<h4>Tambah Tamu Hadir</h4>
<form id="odhieee" name="tambah" method="post"
action="tamutambahhadirproses.php"
enctype="multipart/form-data">
<table>
<tr>


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

<?php

$no=1;
$tampil = mysql_query("SELECT * FROM acara_on ORDER BY id_berjalan DESC LIMIT 1") or die(mysql_error());
while($data=mysql_fetch_array($tampil)) {
$tanggal = tgl_indonesia($data['tanggal']);
$id_acara = $data ['id_acara'];
} ?>





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


</tr>
<?php

$no=1;
$tampil = mysql_query("SELECT * FROM tbl_tamuhadir WHERE tbl_tamuhadir.id_acara=$id_acara ") or die(mysql_error());
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

</tr>
<?php
$no++;
}

?>
</table>
<a href="user.php" class="btn btn-light " 
 style='float:right; opacity:0.4;'> Kembali </a>
 <br><br>
</div>	

</div>







</div>






</body>
</html>





















<style>

body#LoginForm{ background-image:url("https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg"); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}

.form-heading { color:#fff; font-size:23px;}
.panel h1{ color:#444444; margin:0 0 8px 0;}
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
.login-form .form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
.special-card {
background-color: rgba(245, 245, 245, 0.4);
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  max-width: 38%;
  padding: 50px 70px 70px 71px;
}

.login-form .form-group {
  margin-bottom:10px;
}
.login-form{ text-align:center;}
.forgot a {
  color: #777777;
  font-size: 14px;
  text-decoration: underline;
}
.login-form  .btn.btn-primary {
  background: #4ebdf0 none repeat scroll 0 0;
  border-color: #4ebdf0;
  color: #ffffff;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
}
.forgot {
  text-align: left; margin-bottom:30px;
}
.botto-text {
  color: #ffffff;
  font-size: 14px;
  margin: auto;
}
.login-form .btn.btn-primary.reset {
  background: #ff9900 none repeat scroll 0 0;
}
.back { text-align: left; margin-top:10px;}
.back a {color: #444444; font-size: 13px;text-decoration: none;}
</style>