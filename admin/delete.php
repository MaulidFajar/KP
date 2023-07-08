<?php
  include '../src/koneksi.php';
  $id = '';
  if(isset($_GET['ID'])) $id = $_GET['ID'];
  $query = mysqli_query($conn, "DELETE FROM penerima WHERE ID = $id");
  if($query) {
      header("location: admin.php");
    } else {
      echo '<p>Error: '.mysqli_error($conn).'</p>';
  }    
  mysqli_close($conn);
?>