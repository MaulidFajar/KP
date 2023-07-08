<?php
  include '../src/koneksi.php';

$penerima = mysqli_query($conn, "SELECT * FROM penerima");
$validasi = mysqli_query($conn, "SELECT * FROM penerima INNER JOIN validasi ON penerima.ID = validasi.ID");
if(isset($_POST['validasi'])) {
  if(!empty($_POST['pilih'])) {
    $pilih = $_POST['pilih'];
    foreach ($_POST['nama_penerima'] as $key => $value) {
      if (in_array($_POST['nama_penerima'][$key], $pilih)) {
        $id = $_POST['id_penerima'][$key];
        $nama = $_POST['nama_penerima'][$key];
        $nik = $_POST['nik_penerima'][$key];
        $no_kk = $_POST['kk_penerima'][$key];
        $alamat = $_POST['alamat'][$key];
        $email = $_POST['email'][$key];
        $foto_ktp = $_POST['foto_ktp'][$key];
        $foto_kk = $_POST['foto_kk'][$key];
        $foto_rumah = $_POST['foto_rumah'][$key];
        $query = mysqli_query($conn, "INSERT INTO validasi(ID,NM_CLN,NIK_CLN,KK_CLN,ALAMAT,EMAIL,FT_KTP,FT_KK,FT_RMH,STATUS) VALUES ('$id','$nama','$nik','$no_kk','$alamat','$email','$foto_ktp','$foto_kk','$foto_rumah','Tervalidasi')");
      }
    }
    if($query) {
      ?> <script>alert("Data Telah Tervalidasi")</script> <?php
      header("location: admin-validasi.php");
    } else {
      echo '<p>Error : '.mysqli_error($conn).'</p>';
    }
  }
}
?>