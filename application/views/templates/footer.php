 <!-- Footer -->
 <footer class="sticky-footer bg-white">
   <div class="container my-auto">
     <div class="copyright text-center my-auto">
       <span>Copyright &copy; Dinas Kominfo Kota Pekalongan 2020</span>
     </div>
   </div>
 </footer>
 <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div><!-- Footer -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
       <button class="close" type="button" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">×</span>
       </button>
     </div>
     <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
     <div class="modal-footer">
       <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
       <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
     </div>
   </div>
 </div>
</div>

<!-- datatable -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

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

<script>
  $(function () {
    $('#example1').DataTable()
    $('#table-data').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
    $('#example4').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : false,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true
    })
    $('#example5').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : true
    })
    $('#example33').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true
    })
    $('#example34').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true
    })
    $('#example35').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true
    })
    $('#example36').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>


</body>
</html>