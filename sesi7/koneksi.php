<?php
    //include();
    //boleh gunakan yang dibawah juga:
    //include_once();
    //require();
    //require_once();

    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("koneksi ke DBMS gagal");

   
?>