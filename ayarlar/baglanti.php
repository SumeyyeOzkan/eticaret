<?php
$host = "localhost";
$dbname = "eticaret";
$kullanici = "root";
$sifre ="";
try{
$db = new PDO("mysql:host=$host;dbname=$dbname; charset=utf8", "$kullanici", "$sifre");


}catch(PDOException $e){
print $e->getMessage()


}

 ?>
