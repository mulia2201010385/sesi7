<?php
    //include();
    //boleh gunakan yang dibawah juga:
    //include_once();
    //require();
    //require_once();

    include("konfigurasi.php");

    $hasil = mysqli_connect(DBHOST, DBUSER, DBPASS);

    if($hasil){
        echo "koneksi ke mysql sukses";
    }else{
        echo "koneksi ke mwaql gagal";
    }
?>