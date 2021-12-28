<?php
session_start();
 include("lib/koneksi.php");
  include("lib/fungsi_tglindonesia.php"); 
 define("INDEX",true);
 if($_SESSION['username']==''and $_SESSION['id']=='')
{
    echo "<meta http-equiv='refresh'
	content='0; url=index.php'>";
}
?>




 


<div id="mycarousel" class="carousel slide">
<div id="content-wrapper">

<a onclick="return confirm('apakah anda yakin ingin Keluar ?')"
 href="logout.php" class="btn btn-light btn-sm" 
 style='float:right; opacity:0.4;'> Logout </a>

<a href="slideshow.php" class="btn btn-light btn-sm" 
 style='float:right; opacity:0.4;'> SlideShow </a>
 <a href="tamuhadir.php" class="btn btn-light btn-sm" 
 style='float:right; opacity:0.4;'> TamuHadir </a>
  <a href="admin.php" class="btn btn-light btn-sm" 
 style='float:right; opacity:0.4;'> Admin </a>



 <br><br>
		<br>
<div class="container special-card" style=' max-width: 540px;'>
     
		<img src="images/logoq.png" width="200px" height="200px" 
style='display: block; margin: auto;'>
        <div><center>
<?php

$no=1;
$link = mysqli_connect("localhost","root","","weddingdb");
// jalankan query
$tampil = mysqli_query($link, "SELECT * FROM acara_on ORDER BY id_berjalan DESC LIMIT 1"); 
while($data=mysqli_fetch_array($tampil)) {
$tanggal = tgl_indonesia($data['tanggal']);
$id_acara = $data ['id_acara'];
?>


		<h3 class="odhie">ODHIE WEDDING ORGANIZER</h3>
				<center>

				<h4 class="odhie"><?php echo $data['nama_acara']; ?></h4>
				<h4 class="odhie"><?php echo $data['nama']; ?></h4>
				<h4 class="odhie"><?php echo $tanggal; ?></h4>
				<h4 class="odhie"><?php echo $data['tempat']; ?></h4>
			<a class="btn btn-info" href="./scanner">QR Code</a>
				<br>
				<br>
				
<?php

}
?>
	   </center>
		</div>
    </div>

</div>	
		
		

		<div class="background-carousel">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">


<?php
$gambar = mysqli_query($link,"SELECT * FROM gambar WHERE id_acara=$id_acara");
$no = 0; while($data=mysqli_fetch_array($gambar)) {
?>
<li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $no; ?>"
<?php if($no == 0) echo 'class="active"'; ?>>
</li>
<?php
$no++;
}
?>
</ol>
<div class="carousel-inner">
<?php
$gambar = mysqli_query($link, "SELECT * FROM gambar WHERE id_acara=$id_acara");
$no = 0; while($data=mysqli_fetch_array($gambar)) {
$isi = substr($data['isi'],0,50);
$isi = substr($data['isi'],0,strrpos($isi,""));
?>
<div class="carousel-item <?php if($no == 0) echo 'active'; ?>">
<img src="gambar/<?php echo
$data['gambar']; ?>" width="100%" height="100%" >
</div>
<?php
$no++;
}
?>
</div>

</div>
		</div>

</div>
	<script src="assets/js/jquery.js"></script> 
	<script src="assets/js/popper.js"></script> 
	<script src="assets/js/bootstrap.js"></script>
	<link rel="stylesheet" href="assets/css/bootstrap.css">

	
	
	<style>
.kiriatas{
align: right;
}



.odhie {
	
color: #f8f8f8;
text-shadow: 1px 1px 1px rgba(0,0,0,0.6);
font-family: 'BebasNeueRegular', 'Arial Black', Arial, sans-serif;
}
.special-card {
background-color: rgba(245, 245, 245, 0.4);
}

	#background-carousel{
	position:fixed;
	width:100%;
	height:100%;
	z-index:-1;
}
.carousel,
.carousel-inner {
	width:100%;
	height:100%;
	z-index:0;
	overflow:hidden;
} 
#content-wrapper {
	position:absolute;
	z-index:1 !important;
	min-width:100%;
	min-height:100%;
}
	</style>
	