<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $tbel = "tbMATKUL";
       $sql = "CREATE TABLE $tbel(
           kodeMK VARCHAR(8) PRIMARY KEY,
           matakuliah VARCHAR(50),
           sks INT
       )" ;
       $hasil = mysqli_query($cnn, $sql );
       if($hasil){
        echo "Pembuatan TABEL " . $tbel . " Sukses";
       }
    }else{
        echo "Pembuatan TABEL " . $tbel . " gagal";
    }