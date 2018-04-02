<?php
include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj->ambilkoneksi();

if ($koneksi->connect_error){
	die("Koneksi gagal : " . $koneksi->connect_error);

}else{
	echo "koneksi berhasil";
}


//$query = "update  " .
//  "set nama = ' " . $_POST["nama"] . " '," .
//  "   jurusan = " . $_POST["jurusan"] . " " .
//  "where nim = " . $_POST["nim"];
$query = "DELETE FROM data_mahasiswa WHERE nim='".$_GET["nim"]."'";

//echo $query;

  if ($koneksi->query($query) == true) {
  	echo "<br>Data " . $_GET["nim"] .
  	" sudah DIHAPUS. Data bisa dilihat " .
  	'<a href="index.php">disini</a>';
  } else {
  	echo "eror : " . $query . " -> " . $koneksi->error;
  }

  $koneksi->close();
  ?>
