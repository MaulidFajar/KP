<?php
  include '../src/koneksi.php';

  
  $output ='';
  if(isset($_POST['export'])) {
    $result = mysqli_query($conn, "SELECT * FROM penerima ORDER BY ID ASC");
    if(mysqli_num_rows($result) > 0) {
      $output .= '
          <table border="1">
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>NIK</th>
              <th>ID</th>
              <th>ID</th>
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
          </tr>
        ';
      }
      $output .= '</table>';
      header("Content-Type: application/vnd-ms-excel");
      header("Content-Disposition: attachment; filename=download.xls");
      echo $output;
    } else {
      echo 'Tidak ada data untuk di export';
    }
  }
?>