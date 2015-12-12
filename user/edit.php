<?php
include "config.php";
$id = $_GET['id'];
$sql = "SELECT * FROM karyawan WHERE id='$id'";
$result = mysql_query($sql);
$r=mysql_fetch_array($result);
?>
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
body {
	background-color: #66CCFF;
}
-->
</style>

<h2 class="style1">Data Karyawan</h2>
<p class="style1">&nbsp;</p>
<h3 class="style1">Form Edit</h3>
<form action="update.php" method="post" class="style1">
<input type="hidden" name="id" value="<?php echo $r['id']; ?>">
<table height="217" bgcolor="#FFFFFF">
<tr>
     <td width="101" height="38">Nama</td>
     <td width="170"><input type="text" name="nama"
      value="<?php echo $r['nama']; ?>" /></td>
  </tr>
  <tr>
    <td height="38">Alamat</td>
    <td><input type="text" name="alamat"
     value="<?php echo $r['alamat']; ?>" /></td>
  </tr>
  <tr>
      <td height="40">Telepon</td>
      <td><input type="text" name="telp"
       value="<?php echo $r['telpon']; ?>" /></td>
  </tr>
  <tr>
      <td height="40">Email</td>
      <td><input type="text" name="email"
       value="<?php echo $r['email']; ?>" /></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" value="Simpan"></td>
  </tr>
</table>  
</form>
