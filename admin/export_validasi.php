<?php
  include '../src/koneksi.php';

  
  $output ='';
  if(isset($_POST['export_validasi'])) {
    $result = mysqli_query($conn, "SELECT * FROM validasi ORDER BY ID_VALIDASI ASC");
    if(mysqli_num_rows($result) > 0) {
      $output .= '
          <center>
            <h1>Data Calon Penerima yang sudah Tervalidasi</h1>
          </center>

          <table border="1">
            <tr>
              <th>ID Validasi</th>
              <th>ID Penerima</th>
              <th>Nama Calon Penerima</th>
              <th>NIK</th>
              <th>No KK</th>
              <th>Alamat</th>
              <th>Email</th>
              <th>Status</th>
            </tr>
      ';
      while($row = mysqli_fetch_row($result)) {
        $output .= '
          <tr>
            <td>'.$row[0].'</td>
            <td>'.$row[1].'</td>
            <td>'.$row[2].'</td>
            <td>'.$row[3].'</td>
            <td>'.$row[4].'</td> 
            <td>'.$row[5].'</td> 
            <td>'.$row[6].'</td> 
            <td>'.$row[10].'</td> 
          </tr>
        ';
      }
      $output .= '</table>';
      header("Content-Type: application/vnd-ms-excel");
      header("Content-Disposition: attachment; filename=Laporan Penerima Tervalidasi.xls");
      echo $output;
    } else {
      echo 'Tidak ada data untuk di export';
    }
  }
?>