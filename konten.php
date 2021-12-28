<?php
if (!defined("INDEX")) die("---");
if (isset($_GET['tampil'])) $tampil = $_GET['tampil']; else $tampil = "homepage";
?>
<div class="box">
<?php
if ($tampil == "homepage")	include("konten/homepage.php");

elseif($tampil == "event") include("konten/acara/acara.php");
elseif($tampil == "tambah_event") include("konten/acara/tambah_acara.php");  
elseif($tampil == "acara_tambahproses") include("konten/acara/acara_tambahproses.php");
elseif($tampil == "acara_hapus") include("konten/acara/acara_hapus.php");
elseif($tampil == "acara_tamu") include("konten/acara/acara_tamu.php");
elseif($tampil == "tambah_tamu") include("konten/acara/tambah_tamu.php");
elseif($tampil == "tamu_tambahproses") include("konten/acara/tamu_tambahproses.php");
elseif($tampil == "tamu") include("konten/tamu.php");
elseif($tampil == "tamu_hapus") include("konten/acara/tamu_hapus.php");
elseif($tampil == "acaraberjalan") include("konten/acara/acaraberjalan.php");
elseif($tampil == "acaraberjalanproses") include("konten/acara/acaraberjalanproses.php");
elseif($tampil == "user") include("user.php");
elseif($tampil == "tamu_hapus2") include("konten/acara/tamu_hapus2.php");
elseif($tampil == "tamu_hapusbanyak") include("konten/acara/tamu_hapusbanyak.php");
elseif($tampil == "gambar") include("konten/gambar/gambar.php");
elseif($tampil == "tambah_gambar") include("konten/gambar/tambah_gambar.php");
elseif($tampil == "tambah_gambarproses") include("konten/gambar/tambah_gambarproses.php");
elseif($tampil == "gambar_hapus") include("konten/gambar/gambar_hapus.php");
elseif($tampil == "gambar_detail") include("konten/gambar/gambar_detail.php");
elseif($tampil == "gambar_hapusdetail") include("konten/gambar/gambar_hapusdetail.php");
elseif($tampil == "user") include("user.php");
elseif($tampil == "tamu_detail") include("konten/tamu_detail.php");
elseif($tampil == "tamuhadirhapus") include("konten/tamuhadirhapus.php");
elseif($tampil == "tamuhadir") include("konten/tamuhadir.php");
elseif($tampil == "userpage") include("konten/userpage.php");





else echo "Halaman tidak ditemukan";
?>
</div>
