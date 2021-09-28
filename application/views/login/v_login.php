<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Login Page</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico">

        <!-- App css -->
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>


    <body>

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <!-- <div class="home-btn d-none d-sm-block">
            <a href="index.html" class="text-dark"><i class="mdi mdi mdi-human-greeting h1"></i>Admin Page</a>
        </div> -->

        <div class="account-pages">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div>
                            <div >
                                <a href="index.html" class="logo logo-admin"><img src="<?php echo base_url() ?>assets/images/logo_upj.png" height="100" alt="logo"></a>
                            </div>
                            <h5 class="font-14 text-muted mb-4">Kenali Kemampuan dan Bakatmu untuk masa depan lebih cerah</h5>
                            <p class="text-muted mb-4">Proses pemilihan program studi biasanya didasarkan pada kemampuan minat dan bakat dari calon mahasiswa baru. Hal ini menjadi satu hal penting karena hasil dari pemilihan program studi akan berdampak pada keberlanjutan masa studi. <br>Calon mahasiswa yang benar-benar memahami kemampuan minat maupun bakatnya pada sebuah program studi akan merasa nyaman dalam menjalankan masa studinya, bahkan berpotensi untuk memperoleh hasil studi yang membanggakan.</p>
                            <h5 class="font-14 text-muted mb-4">Website atau sistem ini dapat digunakan untuk :</h5>
                            <div>
                                <p style="margin-bottom: 0.3rem;">Bagi calon mahasiswa baru :</p>
                                <p><i class="mdi mdi-arrow-right text-primary mr-2"></i>Acuan dalam pemilihan program studi oleh calon mahasiswa baru di Universitas Pembangunan Jaya</p>
                                <p><i class="mdi mdi-arrow-right text-primary mr-2"></i>Membantu calon mahasiswa baru dalam menentukan pilihan program studi yang sesuai dengan kemampuan minat dan bakat</p>

                                <p style="margin-bottom: 0.3rem;">Bagi prodi :</p>
                                <p><i class="mdi mdi-arrow-right text-primary mr-2"></i>Menggambarkan kriteria sebuah program studi yang ada di Universitas Pembangunan Jaya</p>
                                <p><i class="mdi mdi-arrow-right text-primary mr-2"></i>Memberikan gambaran awal bagi program studi untuk potensi yang dimiliki oleh calon mahasiswa baru</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="p-2">
                                    <?php echo $this->session->flashdata('notification')?>
                                </div>
                                <div class="p-2">
                                    <h4 class="text-muted float-right font-18 mt-4">Sign In</h4>
                                    <div>
                                        <a href="#" class="logo logo-admin"><img src="<?php echo base_url() ?>assets/images/logo_upj.png" height="100" alt="logo"></a>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal m-t-20" action="<?php echo site_url('login/aksi_login'); ?>" method="post">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input name="email" class="form-control" type="email" required="" placeholder="email">
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input name="password" class="form-control" type="password" required="" placeholder="Password">
                                            </div>
                                        </div>
        
                                        <!-- <div class="form-group row">
                                            <div class="col-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                                                </div>
                                            </div>
                                        </div> -->
        
                                        <div class="form-group text-center row m-t-20">
                                            <div class="col-12">
                                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                            </div>
                                        </div>
        
                                        <div class="form-group m-t-10 mb-0 row">
                                            <div class="col-sm-7 m-t-20">
                                                <!-- <a href="<?php echo site_url(); ?>Login/lupa_password" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a> -->
                                            </div>
                                            <div class="col-sm-5 m-t-20">
                                                <a href="<?php echo site_url(); ?>Register/buat_akun" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
        
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>



        <!-- jQuery  -->
        <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/modernizr.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/waves.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url() ?>assets/js/app.js"></script>

    </body>
</html>