<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="<?php echo base_url('assets/img/pekalongan.png'); ?> "width="32" height="45">
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <hr class="sidebar-divider">

    <?php
    $role_id = $this->session->userdata('role_id');
    $queryMenu = "SELECT `user_menu`.`id`, `menu`, `icons` FROM `user_menu` JOIN `user_access_menu` ON `user_menu`.`id` = `user_access_menu`.`menu_id` WHERE `user_access_menu`.`role_id` = $role_id
    ORDER BY `user_access_menu`.`menu_id` ASC
    ";
    $menu = $this->db->query($queryMenu)->result_array();

    ?>

    <?php foreach ($menu as $m) : ?>

        <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" data-target="#<?php echo $m['menu']; ?>" aria-expanded="true" aria-controls="collapseUtilities">
                <span><i class="<?php echo $m['icons']; ?> mr-2"></i><?php echo $m['menu']; ?></span>
            </a>
            <?php
            $menuId = $m['id'];
            $querySubMenu = "SELECT * FROM `user_sub_menu` JOIN `user_menu` ON `user_sub_menu`.`menu_id` = `user_menu`. `id` WHERE `user_sub_menu`.`menu_id` = $menuId AND `user_sub_menu`.`is_active` = 1";

            $subMenu = $this->db->query($querySubMenu)->result_array();   ?>

            <hr class="sidebar-divider"> 

            <div id="<?php echo $m['menu']; ?>" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <?php foreach ($subMenu as $sm) : ?>
                      <a class="collapse-item" href="<?= base_url($sm['url']); ?>"><i class="<?= ($sm['icon']); ?>" style="margin-left: -15px"></i> <?= ($sm['title']); ?></a>
                  <?php endforeach; ?>

              </div>
          </div>
      </li>

  <?php endforeach; ?> 

  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('auth/logout') ?>">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Logout</span></a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>