<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(''); ?>">
    <div class="sidebar-brand-icon">
      <img height="30px" src="<?= base_url('/assets/img/fav.ico')?>">
    </div>
    <div class="sidebar-brand-text mx-3">Pekalongan</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <center class="mt-2 mb-2 ml-2 mr-2"><b><span style="color: #ffffff"><?= $desc['desc']; ?></b></span></center>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">


  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('home'); ?>">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-ellipsis-v"></i>
        <span>Menus</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Net Status:</h6>
          <a class="collapse-item" href="<?php echo base_url('netstatus/cluster'); ?>">Cluster</a>
          <a class="collapse-item" href="<?php echo base_url('netstatus/jointing'); ?>">Jointing</a>
          <a class="collapse-item" href="<?php echo base_url('netstatus/opd'); ?>">OPD</a>
          <a class="collapse-item" href="<?php echo base_url('netstatus/location'); ?>">Location</a>
        </div>
      </div>
    </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('about'); ?>">
          <i class="fas fa-fw fa-info"></i>
          <span>About</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

      </ul>
    <!-- End of Sidebar -->