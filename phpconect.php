<?php
$con = mysqli_connect("localhost","Melvin","fac@2019","agenda");

mysqli_set_charset($con, 'utf8');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Falha ao tentar conectar ao DB " . mysqli_connect_error();
  }
?>