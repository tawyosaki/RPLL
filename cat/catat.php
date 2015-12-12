<?php require_once('../../Connections/ediary.php'); ?>
<?php
$colname_getuser = "-1";
if (isset($_SESSION['username'])) {
  $colname_getuser = (get_magic_quotes_gpc()) ? $_SESSION['username'] : addslashes($_SESSION['username']);
}
mysql_select_db($database_ediary, $ediary);
$query_getuser = sprintf("SELECT username FROM `user` WHERE username = '%s'", $colname_getuser);
$getuser = mysql_query($query_getuser, $ediary) or die(mysql_error());
$row_getuser = mysql_fetch_assoc($getuser);
$totalRows_getuser = mysql_num_rows($getuser);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Place inside the <head> of your HTML -->
			<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
			<script type="text/javascript">
				tinymce.init({
				selector: "textarea"
				});
			</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>eDiary</title>
<style type="text/css">
<!--
.style21 {	font-family: "Segoe UI Light";
	font-size: 36px;
	color: #FFFFFF;
}
#Layer1 {	position:absolute;
	left:1px;
	top:1px;
	width:1133px;
	height:148px;
	z-index:1;
}
#Layer1 {	position:absolute;
	left:1px;
	top:-1px;
	width:1146px;
	height:100px;
	z-index:1;
}
*{margin:auto;padding:0;}
 body{font-family:helvetica;background:#fff;}
 #con{background:#333333;width:350px;padding:30px;margin-top:200px;border-radius:20px;border:1 solid #eee;box-shadow:2px 6px 10px #333333;}
 h2{text-align:center;margin-bottom:15px;}
 p{margin-bottom:10px;}
 label{display:inline-block;width:100px;}
 input[type=submit]{border:none;color:#fff;background:linear-gradient(top, #333 0%, #777 100%);background:-moz-linear-gradient(top, #fff 0%, #777 100%);background:-webkit-linear-gradient(top, #333 0%, #777 100%);height:30px;width:100px;border-radius:5px;}
 input[type=submit]:active{background:linear-gradient(top, #888 0%, #bbb 100%);background:-moz-linear-gradient(top, #888 0%, #fff 100%);background:-webkit-linear-gradient(top, #888 0%, #fff 100%);}
.boxrounded {background : #00ff00;
width  : 200px;
height:100px;
border-radius : 10px 10px 10px 10px;
-moz-border-radius : 10px 10px 10px 10px;
-webkit-border-radius : 10px 10px 10px 10px;
}
.boxrounded {background : #00ff00;
width  : 200px;
height:100px;
border-radius : 10px 10px 10px 10px;
-moz-border-radius : 10px 10px 10px 10px;
-webkit-border-radius : 10px 10px 10px 10px;
}
#Layer3 {	position:absolute;
	left:19px;
	top:109px;
	width:738px;
	height:39px;
	z-index:3;
	background-color: #333333;
}
.boxrounded2 {background : #333333;
width  : 450px;
height:250px;
border-radius : 20px 20px 20px 20px;
-moz-border-radius : 20px 20px 20px 20px;
-webkit-border-radius : 20px 20px 20px 20px;
}

.boxrounded3 {background : #fff;
width  : 500px;
height:300px;
/*border-radius : 30px 30px 30px 30px;
-moz-border-radius : 30px 30px 30px 30px;
-webkit-border-radius : 30px 30px 30px 30px;*/
}

.boxrounded4 {background : #fff;
width  : 300px;
height:30px;
/*border-radius : 30px 30px 30px 30px;
-moz-border-radius : 30px 30px 30px 30px;
-webkit-border-radius : 30px 30px 30px 30px;*/
}

.boxrounded5 {background : #fff;
width  : 100px;
height:30px;
}

#Layer5 {	position:absolute;
	left:771px;
	top:113px;
	width:286px;
	height:370px;
	z-index:5;
	background-color: #CCCCCC;
}
.boxrounded21 {background : #333333;
width  : 450px;
height:250px;
border-radius : 20px 20px 20px 20px;
-moz-border-radius : 20px 20px 20px 20px;
-webkit-border-radius : 20px 20px 20px 20px;
}
#Layer4 {	position:absolute;
	left:21px;
	top:151px;
	width:737px;
	height:531px;
	z-index:4;
	background-color: #999999;
}
#Layer2 {
	position:absolute;
	left:35px;
	top:140px;
	width:605px;
	height:44px;
	z-index:6;
	background-color: #666666;
}
#Layer6 {
	position:absolute;
	left:410px;
	top:171px;
	width:216px;
	height:29px;
	z-index:6;
}
.style22 {font-family: "Segoe UI Light"}
-->
</style>
</head>

<body>
<div id="Layer1">
  <table width="1168" height="97" border="0" bgcolor="#333333">
    <tr>
      <td width="1136" height="79"><span class="style21">E-Diary </span></td>
    </tr>
  </table>
</div>
<div id="Layer3" class="boxrounded"></div>
<div class="boxrounded2" id="Layer5"></div>
<div id="Layer4" class="boxrounded21">
  <form id="form1" name="form1" method="post" action="input.php">
    <div align="center">
      <p align="center"><span class="style21"> Title</span>
        <input name="judul" type="text" class="boxrounded4" id="judul" />
        <span class="style22">
        <input name="tgl" type="text" class="boxrounded5" id="tgl" value="<?php echo "".date("Y/m/d"); ?>" />
        <input name="jam" type="text" class="boxrounded5" id="jam" value="<?php date_default_timezone_set("Asia/Jakarta"); echo "".date("h:i a"); ?>" />
      </span>
        <input name="textfield" type="text" value="<?php echo $row_getuser['username']; ?>" />
      </p>
      <p>
        <textarea name="isi" wrap="virtual" class="boxrounded3"></textarea>
      </p>
      <p align="center">
        <input type="submit" name="Submit" value="Submit" />
      </p>
    </div>
  </form>
</div>
</body>
</html>
<?php
mysql_free_result($getuser);
?>
