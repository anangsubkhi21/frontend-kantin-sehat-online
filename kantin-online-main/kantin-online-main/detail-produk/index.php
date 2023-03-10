<?php

session_start();
require '../admin/functions.php';

$id = $_GET["id"];
$data = query("SELECT * FROM produk WHERE id_produk = '$id'")[0];

?>
  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Produk</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        form {
            position: absolute;
            left: 150px;

        }
        .btn-lengkap{
          border-radius: 50px;
        }
        .pesana-saya {
          margin-right: 20px;
        }

        .box{
          width: 230px;
          height: 120px;
          border-radius: 20px;
          background-color: aqua;
        }

        .sidebar{
          margin: 20px;
        }

    </style>
  </head>
  <body>

    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h5 class="text-white h4">Kantin Sehat</h5>
          <span class="text-muted">Foof and Drink.</span>
        </div>
      </div>
      <nav class="navbar navbar-light bg-light">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <form class="d-flex ms-5" role="search">
            <input class="form-control me-2" type="search" placeholder="Mau Makan Ngab?" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <a href="" style="text-decoration: none; margin-left: 10px;">
            <!-- <i class="fa-solid fa-heart"></i>  -->
            <!-- <i class="fa-sharp fa-solid fa-3"></i> --> Kantin Sehat</a>
        </div>
        <a href="" style="text-decoration: none; padding-right: 100px;">
        <i class="fa-sharp fa-solid fa-cart-shopping"></i>
      </nav>

  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1><?= $data["nama_produk"]; ?></h1>
          <h2><?= $data["deskripsi"]; ?></h2>
          <a href="#" class="link-danger"><?= $data["harga"]; ?></a>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Catatan Untuk Penjual</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="d-flex">
            <a href="../checkout/index.php?id=<?= $data["id_produk"]; ?>" class="btn-get-started scrollto">Beli Sekarang</a>
            <a href="#" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Tambah Keranjang</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="../foto/<?= $data["foto"];?>" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

 