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
      <nav class="navbar navbar-primary navbar-expand-lg">
        <div class="container">
          <div class="logo">
            <img src="../public/img/logo.png" alt="">
          </div>
          <a href="../index.php" class="btn button-primary button-log-out" onclick="return confirm('Apakah Anda Yakin?')">Log Out</a>
        </div>
      </nav>
      <!-- bagian tabel -->
      <section class="tabel-data" >
        <div class="container-fluid">
          <div class="row">
            <div class="col">
              <div class="title">
                <h2 class="text-center tabel-title-text mb-3">Tabel Data</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="button-fungsi d-flex justify-content-end mb-2 me-5">
                <a href="tambah.php" class="btn btn-export btn-success me-4">Tambah</a>
                <form form action="export.php" method="post" class="">
                  <input type="submit" name="export" class="btn btn-export btn-success" value="Export">
                </form>
              </div>
                
                <table class ="table table-bordered rounded-2 overflow-hidden border-black">
                  <thead class="text-black bg-warning border-warning">
                    <tr class="text-center">
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
                      $banyakrow = 0;
                      $result = mysqli_query($conn, "SELECT * FROM penerima");
                      if($result) {
                        while($row = mysqli_fetch_row($result)){
                          $banyakrow++;
                          echo '<tr>
                                  <td>'.$row[0].'</td>
                                  <td>'.$row[1].'</td>
                                  <td>'.$row[2].'</td>
                                  <td>'.$row[3].'</td>
                                  <td>'.$row[4].'</td>
                                  <td>'.$row[5].'</td>
                                  <td><img src="'.$row[6].'" alt="" width="150" height="100"></td>
                                  <td><img src="'.$row[7].'" alt="" width="150" height="100"></td>
                                  <td><img src="'.$row[8].'" alt="" width="150" height="100"></td>
                                  <td>
                                    <a href="edit.php?ID='.$row[0].'"><button class="btn text-white btn-info mb-2">Edit</button></a><br>
                                    <a href="delete.php?ID='.$row[0].'"onclick="return confirm(\'Hapus?\')"><button class="btn btn-danger">Hapus</button></a>
                                  </td>
                                </tr>';
                        }
                        mysqli_free_result($result);
                      }
                      mysqli_close($conn);
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>
      <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>