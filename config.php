<?php

$host = "localhost";
$dbUser = "Melvin";
$password = "fac@2019";
$database = "agenda";

$dbConn = new mysqli($host,$dbUser,$password,$database);

mysqli_set_charset($dbConn, 'utf8');

if($dbConn->connect_error)
{
	die("Database Connection Error, Error No.: ".$dbConn->connect_errno." | ".$dbConn->connect_error);
}
?>