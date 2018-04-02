<?php
include "koneksi.php";
$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->ambilkoneksi();

if($koneksi->connect_error) {
	die("koneksi gagal : " . $koneksi->connect_error);
}else{
   //echo "koneksi ke basis data SUKSES";
}

//echo "nim : " . $_POST["nim"];
//echo "nama :" . $_POST["nama"];
//echo "jurusan : " . $_POST["jurusan"];


$query = "insert into data_mahasiswa (nim, nama, jurusan) values".
    "(". $_POST["nim"]. ", '" .$_POST["nama"]. "','" . $_POST["jurusan"] . "')";
    //echo $query;
    if($koneksi->query($query) == true) {
    	echo "<br>Data " . $_POST["nim"] . " sudah tersimpan.".'<a href ="main.php">disini</a>'; 
}else{
	echo "error : " . $query . " ->"  . $koneksi->error;
}

$koneksi->close();
?>

