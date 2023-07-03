<?php
  include '../src/koneksi.php';

  $id = '';
  if(isset($_GET['ID'])) $id = $_GET['ID'];
  $calon = [];
  $result = mysqli_query($conn, "SELECT * FROM penerima WHERE ID='$id'");
  if($result) {
    if($row = mysqli_fetch_row($result)) {
      $calon['ID'] = $row[0];
      $calon['NM_CLN'] = $row[1];
      $calon['NIK_CLN'] = $row[2];
      $calon['KK_CLN'] = $row[3];
      $calon['ALAMAT'] = $row[4];
      $calon['EMAIL'] = $row[5];
      $calon['FT_KTP'] = $row[6];
      $calon['FT_KK'] = $row[7];
      $calon['FT_RMH'] = $row[8];
    }
    mysqli_free_result($result);
  }
  mysqli_close($conn);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- tab icon -->
      <link rel="icon" type="image/png" href="../public/img/icon/tab-icon-16x16.png" sizes="16x16">

    <title>Sistem Pengajuan RTLH | Disperakim</title>

    <!-- Bootstrap CDN -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Vanilla CSS -->
      <link rel="stylesheet" href="../public/css/style.css">

  </head>
<body>
  <main>
    <section id="form">
      <div class="container">
        <h1 class="h3 text-center mt-5 title-text">Edit Data</h1>

        <form action="val_edit.php" method="post" enctype="multipart/form-data" class="mb-5">
          <div class="group mb-3">
            <label for="id" class="input-label">ID</label>
            <input type="text" class="form-control input-field shadow-none" name="id" value="<?php echo $calon['ID']; ?>" readonly disabled>
          </div>
          <div class="group mb-3">
            <label for="nama" class="input-label">Nama</label>
            <input type="text" class="form-control input-field shadow-none" name="nama" value="<?php echo $calon['NM_CLN']; ?>">
          </div>
          <div class="group mb-3">
            <label for="nik" class="input-label">NIK</label>
            <input type="text" class="form-control input-field shadow-none" name="nik" value="<?php echo $calon['NIK_CLN']; ?>">
          </div>
          <div class="group mb-3">
            <label for="no_kk" class="input-label">NO KK</label>
            <input type="text" class="form-control input-field shadow-none" name="no_kk" value="<?php echo $calon['KK_CLN']; ?>">
          </div>
          <div class="group mb-3">
            <label for="alamat" class="input-label">Alamat</label>
            <input type="text" class="form-control input-field shadow-none" name="alamat" value="<?php echo $calon['ALAMAT']; ?>">
          </div> 
          <div class="group mb-3">
            <label for="email" class="input-label">Email</label>
            <input type="email" class="form-control input-field shadow-none" name="email" value="<?php echo $calon['EMAIL']; ?>">
          </div> 
          <div class="group mb-3">
            <label class="input-label" for="foto_ktp">Foto</label>
            <input type="file" class="form-control input-field shadow-none" name="foto_ktp" value="<?php echo $calon['FT_KTP']; ?>">
          </div>
          <div class="group mb-3">
            <label class="input-label" for="foto_kk">Foto</label>
            <input type="file" class="form-control input-field shadow-none" name="foto_kk" value="<?php echo $calon['FT_KK']; ?>">
          </div>
          <div class="group mb-3">
            <label class="input-label" for="foto_rumah">Foto</label>
            <input type="file" class="form-control input-field shadow-none" name="foto_rumah" value="<?php echo $calon['FT_RMH']; ?>">
          </div>
          <button type="submit" name="submit" class="btn btn-success">Simpan</button>
          <a href="admin.php"><button type="button" class="btn btn-warning">Kembali</button></a>
        </form>
      </div>
    </section>
  </main>
  <!-- Bootstrap Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>