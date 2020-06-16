<!-- Begin Page Content  -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row">
    <div class="col-lg-12">

      <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

      <?php if($this->session->flashdata('success')){ ?>  
       <div class="alert alert-success">  
         <a href="#" class="close" data-dismiss="alert">&times;</a>  
         <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>  
       </div>  
     <?php } else if($this->session->flashdata('error')){ ?>  
       <div class="alert alert-danger">  
         <a href="#" class="close" data-dismiss="alert">&times;</a>  
         <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>  
       </div>  
     <?php } else if($this->session->flashdata('warning')){ ?>  
       <div class="alert alert-warning">  
         <a href="#" class="close" data-dismiss="alert">&times;</a>  
         <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>  
       </div>  
     <?php } else if($this->session->flashdata('info')){ ?>  
       <div class="alert alert-info">  
         <a href="#" class="close" data-dismiss="alert">&times;</a>  
         <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>  
       </div>  
     <?php } ?>  
     <div class="row">
      <div class="col-lg-3 col-md-12 col-sm-12">
        <a href="<?= base_url('data/tambahmanual') ?>" class="btn btn-danger mb-3">Add Data Manual</a>
        <p>Tambah Data secara manual, Tambah Data secara manual digunakan apabila penambahan data menggunakan pc/komputer sehingga memasukan latitude dan longitude titik lokasi dilakukan secara manual</p>
      </div>
      <div class="col-lg-9 col-md-12 col-sm-12">
        <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <a class="btn btn-success mb-3 btn-sm" style="color: white">Add Data</a>
        <form action="<?= base_url('data/tambah') ?>" method="post">
          <p>Tambah Data secara Automatically, Tambah Data secara Automatically digunakan apabila penambahan data menggunakan perangkat wirelles (smartphone/laptop) sehingga memasukan latitude dan longitude titik lokasi dilakukan secara Automatically</p>
          <div class="form-group">
            <strong><label for="id_kecamatan">Kecamatan</label></strong>
            <select class="form-control" name="id_kecamatan">
              <?php foreach($data_kecamatan as $dk){ ?>
                <option value="<?php echo $dk->id_kecamatan; ?>"><?php echo $dk->kecamatan; ?></option>';
              <?php } ?>
            </select>
          </div>
         <!--  <div class="form-group">
            <strong><label>OPD</label></strong>
            <input type="text" class="form-control" id="opd" name="opd" aria-describedby="emailHelp" placeholder="Masukan Nama OPD">
          </div> -->
          <div class="form-group">
            <strong><label for="opd">OPD</label></strong>
            <br>
            <select class="form-control selectpicker"  data-live-search="true" name="opd">
              <?php foreach($data_opd as $do){ ?>
                <option value="<?php echo $do->id; ?>"><?php echo $do->opd; ?></option>';
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
           <strong><label for="cluster">Cluster</label></strong>
           <select class="selectpicker form-control"  data-live-search="true" name="cluster">
            <?php foreach($data_cluster as $dc){ ?>
              <option value="<?php echo $dc->id; ?>"><?php echo $dc->cluster; ?></option>';
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
         <strong><label for="kondisi">Kondisi Saat ini</label></strong>
         <select class="form-control" name="kondisi">
          <option value="up" style="color: green">UP</option>';
          <option value="down" style="color: red">DOWN</option>';
        </select>
      </div>
      <div class="form-group">
       <strong><label for="jenis_konverter">Jenis Konverter</label></strong>
       <select class="form-control" name="jenis_konverter">
        <option value="single">Single</option>';
        <option value="double">Double</option>';
      </select>
    </div>
    <div class="form-group">
      <strong><label>IP Address</label></strong>
      <input type="text" class="form-control" id="ip" name="ip" aria-describedby="emailHelp" placeholder="Masukan IP Address">
    </div>
    <div class="form-group">
      <strong><label for="jointing1">Jointing</label></strong>
      <select class="selectpicker form-control"  data-live-search="true" name="jointing">
        <?php foreach($jointing as $j){ ?>
          <option value="<?php echo $j->id; ?>"><?php echo $j->jointing; ?></option>';
        <?php } ?>
      </select>
    </div>
   <!--  <div class="form-group">
      <strong><label for="jointing2">Jointing2</label></strong>
      <select class="form-control" name="jointing2">
        <?php foreach($jointing as $j){ ?>
          <option value="<?php echo $j->id; ?>"><?php echo $j->jointing; ?></option>';
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <strong><label for="jointing3">Jointing3</label></strong>
      <select class="form-control" name="jointing3">
        <?php foreach($jointing as $j){ ?>
          <option value="<?php echo $j->id; ?>"><?php echo $j->jointing; ?></option>';
        <?php } ?>
      </select>
    </div> -->
    <div class="form-group">
      <strong><label>Latitude</label></strong>
      <input type="text" class="form-control" id="latitude" name="latitude" aria-describedby="emailHelp" placeholder="Masukan Nama OPD" readonly>
    </div>
    <div class="form-group">
      <strong><label>Longitude</label></strong>
      <input type="text" class="form-control" id="longitude" name="longitude" aria-describedby="emailHelp" placeholder="Masukan Nama OPD" readonly>
    </div>
    <div>
      <div id="googleMap" style="width:100%;height:380px;"></div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary mb-4">Add</button>
  </form>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- API DEV -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnoX8LSgSg5-pRiF5_IzZ313VsNZzuo-4"
async defer></script>

<!-- api maps -->
<!--   <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWcWBbOq-dZBEGsVT4HT9bOGwSFtpS5_c&token=79499"></script> -->

<script>
  var map;
  var markersArray = [];
  var infoWindow;
  getLocation();

  function initialize(position) {
    /*
    if(position){
      var lat = -6.139898771218396;
      var lng = 106.80546484536126;
    }
    else{
      */
      var lat = position.coords.latitude;
      var lng = position.coords.longitude;
      
    //}

    var haightAshbury = new google.maps.LatLng(lat,lng);
    var mapOptions = {
      zoom: 12,
      center: haightAshbury,
      mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    map =  new google.maps.Map(document.getElementById("googleMap"), mapOptions);
    
    addMarker(haightAshbury);
  } 
  //google.maps.event.addDomListener(window, 'load', initialize);

  var x = document.getElementById("demo");
  getLocation();
  showOverlays();
  function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(initialize);
    } else { 
      x.innerHTML = "Geolocation is not supported by this browser.";
    }
  }

  function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
  }

  function addMarker(location) {
    marker = new google.maps.Marker({
      position: location,
      map: map
    });
    markersArray.push(marker);
    
    $('#latitude').val(location.lat());
    $('#longitude').val(location.lng());

  }

  function clearOverlays() {
    if (markersArray) {
      for (i in markersArray) {
        markersArray[i].setMap(null);
      }
    }
  }


  function showOverlays() {
    if (markersArray) {
      for (i in markersArray) {
        markersArray[i].setMap(map);
      }
    }
  }


  function deleteOverlays() {
    if (markersArray) {
      for (i in markersArray) {
        markersArray[i].setMap(null);
      }
      markersArray.length = 0;
    }
  }
</script>