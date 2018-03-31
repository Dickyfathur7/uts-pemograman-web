<?php
include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj->ambilkoneksi();

if ($koneksi->connect_error){
	die("Koneksi gagal : " . $koneksi->connect_error);

}else{
	echo "koneksi berhasil";
}


$query = "update data_mahasiswa set NAMA='".$_POST["NAMA"]."' , JURUSAN ='".$_POST["JURUSAN"]."' where NIM = " . $_POST["NIM"]."";

  echo $query;

  if ($koneksi ->query($query) == true) {
  	echo "<br>Data " . $_POST["NAMA"] .
  	" sudah berubah. Data bisa dilihat " .
  	'<a href="main.php">disini</a>';
  } else {
  	echo "eror : " . $query . " -> " . $koneksi->error;
  }

  $koneksi->close();
  ?>
