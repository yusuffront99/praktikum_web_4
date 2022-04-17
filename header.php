<?php 
    include ('koneksi.php');
    include ('library.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Pemograman Web</title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <nav class="navbar navbar-inverse bg-primary">
                <div id="navbar">
                    <ul class="dropDownMenu">
                        <li><a href="./">Beranda</a></li>

                        <li><a href="">Master Data</a>
                        <ul>
                            <li><a href="karyawan_data.php">Data Karyawan</a></li>
                        </ul>
                        </li>

                        <li><a href="">Laporan</a>
                        <ul>
                            <li><a href="karyawan_cetak.php">Data Karyawan</a></li>
                        </ul>
                        </li>

                        <li><a href="profil.php">My Profil</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="content">