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


$query = "insert into data_mahasiswa (NIM, NAMA, jurusan) values".
    "(". $_POST["NIM"]. ", '" .$_POST["NAMA"]. "','" . $_POST["JURUSAN"] . "')";
    //echo $query;
    if($koneksi->query($query) == true) {
    	echo "<br>Data " . $_POST["NIM"] . " sudah tersimpan.".'<a href ="main.php">disini</a>'; 
}else{
	echo "error : " . $query . " ->"  . $koneksi->error;
}

$koneksi->close();
?>

