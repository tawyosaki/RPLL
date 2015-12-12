<?php
include "config.php";
$judul = $_GET['judul'];
$sql = "SELECT * FROM diaary WHERE judul='$judul'";
$result = mysql_query($sql);
$r=mysql_fetch_array($result);
?>

<style type="text/css">
<!--
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
.boxrounded2 {background : #333333;
width  : 450px;
height:250px;
border-radius : 20px 20px 20px 20px;
-moz-border-radius : 20px 20px 20px 20px;
-webkit-border-radius : 20px 20px 20px 20px;
}
.boxrounded21 {background : #333333;
width  : 450px;
height:250px;
border-radius : 20px 20px 20px 20px;
-moz-border-radius : 20px 20px 20px 20px;
-webkit-border-radius : 20px 20px 20px 20px;
}
.boxrounded3 {background : #fff;
width  : 500px;
height:300px;
}
.boxrounded4 {background : #fff;
width  : 300px;
height:30px;
}
.boxrounded5 {background : #fff;
width  : 100px;
height:30px;
}
.style21 {font-family: "Segoe UI Light";
	font-size: 36px;
	color: #FFFFFF;
}
.style22 {font-family: "Segoe UI Light"}
#Layer1 {position:absolute;
	left:1px;
	top:1px;
	width:1133px;
	height:148px;
	z-index:1;
}
#Layer1 {position:absolute;
	left:1px;
	top:-1px;
	width:1146px;
	height:100px;
	z-index:1;
}
#Layer3 {position:absolute;
	left:19px;
	top:109px;
	width:738px;
	height:39px;
	z-index:3;
	background-color: #333333;
}
#Layer4 {position:absolute;
	left:21px;
	top:151px;
	width:737px;
	height:531px;
	z-index:4;
	background-color: #999999;
}
#Layer5 {position:absolute;
	left:771px;
	top:113px;
	width:286px;
	height:370px;
	z-index:5;
	background-color: #CCCCCC;
}
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
          <input name="judul" type="text" class="boxrounded4" id="judul" value="<?php echo $r['judul']; ?>" />
          <span class="style22">
          <input name="tgl" type="text" class="boxrounded5" id="tgl" value="<?php echo $r['tgl']; ?>" />
          <input name="jam" type="text" class="boxrounded5" id="jam" value="<?php echo $r['jam']; ?>" />
        </span></p>
      <p>
        <textarea name="isi" class="boxrounded3" value= " <?php echo $r['isi']; ?>"></textarea>
      </p>
      <p align="center">
        <input type="submit" name="Submit" value="Submit" />
      </p>
    </div>
  </form>
</div>
</body>
</html>
