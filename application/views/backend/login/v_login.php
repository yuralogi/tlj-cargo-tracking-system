<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $page_title ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins') ?>/fontawesome-free/css/all.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins') ?>/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/dist') ?>/css/adminlte.min.css">
    <link rel="shortcut icon" href="<?php echo base_url('assets/backend/dist') ?>/img/TLJ.png">
</head>

<body class="login-page">


    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a class="h1"><b>TLJCARGO</b>Admin</a>
            </div>
            <div class="card-body">


                <form action="<?php echo base_url() . 'auth' ?>" method="post">
                    <div class="input-group mb-3">
                        <input name="inputUsername" type="email" class="form-control" placeholder="Username" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="inputPassword" type="password" class="form-control" placeholder="Password" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4 float-right">
                            <button type="submit" class="btn btn-primary btn-block">
                                Sign In
                            </button>

                        </div>
                        <!-- /.col -->

                    </div>

                </form>

                <?php if ($this->session->flashdata('flash')) : ?>

                    <div class=" mt-2 alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Login Gagal!</strong> User Tidak Ditemukan
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <?php $this->load->view('backend/template/js') ?>
</body>

</html>