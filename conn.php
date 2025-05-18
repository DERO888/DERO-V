<?php

$servername = "localhost";
$username = "";
$password = "@";
$dbname = "";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn) {

die(" PROBLEM WITH CONNECTION : " . mysqli_connect_error());

}
  
?>