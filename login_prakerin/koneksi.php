<?php

    $database_Host = "localhost";
    $database_Name = "crud_db";
    $database_Table = "pengguna";
    $database_Username = "root";
    $database_Passowrd = "";

    $mysqli = mysqli_connect($database_Host,
                             $database_Username,
                             $database_Passowrd,
                             $database_Name);
    if (!$mysqli)
        die("Gagal Koneksi ke Database");

    echo "Koneksi ke Database Berhasil";
    echo "<br> Nama Host : ".$database_Host;
    echo "<br> Nama Database : ".$database_Name;
    echo "<br> Nama Tabel : ".$database_Table;
    echo "<br>";
    
?>
