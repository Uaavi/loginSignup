<?php

$servername = "vz536877.mysql.tools" ;
$username = "vz536877_vita" ;
$password = "89pM6YkpM6" ;
$dbname = "vz536877_tabletoplogin" ;

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
  die ("Щось пішло не так...". mysqli_connect_error() );
} else {
 "Вітаю! Ваші дані у наших руках";
} ?>
 