<!-- Meta -->
<?php $this->load->view('backend/template/meta') ?>

<div class="wrapper">

  <!-- Navbar -->
  <?php $this->load->view('backend/template/navbar') ?>

  <!-- Main Sidebar Container -->
  <?php $this->load->view('backend/template/sidebar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $page_title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php $query = $this->db->query('SELECT * FROM tbl_barang WHERE status_barang = "DITERIMA DI JAKARTA"'); ?>
                <h3><?php echo $query->num_rows() ?></h3>

                <p>Barang di Jakarta</p>
              </div>
              <div class="icon">
                <i class="bi bi-building"></i>
              </div>
              <a href="<?php echo base_url('admin/barangjakarta') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php $query = $this->db->query('SELECT * FROM tbl_barang WHERE status_barang = "SEDANG DIKIRIM"'); ?>
                <h3><?php echo $query->num_rows() ?></h3>

                <p>Barang di Perjalanan</p>
              </div>
              <div class="icon">
                <i class="bi bi-truck"></i>
              </div>
              <a href="<?php echo base_url('admin/barangjalan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php $query = $this->db->query('SELECT * FROM tbl_barang WHERE status_barang = "DITERIMA DI LAMPUNG"'); ?>
                <h3><?php echo $query->num_rows() ?></h3>

                <p>Barang sampai di lampung</p>
              </div>
              <div class="icon">
                <i class="bi bi-geo-alt"></i>
              </div>
              <a href="<?php echo base_url('admin/baranglampung') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php $query = $this->db->query('SELECT * FROM tbl_barang WHERE status_barang = "BARANG SAMPAI DI TUJUAN"'); ?>
                <h3><?php echo $query->num_rows() ?></h3>

                <p>Barang Sampai di Tujuan</p>
              </div>
              <div class="icon">
                <i class="bi bi-check-circle"></i>
              </div>
              <a href="<?php echo base_url('admin/barangsampaipelanggan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  <?php $this->load->view('backend/template/footer') ?>

</div>
<!-- ./wrapper -->

<!-- JS -->
<?php $this->load->view('backend/template/js') ?>
</body>

</html>