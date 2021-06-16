<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Halaman Verifikasi</title>
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

        <div class="account-pages">
            
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-8">
                        <div class="card">
                            <div class="card-block">
            
                                <div class="ex-page-content text-center">
                                    <!-- <h1 class="text-primary">4<i class="far fa-smile text-success ml-1 mr-1"></i>4!</h1> -->
                                    <h4 class="">Selamat kamu telah memverifikasi akun kamu</h4><br>
            
                                    <a class="btn btn-primary mb-5 waves-effect waves-light" href="<?php echo site_url('login'); ?>">Kembali ke Halaman Login</a>
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