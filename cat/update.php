<?php
include "config.php";
  
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$email = $_POST['email'];
$id = $_POST['id'];
  
$sql = "UPDATE karyawan SET nama='$nama', alamat='$alamat',
                             telpon='$telp', email='$email'
         WHERE id='$id'";
  
$result = mysql_query($sql);
  
if ($result){
     echo "Sukses menyimpan data <br />
           <a href=' view.php'>Lihat Data Karyawan</a>";
} else {
     echo "Terjadi kesalahan";
}
?>