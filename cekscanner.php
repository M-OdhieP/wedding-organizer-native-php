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



<?php
                    
				$odhie=$_POST['qrcode'];
					$gambar = mysql_query("SELECT * FROM tbl_tamu WHERE qrcode='$_POST[qrcode].png'");
					$data=mysql_fetch_array($gambar);
mysql_query("INSERT INTO scanner SET
qrscan = '$_POST[qrcode].png'

");

                        ?>
                      
                            
                <br><br><br>
<div class="container special-card" >
		<h5>
	<br><br>
	Tamu Dari     : <?php echo $data['tamunya']; ?> <br>
	Nama   &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  : <?php echo $data['nama']; ?> <br>
	alamat   &nbsp; &nbsp;  &nbsp;  : <?php echo $data['alamat']; ?> <br>
	jenis Tamu   : <?php echo $data['jenis']; ?> <br>
	<a href="tamuhadirproses.php" class="btn btn-info"> Tambah </a><a href="./scanner" class="btn btn-warning"> QRScanner </a></a><a href="tamuhadir.php" class="btn btn-primary"> Tambah Manual </a>
						</h5>
					  <?php 
$acaranya=$data['id_acara'];

					  
					?>







<br>
<h3>Tamu Hadir</h3>

<div class="table-responsive">
<table width="100%" cellspacing="0" class="odhie data table table-bordered table-striped table-hover" border="1">

<tr>
<th>No</th>

<th>Nama</th>
<th>Alamat</th>
<th>Jenis</th>
<th>Waktu Datang</th>


</tr>
<?php

$no=1;
$tampil = mysql_query("SELECT * FROM tbl_tamuhadir WHERE tbl_tamuhadir.id_acara=$acaranya  ") or die(mysql_error());
while($data=mysql_fetch_array($tampil)) {
$tanggal = tgl_indonesia($data['tanggal']);
?>

<tr>
<td><?php echo $no; ?> </td>

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