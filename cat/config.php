<?php

$host="localhost";
$username="root"; // username db
$password=""; // password db
$database="diary";
  
mysql_connect("$host", "$username", "$password")or
die("cannot connect server ");
mysql_select_db("$database")or die("cannot select DB");

?>