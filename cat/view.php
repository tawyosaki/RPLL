<html>
<head>
<title> daftar karyawan</title>
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
body {
	background-color: #66CCFF;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<p class="style1">Laporan Data Karyawan </p>
<p class="style1">&nbsp;</p>
<table width="875" height="47" border=1px bgcolor="#FFFFFF">
  <tr>
<td width="133" class="style1">Nama</td>
<td width="160" class="style1">Email</td>
<td width="158" class="style1">Telpon</td>
<td width="265" class="style1">Alamat</td>
<td width="125" class="style1">Pilihan</td>
<tr>
 
<?php
include "config.php";
  
  
$sql = "SELECT * from karyawan ORDER by id";
$result = mysql_query($sql);
while($data=mysql_fetch_array($result)){
echo'<tr> ';
 echo'<td>'.$data['nama'].'</td>';
 echo'<td>'.$data['email'].'</td>';
 echo'<td>'.$data['alamat'].'</td>';
 echo'<td>'.$data['telpon'].'</td>';
 echo'<td><a href=edit.php?id='.$data['id'].'>Edit</a> - ';
 echo'<a href=delete.php?id='.$data['id'].'>Hapus</a></td>';
 
 
echo'</tr>';
 }
 
?>
</table>

</html>