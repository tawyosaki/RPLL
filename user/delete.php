<?php

include "config.php";
$id = $_GET['id'];
$sql = "DELETE FROM karyawan WHERE id='$id'";
$result = mysql_query($sql);
  
if ($result){
     echo "Sukses menghapus data <br />
           <a href='view.php'>Lihat Data Karyawan</a>";
} else {
     echo "Terjadi kesalahan";
}
?>