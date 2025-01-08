<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    session_start();
    $host = "localhost";
    $username = "root";
    $password = "";
    $databasename = "belajarlogin";
    $db = mysqli_connect($host, $username, $password, $databasename);

    if (!$db) {
        die("Koneksi ke database gagal: " . mysqli_connect_error());
    }

   
?>