<?php 
    $koneksi = mysqli_connect("localhost","root","","uniska_latihan_app");

    if(mysqli_connect_errno()){
        echo "gagal terhubung";
    }
?>