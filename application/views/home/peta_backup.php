<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('templates/frontend/header'); ?>
<!-- <body id="page-top"  onload="createMarker(-6.895863, 109.662573)"> -->
<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <?php $this->load->view('templates/frontend/sidebar'); ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <?php $this->load->view('templates/frontend/topbar'); ?>
        <!-- map -->
        <center><h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1></center>
      <center><div id="maps" style="width: 95%; height: 500px" class="mb-4"></div></center>
      <!-- end maps -->
        <?php $this->load->view($active_view); ?>
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
         <div class="container my-auto">
           <div class="copyright text-center my-auto">
             <span>Copyright &copy; Dinas Kominfo Kota Pekalongan 2020</span>
           </div>
         </div>
       </footer>
     </div>
   </div><!-- Footer -->
   
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script type="text/javascript">
    //var uluru = {lat: -6.895863, lng: 109.662573};



    var locations = [
    <?php
    $resultstr = array();
    $icon = array();
    foreach ($view AS $kol) {
      $lat = $kol->latitude;
      $long = $kol->longitude;
      $kondisi = $kol->kondisi;
      $opd = $kol->opd;
      $alamat = $kol->alamat;

      $isi = "<h4>KABEL FO</h4><p align=left>OPD/Perangkat : ".$opd."<br />Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$alamat."<br />Foto <br > coba </p>";

      $resultstr[] = "[ $lat, $long, '$isi',4]";
      $icon[] = '["'.base_url('/assets/img/'.$kondisi.'.png').'"]';
    }
    echo implode(",",$resultstr);
    ?>
      //['Bondi Beach', -6.895863, 109.662573, 4],
      //['Coogee Beach', -6.881863, 109.672573, 5]
    ];

    var icons = [
    <?php echo implode(",",$icon);?>
    ];
    
    var map = new google.maps.Map(document.getElementById('maps'), {
      zoom: 11,
      center: new google.maps.LatLng(-6.895863, 109.662573),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: icons[i][0]
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }

    </script>  

<script>
 $('.custom-file-input').on('change', function() {
   let fileName = $(this).val().split('\\').pop();
   $(this).next('.custom-file-label').addClass("selected").html(fileName);
 });

 $('.form-check-input').on('click', function() {
   const menuId = $(this).data('menu');
   const roleId = $(this).data('role');

   $.ajax({
     url: "<?= base_url('admin/changeaccess'); ?>",
     type: 'post',
     data: {
       menuId: menuId,
       roleId: roleId
     },
     success: function() {
       document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
     }
   });

 });
</script>

<!-- chart1 -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['UP',     <?php echo $get_up[0]->count; ?>],
      ['DOWN',      <?php echo $get_down[0]->count; ?>]
      ]);

    var options = {
      title: 'Data Statistik Kondisi FO'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

    chart.draw(data, options);
  }
</script>

<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Barat',     <?php echo $get_barat_count[0]->count; ?>],
      ['Utara',      <?php echo $get_utara_count[0]->count; ?>],
      ['Timur',  <?php echo $get_timur_count[0]->count; ?>],
      ['Selatan',    <?php echo $get_selatan_count[0]->count; ?>]
      ]);

    var options = {
      title: 'Data Graph'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
</script>

<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Konverter Single',     <?php echo $get_konverter_s[0]->count; ?>],
      ['Konverter Double',      <?php echo $get_konverter_d[0]->count; ?>]
      ]);

    var options = {
      title: 'Jenis Konverter'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

    chart.draw(data, options);
  }
</script>
</body>
</html>