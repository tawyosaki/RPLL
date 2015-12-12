<?php

include "config.php";
$judul = $_GET['judul'];
$sql = "DELETE FROM catatan WHERE judul='$judul'";
$result = mysql_query($sql);
  
if ($result){
     echo "Sukses menghapus data <br />
           <a href='view.php'>home</a>";
} else {
     echo "Terjadi kesalahan";
}
?>