<?php
  include '../src/koneksi.php';
  $ID = '';
  if(isset($_GET['ID'])) $ID = $_GET['ID'];
  $query = mysqli_query($conn, "DELETE FROM penerima WHERE ID = $ID");
  if($query) {
      header("location: admin.php");
    } else {
      echo '<p>Error: '.mysqli_error($conn).'</p>';
  }    
  mysqli_close($conn);
?>