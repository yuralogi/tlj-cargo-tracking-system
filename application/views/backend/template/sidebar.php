<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo site_url('admin/dashboard'); ?>" class="brand-link">
    <img src="<?php echo base_url('assets/backend/dist') ?>/img/TLJ.png" alt="TLJ LOGO" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">TLJ CARGO Admin</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url('assets/backend/dist') ?>/img/<?php echo $this->session->userdata('user_pp'); ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info text-white">
        <?php echo $this->session->userdata('name_user'); ?>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-boxes"></i>
            <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
            <p>
              Data Barang
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo site_url('admin/barangjakarta') ?>" class="nav-on nav-link">
                <!-- <i class="far fa-circle nav-icon"></i> -->
                <i class="nav-icon fas fa-warehouse"></i>
                <p>Di Jakarta</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('admin/barangjalan') ?>" class="nav-on nav-link">
                <!-- <i class="far fa-circle nav-icon"></i> -->
                <i class="nav-icon fas fa-truck"></i>
                <p>Di Perjalanan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('admin/baranglampung') ?>" class="nav-on nav-link">
                <!-- <i class="far fa-circle nav-icon"></i> -->
                <!-- <i class="nav-icon fas fa-box-check"></i> -->
                <i class="nav-icon bi bi-box2-fill"></i>
                <p>Sampai Lampung</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('admin/barangsampaipelanggan'); ?>" class="nav-on nav-link">
                <!-- <i class="far fa-circle nav-icon"></i> -->
                <!-- <i class="nav-icon fas fa-box-check"></i> -->
                <i class="nav-icon bi bi-check-circle-fill"></i>
                <p>Sampai Di Tujuan</p>
              </a>
            </li>
          </ul>
        </li>



    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>