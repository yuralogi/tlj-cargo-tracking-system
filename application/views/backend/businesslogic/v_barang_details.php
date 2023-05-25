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
                        <h1 class="m-0 text-dark"><?php echo $page_title ?></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
                            <li class="breadcrumb-item active"><?php echo $page_title ?></li>
                        </ol>
                    </div><!-- /.col -->
                </div>
            </div>
        </div>


        <!-- /.content-header -->

        <div class="card-body">
            <!--Flash Data -->
            <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>


            <!--Flash Data -->


            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Data Barang no Resi : <strong><?php echo $detail->no_resi ?></strong> </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <h5>No Resi : <strong><?php echo $detail->no_resi ?></strong></h5>
                    <h5>Nama Pengirim : <strong><?php echo $detail->nama_pengirim ?></strong> </h5>
                    <h5>No Tlp Pengirim : <strong><?php echo $detail->tlp_pengirim ?></strong> </h5>
                    <h5>Nama Penerima : <strong><?php echo $detail->nama_penerima ?></strong> </h5>
                    <h5>No Tlp Penerima : <strong><?php echo $detail->tlp_penerima ?></strong> </h5>
                    <h5>Alamat Penerima :<strong><?php echo $detail->alamat_penerima ?></strong> </h5>
                    <h5>Nama Barang : <strong><?php echo $detail->nama_barang ?></strong></h5>
                    <h5>Jumlah : <strong><?php echo $detail->jumlah_barang ?></strong></h5>
                    <h5>Waktu Terima (di Jakarta) : <strong><?php echo $detail->waktu_terima ?></strong></h5>
                    <h5>Waktu Sampai di Pelanggan : <strong><?php echo $detail->waktu_sampai ?></strong> </h5>
                    <h5>Status Perjalan : <strong><?php echo $detail->status_barang ?></strong></h5>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- Footer -->
    </div>
    <?php $this->load->view('backend/template/footer') ?>
</div>
<!-- ./wrapper -->

<!-- JS -->
<?php $this->load->view('backend/template/js') ?>
</body>

</html>