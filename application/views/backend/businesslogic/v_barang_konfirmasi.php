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
            <form action="<?php echo base_url() . 'admin/konfirmasibarang/confirmBarang'; ?>" method="POST">
                <?php if ($this->session->userdata('role') == 2) : ?>
                    <div class=" btn-toolbar mb-2" role="toolbar" aria-label="toolbar with button groups">
                        <div class=" btn-group mr-2" role="group" aria-label="First group">
                            <button id="btnAdminLampung" type="submit" name="confirmBtn" class=" btn btn-primary" data-toggle="modal" data-target="#">Konfirmasi<i class="ml-2 bi bi-send"></i></button>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo $sub_title ?></h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th>Pilih Barang</th>
                                <th>No</th>
                                <th>No Resi</th>
                                <th>Nama Pengirim</th>
                                <th>Nama Penerima</th>
                                <th>Alamat Penerima</th>
                                <th>Nama Barang</th>
                                <th>Jmlah</th>
                                <!-- <th>Cara Packing</th> -->
                                <th>Status</th>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($db_tljcargo as $tlj) :
                                    if ($tlj['status_barang'] == "DITERIMA DI JAKARTA") {
                                        continue;
                                    } else if ($tlj['status_barang'] == "DITERIMA DI LAMPUNG") {
                                        continue;
                                    } else if ($tlj['status_barang'] == "BARANG SAMPAI DI TUJUAN") {
                                        continue;
                                    }
                                ?>
                                    <tr>
                                        <td class="text-center">
                                            <input type="checkbox" name="checkbox_value[]" value="<?php echo $tlj['id_barang']; ?>">
                                        </td>
                                        <td class="d-flex justify-content-center"><?php echo $no ?></td>
                                        <td><a href="<?php echo base_url('admin/barangdetails/detail/' . $tlj['no_resi']) ?>"><?php echo $tlj['no_resi'] ?></a></td>
                                        <td><?php echo $tlj['nama_pengirim'] ?></td>
                                        <td><?php echo $tlj['nama_penerima'] ?></td>
                                        <td><?php echo $tlj['alamat_penerima'] ?></td>
                                        <td><?php echo $tlj['nama_barang'] ?></td>
                                        <td><?php echo $tlj['jumlah_barang'], "\r", $tlj['cara_packing'] ?></td>
                                        <td><?php echo $tlj['status_barang'] ?></td>
                                    </tr>
                                <?php
                                    $no++;
                                endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Pilih Barang</th>
                                    <th>No</th>
                                    <th>No Resi</th>
                                    <th>Nama Pengirim</th>
                                    <th>Nama Penerima</th>
                                    <th>Alamat Penerima</th>
                                    <th>Nama Barang</th>
                                    <th>Jmlah</th>
                                    <!-- <th>Cara Packing</th> -->
                                    <th>Status</th>
                                </tr>
                            </tfoot>
                        </table>
            </form>
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