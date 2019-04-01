<?php
/**
 * Created by PhpStorm.
 * User: feyza
 * Date: 26.3.2019
 * Time: 14:42
 */

//veritabanındaki hataları tarayıcıda gösterir

$host = "localhost";
$dbname = "eticarett";
$kullanici = "root";
$sifre = "";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname; charset=utf8", "$kullanici", "$sifre");



}catch (PDOException $e){
    print $e->getMessage();
}
