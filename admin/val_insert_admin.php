<?php
  include '../src/koneksi.php';

  if(isset($_POST['submit'])) {

    $ft_ktp=$_FILES['foto_ktp']['name'];
    $ft_ktp_size=$_FILES['foto_ktp']['size'];
    $ft_ktp_tmp_name=$_FILES['foto_ktp']['tmp_name'];
    $ft_ktp_error=$_FILES['foto_ktp']['error'];
    $folder_ktp = "../src/uploaded_img/KTP/".$ft_ktp;
    move_uploaded_file($ft_ktp_tmp_name, $folder_ktp);

    $ft_kk=$_FILES['foto_kk']['name'];
    $ft_kk_size=$_FILES['foto_kk']['size'];
    $ft_kk_tmp_name=$_FILES['foto_kk']['tmp_name'];
    $ft_kk_error=$_FILES['foto_kk']['error'];
    $folder_kk = '../src/uploaded_img/KK/'.$ft_kk;
    move_uploaded_file($ft_kk_tmp_name, $folder_kk);

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
    $ft_kk = $_POST['foto_kk'];
    $ft_rumah = $_POST['foto_rumah'];

    $q = mysqli_query($conn, "INSERT INTO penerima(NM_CLN,NIK_CLN,KK_CLN,ALAMAT,EMAIL,FT_KTP,FT_KK,FT_RMH) VALUES ('$nama','$nik','$no_kk','$alamat','$email','$folder_ktp','$folder_kk','$folder_rumah')");
    header("location: admin.php");
  }
  mysqli_close($conn);
  
?>