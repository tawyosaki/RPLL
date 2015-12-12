<?php
include "config.php";
  
$tgl = $_POST['tgl'];
$jam = $_POST['jam'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$username = $_POST['username'];


  
$sql = "INSERT INTO catatan (tgl, jam,judul, isi, username )
         VALUES ('$tgl', '$jam', '$judul', '$isi', '$username')";
$result = mysql_query($sql);
  
if ($result){
     echo "Your note has been created! congrats.. 
           <a href='home.php'>Look now</a>";
} else {
     echo "Failed";
}
?>