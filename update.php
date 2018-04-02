<?php
include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj->ambilkoneksi();

if ($koneksi->connect_error){
	die("Koneksi gagal : " . $koneksi->connect_error);

}else{
	echo "koneksi berhasil";
}


$query = "UPDATE data_mahasiswa SET nim='".$_POST["nim"]."', nama='".$_POST["nama"]."', jurusan='".$_POST['jurusan']."' WHERE nim = '" .$_POST["nim"]."'";

  echo $query;

  if ($koneksi ->query($query) == true) {
  	echo "<br>Data " . $_POST["nama"] .
  	" sudah berubah. Data bisa dilihat " .
  	'<a href="index.php">disini</a>';
  } else {
  	echo "eror : " . $query . " -> " . $koneksi->error;
  }

  $koneksi->close();
  ?>
