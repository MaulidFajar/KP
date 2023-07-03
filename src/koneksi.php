<?php
$conn = mysqli_connect('localhost', 'root', '', 'pengajuan');
if(mysqli_connect_errno()) {
  echo '<p>Connect failed: '.mysqli_connect_error().'</p>';
  exit();
}
?>