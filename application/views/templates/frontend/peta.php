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
          <center><b><h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1></b></center>
          <div class="container text-center mb-4">
            <a href="<?= base_url('home'); ?>" class="btn btn-primary btn-circle btn-lg" data-toggle="tooltip" data-placement="top" title="Telecenter Kota Pekalongan">
            <i class="fas fa-check"></i>
            </a>
            <a href="<?= base_url('home/telecenter'); ?>" class="btn btn-info btn-circle btn-lg" data-toggle="tooltip" data-placement="top" title="Telecenter Kota Pekalongan">
              <img src="<?= base_url('assets/img/1.ico') ?>">
            </a>
            <a href="<?= base_url('home/fo'); ?>" class="btn btn-warning btn-circle btn-lg" data-toggle="tooltip" data-placement="top" title="Kabel FO Kota Pekalongan">
              <img src="<?= base_url('assets/img/2.ico') ?>">
            </a>
            <a href="<?= base_url('home/warnet'); ?>" class="btn btn-success btn-circle btn-lg" data-toggle="tooltip" data-placement="top" title="Warnet Kota Pekalongan">
              <img src="<?= base_url('assets/img/3.ico') ?>">
            </a>
            <a href="<?= base_url('home/sarpras'); ?>" class="btn btn-danger btn-circle btn-lg" data-toggle="tooltip" data-placement="top" title="Sarpras TIK Kota Pekalongan">
              <img src="<?= base_url('assets/img/4.ico') ?>">
            </a>
          </div>
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
     <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWcWBbOq-dZBEGsVT4HT9bOGwSFtpS5_c&token=79499"></script> -->
     <script type="text/javascript">
    //var uluru = {lat: -6.895863, lng: 109.662573};

    var locations = [
    <?php
    $resultstr = array();
    $icon = array();
    foreach ($view AS $kol) {
      $lat = $kol->latitude;
      $long = $kol->longitude;
      $name_gis = $kol->name_gis;
      $gis = $kol->gis;
      $opd = $kol->opd;
      $alamat = $kol->alamat;
      $foto1 = $kol->foto1;
      $foto2 = $kol->foto2;
      $foto3 = $kol->foto3;
      $foto4 = $kol->foto4;

      $isi = "<h4>".$name_gis."</h4><p align=left>OPD/Perangkat : ".$opd."<br />Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$alamat."<br /><br ><a href=http://localhost/tik/uploads/$foto1 data-lightbox=image-1><img class=mr-2 src=http://localhost/tik/uploads/$foto1 width=60></a><a href=http://localhost/tik/uploads/$foto1 data-lightbox=image-1><img class=mr-2 src=http://localhost/tik/uploads/$foto2 width=60></a><a href=http://localhost/tik/uploads/$foto3 data-lightbox=image-1><img class=mr-2 src=http://localhost/tik/uploads/$foto3 width=60></a><a href=http://localhost/tik/uploads/$foto4 data-lightbox=image-1><img class=mr-2 src=http://localhost/tik/uploads/$foto4 width=60></a><br ><br ><a class=btn-success btn-small href=# role=button>Details</a>&nbsp;&nbsp;<a class=btn-primary btn-small href=https://www.google.com/maps/dir//$lat,$long role=button>Direction</a></p>";

      $resultstr[] = "[ '$isi', $lat, $long, 4]";
      $icon[] = '["'.base_url('/assets/img/'.$gis.'.ico').'"]';
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

 </body>
 </html>