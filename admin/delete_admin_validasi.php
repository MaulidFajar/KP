<?php
  include '../src/koneksi.php';
  $id = '';
  if(isset($_GET['ID_VALIDASI'])) $id = $_GET['ID_VALIDASI'];
  $query = mysqli_query($conn, "DELETE FROM validasi WHERE ID_VALIDASI = $id");
  if($query) {
      header("location: admin-validasi.php");
    } else {
      echo '<p>Error: '.mysqli_error($conn).'</p>';
  }    
  mysqli_close($conn);
?>