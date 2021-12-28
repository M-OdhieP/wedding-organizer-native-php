<?php
$dataa = $_POST['id_acara'];
$jenis = $_POST['jenis'];

$tampil = mysql_query("SELECT * FROM tbl_acara WHERE id_acara=$dataa") or die(mysql_error());
$data=mysql_fetch_array($tampil);
$tamunya = $data['nama'];
$qrodhie=$dataa.$_POST['nama'];
$qrodhiesimpan=$dataa.$_POST['nama'].".png";
mysql_query("INSERT INTO tbl_tamu SET
id_acara = '$dataa',
tamunya = '$tamunya',
nama = '$_POST[nama]',
alamat = '$_POST[alamat]',
jenis = '$jenis',

qrcode = '$qrodhiesimpan'

") or die(mysql_error());




            include "phpqrcode/qrlib.php"; 

            $tempdir = "qrcode/"; //Nama folder tempat menyimpan file qrcode
            if (!file_exists($tempdir)) //Buat folder bername temp
            mkdir($tempdir);

            //isi qrcode jika di scan
            $codeContents =$qrodhie;
            //nama file qrcode yang akan disimpan
            $namaFile=$qrodhie.".png";
            //ECC Level
            $level=QR_ECLEVEL_H;
            //Ukuran pixel
            $UkuranPixel=10;
            //Ukuran frame
            $UkuranFrame=4;

            QRcode::png($codeContents, $tempdir.$namaFile, $level, $UkuranPixel, $UkuranFrame); 

           









echo "<meta http-equiv='refresh' content='0; url=?tampil=tamu'>";
?>
