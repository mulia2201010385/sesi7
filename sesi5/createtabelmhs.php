<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $tbel = "tbMHS";
       $sql = "CREATE TABLE $tbel(
            id INT UNSIGNED AUTO_INCREMENT Primary key,
            nama VARCHAR(35),
            nim VARCHAR(10),
            alamat VARCHAR(255),
            telp VARCHAR(15),
            prodi VARCHAR(25),
            jenis_kelamin VARCHAR(1),
            tgl_lahir DATE
       )" ;
       $hasil = mysqli_query($cnn, $sql );
       if($hasil){
        echo "Pembuatan TABEL " . $tbel . " Sukses";
       }
    }else{
        echo "Pembuatan TABEL " . $tbel . " gagal";
    }