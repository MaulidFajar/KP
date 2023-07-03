<?php
  include '../src/koneksi.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- tab icon -->
      <link rel="icon" type="image/png" href="../public/img/logo.png" sizes="16x16">

    <title>Admin Page | Disperakim</title>

    <!-- Bootstrap CDN -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Vanilla CSS -->
      <link rel="stylesheet" href="../public/css/style.css">

  </head>
  <body>
        <section id="tambah-data" class="mb-5">
        <div class="container">
          <h3 class="text-center title-text-tambah">Tambah Data</h1>

          <form action="val_insert_admin.php" method="post" enctype="multipart/form-data">
            <div class="group mb-3" hidden>
              <label for="id" class="input-label">id</label>
              <input type="text" class="form-control" name="id">
            </div>
            <div class="group mb-3">
              <label for="nama" class="input-label">Nama</label>
              <input type="text" class="form-control input-field shadow-none" name="nama">
            </div>
            <div class="group mb-3">
              <label for="nik" class="input-label">NIK</label>
              <input type="text" class="form-control input-field shadow-none" placeholder="" name="nik">
            </div>
            <div class="group mb-3">
              <label for="no_kk" class="input-label">NO KK</label>
              <input type="text" class="form-control input-field shadow-none" name="no_kk">
            </div>
            <div class="group mb-3">
              <label for="alamat" class="input-label">Alamat</label>
              <input type="text" class="form-control input-field shadow-none" name="alamat">
            </div>
            <div class="group mb-3">
              <label for="email" class="input-label">Email</label>
              <input type="email" class="form-control input-field shadow-none" name="email">
            </div>
            <div class="group mb-3">
              <label class="input-label" for="foto_ktp">Foto KTP</label>
              <input type="file" class="form-control input-field shadow-none" name="foto_ktp">
            </div>
            <div class="group mb-3">
              <label class="input-label" for="foto_kk">Foto KK</label>
              <input type="file" class="form-control input-field shadow-none" name="foto_kk">
            </div>
            <div class="group mb-3">
              <label class="input-label" for="foto_rumah">Foto Rumah</label>
              <input type="file" class="form-control input-field shadow-none" name="foto_rumah">
            </div>
            <input type="submit" name="submit" class="btn btn-success me-2">
            <a href="admin.php"><button type="button" class="btn btn-warning">Kembali</button></a>
          </form>
        </div>
        </section>
    
  </body>
</html>