<?php
// kode untuk menghubungkan database
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'rekammedis';

$koneksi = mysqli_connect($host, $user, $pass, $dbname);

// kode untuk mengecek koneksi
// if (!$koneksi) {
//     die('koneksi gagal');
// } else {
//     echo "Koneksi berhasil";
// }   

$main_url = "http://localhost/REKAM-MEDIS/"
?>