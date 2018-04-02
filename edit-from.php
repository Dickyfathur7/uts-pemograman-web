<h2>Data Mahasiswa</h2>
<hr>
<form action="update.php" method="post">
<table>
    <tr>
    <?php
    include "koneksi.php";
$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->ambilkoneksi();

if($koneksi->connect_error) {
    die("koneksi gagal : " . $koneksi->connect_error);
}else{
   echo "koneksi ke basis data SUKSES";
} 
$qry = "SELECT * FROM data_mahasiswa WHERE nim='" .
  $_GET["nim"] . "'";
$query = $koneksi->query($qry);
$data = $query->fetch_object();

?>

    <td>NIM</td>
        <td>
        : <input type="text" name="nim" readonly="true"
          value="<?php echo $data->nim; ?>"></td>
        </tr>
        <tr>
            <td>NAMA</td>
         <td>: <input  type="text" value="<?php echo $data->nama; ?>" name="nama"></td>
         </tr>
     <tr>
         <td>JURUSAN</td>
         <td>: <input type="text" value="<?php echo $data->jurusan; ?>" name="jurusan"></td>
         </tr>
         <tr>
          <td><input type="submit" value="Simpan"></td>
    </table>
    </form>
