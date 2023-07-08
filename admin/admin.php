<?php
  include '../src/koneksi.php';

  $calon = mysqli_query($conn, "SELECT * FROM penerima");
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
    <div class="container-fluid position-relative d-flex p-0">
      <div class="sidebar">
        <nav class="navbar align-items-start pt-5">
          <div class="container">
            <div class="logo m-auto">
              <img src="../public/img/logo.png" alt="">
            </div>
            <div class="navbar-nav w-100">
                  <div class="nav-item dropdown">
                  <a href="#" class="nav-item nav-link active">Data Pengajuan</a>
                  <a href="admin-validasi.php" class="nav-item nav-link">Data Tervalidasi</a>
                  </div>
              </div>
            </div>
            <a href="../index.php" class="btn button-primary button-log-out m-auto mb-5" onclick="return confirm('Apakah Anda Yakin?')">Log Out</a>
        </nav>
      </div>
      <!-- bagian tabel -->
    <main>
    <section class="tabel-data position-relative" >
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="title">
                <h2 class="text-center tabel-title-text mb-5">Data Pengajuan Bantuan</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="d-flex justify-content-end">
                <form action="export.php" method="post" class="">
                  <input type="submit" name="export" class="btn btn-success px-4" value="Download Laporan">
                </form>
                <a href="tambah.php" class="btn btn-success ms-4 px-5">Tambah Data</a>
              </div>

              <div class="table-responsive">
                <table class ="table table-bordered rounded-2 overflow-hidden">
                  <thead class="text-black bg-warning border-warning">
                      <tr class="text-center">
                        <th scope="col"></th>
                        <th scope="col">ID</th>
                        <th scope="col">NAMA CALON PENERIMA</th>
                        <th scope="col">NIK</th>
                        <th scope="col">NO KK</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">FOTO KTP</th>
                        <th scope="col">FOTO KK</th>
                        <th scope="col">FOTO RUMAH</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($calon as $calon) { ?>
                        <form action="admin_pemberkasan_val.php" method="post">
                          <tr>
                            <td>
                              <input type="checkbox" value="<?php echo $calon['NM_CLN'] ?>" name="pilih[]">
                              <input type="hidden" value="<?php echo $calon['ID'] ?>" name="id_penerima[]">
                              <input type="hidden" value="<?php echo $calon['NM_CLN'] ?>" name="nama_penerima[]">
                              <input type="hidden" value="<?php echo $calon['NIK_CLN'] ?>" name="nik_penerima[]">
                              <input type="hidden" value="<?php echo $calon['KK_CLN'] ?>" name="kk_penerima[]">
                              <input type="hidden" value="<?php echo $calon['ALAMAT'] ?>" name="alamat[]">
                              <input type="hidden" value="<?php echo $calon['EMAIL'] ?>" name="email[]">
                              <input type="hidden" value="<?php echo $calon['FT_KTP'] ?>" name="foto_ktp[]">
                              <input type="hidden" value="<?php echo $calon['FT_KK'] ?>" name="foto_kk[]">
                              <input type="hidden" value="<?php echo $calon['FT_RMH'] ?>" name="foto_rumah[]">
                            </td>
                            <td><?php echo $calon['ID'] ?></td>
                            <td><?php echo $calon['NM_CLN'] ?></td>
                            <td><?php echo $calon['NIK_CLN'] ?></td>
                            <td><?php echo $calon['KK_CLN'] ?></td>
                            <td><?php echo $calon['ALAMAT'] ?></td>
                            <td><?php echo $calon['EMAIL'] ?></td>
                            <td><img src="<?php echo $calon['FT_KTP'] ?>" alt="" width="200" height="150"></td>
                            <td><img src="<?php echo $calon['FT_KK'] ?>" alt="" width="200" height="150"></td>
                            <td><img src="<?php echo $calon['FT_RMH'] ?>" alt="" width="200" height="150"></td>
                            <td>
                              <button class="btn btn-validasi btn-primary mb-2 mt-3" name="validasi">Validasi</button>
                            </form>
                              <a href="edit.php?ID=<?php echo $calon['ID'] ?>"><button class="btn text-white btn-info mb-2">Edit</button></a><br>
                              <a href="delete.php?ID=<?php echo $calon['ID'] ?>"onclick="return confirm(\'Hapus?\')"><button class="btn btn-danger">Hapus</button></a>
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