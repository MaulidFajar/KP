<?php
  include '../src/koneksi.php';

  $validasi = mysqli_query($conn, "SELECT * FROM validasi");
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
    <div class="container-fluid d-flex p-0">
      <div class="sidebar">
        <nav class="navbar align-items-start pt-5">
          <div class="container">
            <div class="logo m-auto">
              <img src="../public/img/logo.png" alt="">
            </div>
            <div class="navbar-nav w-100">
                  <div class="nav-item dropdown">
                  <a href="admin.php" class="nav-item nav-link">Data Pengajuan</a>
                  <a href="#" class="nav-item nav-link active">Data Tervalidasi</a>
                  </div>
              </div>
            </div>
            <a href="../index.php" class="btn button-primary button-log-out m-auto" onclick="return confirm('Apakah Anda Yakin?')">Log Out</a>
        </nav>
      </div>
      <!-- bagian tabel -->
    <main>
    <section class="tabel-data position-relative" >
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="title">
                <h2 class="text-center tabel-title-text mb-5">Data Pengajuan Bantuan Tervalidasi</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="d-flex justify-content-end">
                <form action="export_validasi.php" method="post" class="">
                  <input type="submit" name="export_validasi" class="btn btn-success px-4" value="Download Laporan">
                </form>
              </div>
              <div class="table-responsive">
                  <table class ="table table-validasi table-bordered rounded-2 overflow-hidden">
                    <thead class="text-black bg-warning border-warning">
                      <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">ID PENERIMA</th>
                        <th scope="col">NAMA CALON PENERIMA</th>
                        <th scope="col">NIK</th>
                        <th scope="col">NO KK</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">FOTO KTP</th>
                        <th scope="col">FOTO KK</th>
                        <th scope="col">FOTO RUMAH</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      $no = 1;
                        foreach ($validasi as $validasi) { ?>
                          <tr>
                            <td><?php echo $validasi['ID_VALIDASI'] ?></td>
                            <td><?php echo $validasi['ID'] ?></td>
                            <td><?php echo $validasi['NM_CLN'] ?></td>
                            <td><?php echo $validasi['NIK_CLN'] ?></td>
                            <td><?php echo $validasi['KK_CLN'] ?></td>
                            <td><?php echo $validasi['ALAMAT'] ?></td>
                            <td><?php echo $validasi['EMAIL'] ?></td>
                            <td><img src="<?php echo $validasi['FT_KTP'] ?>" alt="" width="200" height="150"></td>
                            <td><img src="<?php echo $validasi['FT_KK'] ?>" alt="" width="200" height="150"></td>
                            <td><img src="<?php echo $validasi['FT_RMH'] ?>" alt="" width="200" height="150"></td>
                            <td><?php echo $validasi['STATUS'] ?></td>
                            <td>
                              <a href="delete_admin_validasi.php?ID_VALIDASI=<?php echo $validasi['ID_VALIDASI'] ?>"onclick="return confirm(\'Hapus?\')"><button class="btn btn-danger">Hapus</button></a>
                            </td>
                          </tr>
                      <?php 

                      $no++;

                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
    </main>  
    </div>
      <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>