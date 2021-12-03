<?php
    date_default_timezone_set("Asia/Jakarta");
    $host ="172.17.0.1";
    $user ="admin";
    $pass = "f865b53623b121fd34ee5426c792e5c33af8c227";
    $dbName = "buku";

    $konek = mysqli_connect($host,$user,$pass);
    if(!$konek)
        die("Gagal koneksi...");

    $hasil = mysqli_select_db($konek,$dbName);
