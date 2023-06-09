<?php 
    $activeHome =  ($page == 'home')? 'active':'';
    $activeTentang =  ($page == 'tentang_kami')? 'active':'';
    $activeDaftarHarga =  ($page == 'daftar_harga')? 'active':'';
    $activePemesanan =  ($page == 'pemesanan')? 'active':'';


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BNSP - <?= $page ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker({
                dateFormat:'dd/mm/yy'
            });
        });
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php?page=home">Hotel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?=$activeHome?>" aria-current="page" href="index.php?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=$activeTentang?>" aria-current="page" href="index.php?page=tentang_kami">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=$activeDaftarHarga?>" href="index.php?page=daftar_harga">Daftar Harga</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?=$activePemesanan?>" href="index.php?page=pemesanan">Pemesanan</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>