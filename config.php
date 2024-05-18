<?php
$host = 'localhost';
$userdb = 'root';
$passdb = '';
$db = 'psasrakhaakira';
$con = mysqli_connect($host, $userdb, $passdb, $db);

if (mysqli_connect_errno()){
    echo "Koneksi Database Gagal : ".mysqli_connect_error();
    exit();
}