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

            <!-- <?php if ($this->session->flashdata('flash')) : ?>

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Gagal!</strong> Pilih Minimal Satu Data
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?> -->

            <!--Flash Data -->
            <?php if ($this->session->userdata('role') == 1) : ?>
                <div class="btn-toolbar mb-2" role="toolbar" aria-label="toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Input Barang<i class="ml-2 bi bi-plus-circle"></i></button>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Input Data Barang</h5>


                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- form start -->
                            <form class="needs-validation" role="form" method="POST" action="<?php echo base_url() . 'admin/BarangJakarta/inputBarang'; ?>" novalidate>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="namaPengirim">Nama Pengirim</label>
                                        <input type="text" class="form-control" id="namaPengirim" name="namaPengirim" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Nama Pengirim Wajib di isi
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tlpPengirim">No Tlp Pengirim</label>
                                        <input type="text" class="form-control" id="tlpPengirim" name="tlpPengirim" placeholder="" required>
                                        <div class="invalid-feedback">
                                            No Telepon Wajib di isi
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="namaPenerima">Nama Penerima</label>
                                        <input type="text" class="form-control" id="namaPenerima" name="namaPenerima" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Nama Penerima Wajib di isi
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tlpPenerima">No Tlp Penerima</label>
                                        <input type="text" class="form-control" id="tlpPenerima" name="tlpPenerima" placeholder="" required>
                                        <div class="invalid-feedback">
                                            No Telepon Wajib di isi
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamatPenerima">Alamat Penerima</label>
                                        <input type="text" class="form-control" id="alamatPenerima" name="alamatPenerima" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Alamat Wajib di isi
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="namaBarang">Nama Barang</label>
                                        <input type="text" class="form-control" id="namaBarang" name="namaBarang" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Nama Barang Wajib di isi
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlahBarang">Jumlah</label>
                                        <input type="number" class=" form-control" id="jumlahBarang" name="jumlahBarang" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Jumlah Barang Wajib di isi
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenisPacking">Jenis Packing</label>
                                        <!-- <input type="text" class="form-control" id="jenisPacking" name="jenisPacking" placeholder="" required> -->
                                        <select class="custom-select" id="jeniPacking " name="jenisPacking" placeholder="Pilih Jenis Packing" required>
                                            <option selected></option>
                                            <option value="Colly">Colly</option>
                                            <option value="Kardus">Kardus</option>
                                            <option value="Karung">Karung</option>
                                            <option value="Pcs">Pcs</option>

                                        </select>



                                        <div class="invalid-feedback">
                                            Jenis Packing Wajib di isi
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary ml-3 float-right ">Submit</button>
                                    <button type=" button" class="btn btn-warning float-right">Kosongkan</button>

                                </div>
                                <!-- /.card-body -->
                            </form>

                        </div>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Barang Jakarta</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
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
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($db_tljcargo as $tlj) :
                                if ($tlj['status_barang'] == "SEDANG DIKIRIM") {
                                    continue;
                                } else if ($tlj['status_barang'] == "DITERIMA DI LAMPUNG") {
                                    continue;
                                } else if ($tlj['status_barang'] == "BARANG SAMPAI DI TUJUAN") {
                                    continue;
                                }
                            ?>
                                <tr>
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