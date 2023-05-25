<nav class="main-header navbar navbar-expand navbar-white navbar-light nav-pills">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>

    <?php if ($this->session->userdata('role') == 1) : ?>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo site_url('admin/barangkirim') ?>" class="nav-link">Kirim Barang</a>
      </li>
    <?php else : ?>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo site_url('admin/konfirmasibarang') ?>" class="nav-link">Konfirmasi Barang</a>
      </li>
    <?php endif; ?>

    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?php echo site_url('admin/barangjakarta') ?>" class="nav-link">Data Barang Jakarta</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?php echo site_url('admin/barangjalan') ?>" class="nav-link">Data Barang di Perjalanan</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?php echo site_url('admin/baranglampung') ?>" class="nav-link">Data Barang Lampung</a>
    </li>

  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a id="logoutConfirm" class="nav-link" href="#" onclick="confirmLogout()"><i class="fas fa-sign-in-alt"></i></a>
    </li>
  </ul>



  </ul>
</nav>