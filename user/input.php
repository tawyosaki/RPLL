<?php
include "config.php";
  
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$tgllahir = $_POST['tgllahir'];
$goldar = $_POST['goldar'];
$status = $_POST['status'];
$jk = $_POST['jk'];
$about = $_POST['about'];


  
$sql = "INSERT INTO user (username, password,nama, tgllahir, goldar, status, jk, about )
         VALUES ('$username', '$password', '$nama', '$tgllahir', '$goldar', '$status', '$jk', '$about')";
$result = mysql_query($sql);
  
if ($result){
     echo "Your account has been created! congrats.. 
           <a href='index.php'>Sign in</a>";
} else {
     echo "Failed";
}
?>