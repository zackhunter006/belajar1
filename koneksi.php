<?php
    // deve
    // $kon = mysqli_connect("localhost", "root",'toor',"akademik");
    
    // production
    $kon = mysqli_connect("localhost", "id8260135_faishal",'faishal',"id8260135_akademik");
    if (mysqli_connect_error()) {
        echo "Koneksi database gagal : " .mysqli_connect_error();
    }
?>