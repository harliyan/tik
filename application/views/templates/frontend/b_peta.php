<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('templates/frontend/header'); ?>
<body id="page-top"  onload="initialize(-6.895863, 109.662573)">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <?php $this->load->view('templates/frontend/sidebar'); ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <?php $this->load->view('templates/frontend/topbar'); ?>
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

<!-- <?php
   ob_start();
   var_dump($view);
   $result = ob_get_contents();
   ?> -->

   <!-- Bootstrap core JavaScript-->
   <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
   <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <!-- Core plugin JavaScript-->
   <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

   <!-- Custom scripts for all pages-->
   <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

   <!--  lightbox -->
   <script src="<?php print base_url('lightbox'); ?>/dist/js/lightbox.js"></script>

   <!-- api maps -->
    <!--   <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWcWBbOq-dZBEGsVT4HT9bOGwSFtpS5_c&token=79499"></script> -->

   <!-- API DEV -->
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnoX8LSgSg5-pRiF5_IzZ313VsNZzuo-4"
   async defer></script>

   <script type="text/javascript">

    var map;
    var infoWindow;

    function initialize(lt,lg) {
      var mapDiv = document.getElementById('map-canvas');

      map = new google.maps.Map(mapDiv, {
        center: new google.maps.LatLng(lt, lg),
        zoom: 13, //zoom
        scrollwheel: true, //bisa discroll nggak
        draggable:true, //bisa didrag nggak
        mapTypeId: google.maps.MapTypeId.ROADMAP  //jenis peta

      });


      infoWindow = new google.maps.InfoWindow();

      <?php foreach ($view AS $row) {?>
       var nama = '\
       <div class="row">\
       <div class="col col-lg-6 col-sm-12">\
       <b><h3 align="left"><?php echo $row->opd?></h3></b>\
       <p align="left"><?php echo $row->alamat?> (<?php echo $row->kecamatan ?>)</p>\
       <hr>\
       <p align="left">Kondisi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;<?php
       $kondisi = $row->kondisi;
       $up = '<span class="badge badge-success">UP</span>';
       $down = '<span class="badge badge-danger">DOWN</span>';
       if ($kondisi == "up") {
              // echo "UP MANTAB!";
        echo "$up";
      } else {
        echo "$down";
      }
      ?>\
      <br>Cluster &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;<?php echo $row->cluster ?>\
      <br>Konverter &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;<?php echo $row->jenis_konverter ?>\
      <br>Jointing Utama :&nbsp;<?php echo $row->jointing ?>\
      <br>IP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;<?php echo $row->ip ?>\
      </div>\
      <br>\
      <div class="col col-lg-6 col-sm-12">\
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">\
      <div class="carousel-inner">\
      <div class="carousel-item active">\
      <a href="<?php echo base_url('uploads/'. $row->foto1); ?>" data-lightbox="image-1" data-title="Foto Sarpras Kabel FO Kota Pekalongan" ><img class="d-block w-100" src="<?php echo base_url('uploads/'. $row->foto1); ?>"></a>\
      </div>\
      <div class="carousel-item">\
      <a href="<?php echo base_url('uploads/'. $row->foto2); ?>" data-lightbox="image-1" data-title="Foto Sarpras Kabel FO Kota Pekalongan" ><img class="d-block w-100" src="<?php echo base_url('uploads/'. $row->foto2); ?>"></a>\
      </div>\
      <div class="carousel-item">\
      <a href="<?php echo base_url('uploads/'. $row->foto3); ?>" data-lightbox="image-1" data-title="Foto Sarpras Kabel FO Kota Pekalongan" ><img class="d-block w-100" src="<?php echo base_url('uploads/'. $row->foto3); ?>"></a>\
      </div>\
      <div class="carousel-item">\
      <a href="<?php echo base_url('uploads/'. $row->foto4); ?>" data-lightbox="image-1" data-title="Foto Sarpras Kabel FO Kota Pekalongan" ><img class="d-block w-100" src="<?php echo base_url('uploads/'. $row->foto4); ?>"></a>\
      </div>\
      </div>\
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">\
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>\
      <span class="sr-only">Previous</span>\
      </a>\
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">\
      <span class="carousel-control-next-icon" aria-hidden="true"></span>\
      <span class="sr-only">Next</span>\
      </a>\
      </div>\
      </div>\
      </div>';

      var latview = '<?php echo $row->latitude ?>';
      var longview = '<?php echo $row->longitude ?>';
      createMarker(latview, longview, nama);

    <?php } ?>

  }

</script>
<script type="text/javascript">

  function createMarker(lt,lg,message) {

    // var up = 'http://192.168.254.247/project/baznas/up.png';
    // var down = 'http://192.168.254.247/project/baznas/down.png';
    var up = 'http://telecenter.pekalongankota.go.id/project/baznas/up.png';
    var down = 'http://telecenter.pekalongankota.go.id/project/baznas/down.png';
    var latLng = new google.maps.LatLng(lt,lg);
    var marker = new google.maps.Marker({
      position: latLng,
      map: map,
      icon: up

    });


    google.maps.event.addListener(marker, 'click', function() {
      var myHtml = '<strong>'+message+'</strong>';
      infoWindow.setContent(myHtml);
      infoWindow.open(map, marker);
    });
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

<!-- <?php foreach ($view AS $row) {?> -->
<!-- <?php
       $kondisi = $row->kondisi;
       if ($kondisi == "up") {
        echo "up";
      } else {
        echo "down";
      }
      ?>
      <?php } ?> -->
      </html>