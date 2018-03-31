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
$qry = "select * from data_mahasiswa where NIM='" .
  $_GET["nim"] . "'";
$data = $koneksi->query($qry);

if($data->num_rows <= 0){
    echo "bro/mba bro.. isi data sesuai prosedur ya!!!";
}else {
    while($hasil = $data->fetch_assoc()){
        global $namaMhs;
        global $jrs;
        $namaMhs = $hasil["NAMA"];
        $jrs = $hasil["JURUSAN"];
   }
}
?>

    <td>NIM </td>
        <td>
        : <input type="text" name="NIM" readonly="true"
          value=<?php echo $_GET["nim"]; ?>></td>
        </tr>
        <tr>
            <td>NAMA BARANG</td>
         <td>: <input  type="text" value=<?php echo $namaMhs; ?> name="NAMA"></td>
         </tr>
     <tr>
         <td>HARGA </td>
         <td>: <input type="text" value=<?php echo $jrs; ?> name="JURUSAN"></td>
         </tr>
         <tr>
          <td><input type="submit" value="Simpan"></td>
    </table>
    </form>
