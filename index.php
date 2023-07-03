<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- tab icon -->
      <link rel="icon" type="image/png" href="public/img/logo.png" sizes="16x16">

    <title>Sistem Pengajuan RTLH | Disperakim</title>

    <!-- Bootstrap CDN -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Vanilla CSS -->
      <link rel="stylesheet" href="public/css/style.css">

  </head>
  <body>
    <main>
    <nav class="navbar navbar-primary navbar-expand-lg">
      <div class="container">
        <div class="logo">
          <img src="public/img/logo.png" alt="logo"> 
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center ps-5" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#petunjuk">Petunjuk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#form">Pengajuan</a>
            </li>
          </ul>
        </div>
        <a href="admin/login.php" class="login btn button-primary">Login</a>
      </div>
    </nav>
    <section id="halaman-depan" class="d-flex align-items-center justify-content-center">
      <div class="container ">
        <div class="row ">
          <div class="col">
            <div class="banner-wrap position-relative">
              <h1 class="banner-title display-3 fw-normal">Sistem Pengajuan Bantuan<br><span class="display-3 fw-semibold">Rumah Tidak Layak Huni</span></h1>
              <a href="#petunjuk" class="btn button-primary mt-5">Klik untuk masuk</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="petunjuk">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="petunjuk-title text-center mt-5">
                <h3>Petunjuk</h3>
              </div>
            </div>
          </div>
          <div class="row text-center d-flex justify-content-center ">
            <div class="col-3">
              <div class="card petunjuk-card">
                <div class="card-body">
                  <span class="p-2 rounded-circle mb-3 icon d-block m-auto">1</span>
                  <p class="card-title">Pilih Menu Pengajuan</p>
                  <p class="card-text">Pilih menu pengajuan atau scroll ke bawah ke form pengajuan</p>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card petunjuk-card">
                <div class="card-body">
                  <span class="p-2 rounded-circle mb-3 icon d-block m-auto">2</span>
                  <p class="card-title">Mengisi Form</p>
                  <p class="card-text">mengisi form pengajuan dengan sesuai dan tanpa ada yang kosong</p>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card petunjuk-card">
                <div class="card-body">
                  <span class="p-2 rounded-circle mb-3 icon d-block m-auto">3</span>
                  <p class="card-title">Submit</p>
                  <p class="card-text">jika sudah mengisi form silahkan tekan tombol submit untuk mengirim data</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
    <section id="form" class="mb-5">
      <div class="container">
        <h3 class="text-center title-text">Form Pengajuan</h1>

        <form action="admin/val_insert.php" method="post" enctype="multipart/form-data">
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
          <input type="submit" name="submit" class="btn btn-success px-4 py-2">
        </form>
      </div>
    </section>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </main>
  </body>
</html>