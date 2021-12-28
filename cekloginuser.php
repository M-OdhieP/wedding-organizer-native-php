<?php
	session_start();
	include("lib/koneksi.php");
	$username = $_POST['username'];
	$password = $_POST['password'];


	$link = mysqli_connect("localhost","root","","weddingdb");
	// jalankan query
	$cek = mysqli_query($link, "SELECT * FROM user
		WHERE username='$username'
		AND password='$password'");
	$data = mysqli_fetch_array($cek);
	$jumlah = mysqli_num_rows($cek);
if ($jumlah>0) {
	$_SESSION['username'] = $data['username'];
	$_SESSION['password'] = $data['password'];
	
	echo "<meta http-equiv='refresh'
	content='1; url=user.php'>";
}
else {

	
	echo "<meta http-equiv='refresh'
	content='1; url=index.php'>";

}
?>