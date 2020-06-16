<!DOCTYPE html>
<html>
<head>
  <title>Laporan</title>
</head>
<body>  
  <div class="row">
    <div class="col 6">
      <h2 class="text-center" style="text-align: center;">Laporan Telecenter Kota Pekalongan 2019s</h2>
    </div>
  </div>
  <br>
  <p style="font-size:11px;">Tanggal Cetak : <?php echo date("D-d/m/Y") ?></p>

  <table border="1">
    <thead>

      <tr>
        <td rowspan="2" style="text-align: center; font-size:11px;">No</td>
        <td colspan="5"  style="text-align: center; font-size:11px;">Data Telecenter</td>
      </tr>

      <tr>
        <td style="text-align: center; font-size:11px;">Nama Telecenter</td>
        <td style="text-align: center; font-size:11px;">Alamat Telecenter</td>
        <td style="text-align: center; font-size:11px;">Nama Pengelola</td>
        <td style="text-align: center; font-size:11px;">Alamat Pengelola</td>
        <td style="text-align: center; font-size:11px;">Kontak</td>
      </tr>
    </thead>

    <tbody>
      <?php 
      $no=1;
      $data = $this->db->get('data')->result();
      foreach ($data as $datakpb): ?>
        <tr>
          <td rowspan="2" style="text-align: center; font-size:11px;"><?php echo $no++; ?></td>
          <td rowspan="2" style="text-align: center; font-size:11px;"><?php echo $datakpb -> nama_telecenter; ?></td>
          <td rowspan="2" style="text-align: center; font-size:11px;"><?php echo $datakpb -> alamat_telecenter; ?></td>
          <td rowspan="2" style="text-align: center; font-size:11px;"><?php echo $datakpb -> nama_pengelola; ?></td>
          <td rowspan="2" style="text-align: center; font-size:11px;"><?php echo $datakpb -> alamat_pengelola; ?></td>
          <td rowspan="2" style="text-align: center; font-size:11px;"><?php echo $datakpb -> kontak_pengelola; ?></td>
          <td style="text-align: center; font-size:11px;"><?php echo $datakpb -> pc_jumlah; ?></td>
          <td style="text-align: center; font-size:11px;"><?php echo $datakpb -> printer_jumlah; ?></td>
          <td style="text-align: center; font-size:11px;"><?php echo $datakpb -> jaringan_jumlah; ?></td>
          <td style="text-align: center; font-size:11px;"><?php echo $datakpb -> listrik_jumlah; ?></td>
          <td style="text-align: center; font-size:11px;"><?php echo $datakpb -> mebeler; ?></td>




          <td rowspan="2" style="text-align: center; font-size:11px;"><?php echo $datakpb -> ruangan_status; ?></td>
          <td rowspan="2" style="text-align: center; font-size:11px;"><?php echo $datakpb -> jumlah_pengguna; ?></td>

          <td rowspan="2" style="text-align: center; font-size:11px;"><?php echo $datakpb -> posisi; ?></td>
          <td rowspan="2" style="text-align: center; font-size:11px;"><?php echo $datakpb -> lokasi; ?></td>

          <td 
          <?php if($datakpb->ket_1 == 'Baik') 
          {
            echo 'bgcolor="green"';
          }
          if ( $datakpb->ket_1 == 'Kurang Baik')
          {
            echo 'bgcolor="yellow"';
          }
          elseif ($datakpb->ket_1 == 'Tidak Baik') {
            echo 'bgcolor="red"';
          }
          ?> style="text-align: center; font-size:11px;"><?php echo $datakpb -> ket_1; ?></td>
        </tr>
        <tr class="text-black">
          <td style="text-align: center; font-size:11px;"><?php echo $datakpb -> pc_status; ?></td>
          <td style="text-align: center; font-size:11px;"><?php echo $datakpb -> printer_status; ?></td>
          <td style="text-align: center; font-size:11px;"><?php echo $datakpb -> jaringan_status; ?></td>
          <td style="text-align: center; font-size:11px;"><?php echo $datakpb -> listrik_status; ?></td>
          <td style="text-align: center; font-size:11px;"><?php echo $datakpb -> mebeler_status; ?></td>
          <td 
          <?php if($datakpb->ket_1 == 'Baik') 
          {
            echo 'bgcolor="green"';
          }
          if ( $datakpb->ket_1 == 'Kurang Baik')
          {
            echo 'bgcolor="yellow"';
          }
          elseif ($datakpb->ket_1 == 'Tidak Baik') {
            echo 'bgcolor="red"';
          }
          ?>
          style="text-align: center; font-size:11px;"><?php echo $datakpb -> ket_2; ?></td>
        </tr>


        <?php if($datakpb->ket_1 == 'Baik')
        {
          echo '<div class="table-success">Baik</div>';
        } 
        if($datakpb->ket_1 == 'Kurang Baik')
        {
          echo '<div class="table-warning">Kurang Baik</div>';
        }
        else if ($datakpb->ket_1 == 'Tidak Baik'){
          echo '<div class="table-danger">Tidak Baik</div>';
        }
        ?>


      <?php endforeach ?>

    </tbody>
  </table>
  </html>