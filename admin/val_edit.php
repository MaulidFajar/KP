<?php
  include '../src/koneksi.php';

  if(isset($_POST['submit'])) {
    
    // untuk menyimpan data gambar KTP
    $ft_ktp=$_FILES['foto_ktp']['name'];
    $ft_ktp_size=$_FILES['foto_ktp']['size'];
    $ft_ktp_tmp_name=$_FILES['foto_ktp']['tmp_name'];
    $ft_ktp_error=$_FILES['foto_ktp']['error'];
    $folder_ktp = "../src/uploaded_img/KTP/".$ft_ktp;
    move_uploaded_file($ft_ktp_tmp_name, $folder_ktp);

    // untuk menyimpan data gambar KK
    $ft_kk=$_FILES['foto_kk']['name'];
    $ft_kk_size=$_FILES['foto_kk']['size'];
    $ft_kk_tmp_name=$_FILES['foto_kk']['tmp_name'];
    $ft_kk_error=$_FILES['foto_kk']['error'];
    $folder_kk = "../src/uploaded_img/KK/".$ft_kk;
    move_uploaded_file($ft_kk_tmp_name, $folder_kk);

    // untuk menyimpan data gambar Rumah
    $ft_rumah=$_FILES['foto_rumah']['name'];
    $ft_rumah_size=$_FILES['foto_rumah']['size'];
    $ft_rumah_tmp_name=$_FILES['foto_rumah']['tmp_name'];
    $ft_rumah_error=$_FILES['foto_rumah']['error'];
    $folder_rumah = "../src/uploaded_img/RUMAH/".$ft_rumah;
    move_uploaded_file($ft_rumah_tmp_name, $folder_rumah);

    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $no_kk = $_POST['no_kk'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
  
    $calon = [];
    $query = mysqli_query($conn, "UPDATE penerima SET NM_CLN='$nama', NIK_CLN='$nik', KK_CLN='$no_kk', ALAMAT='$alamat', EMAIL='$email', FT_KTP='$folder_ktp', FT_KK='$folder_kk', FT_RMH='$folder_rumah' WHERE ID");
    
    if($query) {
      header("location: admin.php");
    } else {
      echo '<p>Error : '.mysqli_error($conn).'</p>';
    }
  
  }
  mysqli_close($conn);
?>