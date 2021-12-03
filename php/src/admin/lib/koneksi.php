<?php
    date_default_timezone_set("Asia/Jakarta");
    $host ="10.0.0.169";
    $user ="admin";
    $pass = "Admin*123";
    $dbName = "buku";

    $konek = mysqli_connect($host,$user,$pass);
    if(!$konek)
        die("Gagal koneksi...");

    $hasil = mysqli_select_db($konek,$dbName);
