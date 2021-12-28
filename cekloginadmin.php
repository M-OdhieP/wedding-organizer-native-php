<?php
	session_start();
	include("lib/koneksi.php");
	$id = $_POST['id'];
	$password = $_POST['password'];
	$cek = mysqli_query($mysqli,"SELECT * FROM admin
		WHERE username='$id'
		AND password='$password'");
	$data = mysqli_fetch_array($cek);
	$jumlah = mysqli_num_rows($cek);
if ($jumlah>0) {
	$_SESSION['id'] = $data['username'];
	$_SESSION['password'] = $data['password'];
	
	echo "<meta http-equiv='refresh'
	content='0; url=admin.php'>";
}
else {

	echo "password atau username salah!!";
	echo "<meta http-equiv='refresh'
	content='0; url=adminlogin.php'>";

}
?>