        <div class="wrapper"><?php foreach ($queryCekSudahIsiTes as $key) { $isiTesHolland = $key->isi_tes_holland; $isiTesBigFive = $key->isi_tes_bigfive; } ?>
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div style="margin: 10px;">
                            <?php echo $this->session->flashdata('notification_password')?>
                        </div>
                    </div>
                </div>
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title m-0">Dashboard</h4>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-right d-none d-md-block">
                                        <!-- <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti-settings mr-1"></i> Settings
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <!-- <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary mini-stat text-white">
                            <div class="p-3 mini-stat-desc">
                                <div class="clearfix">
                                    <h6 class="text-uppercase mt-0 float-left text-white-50">Orders</h6>
                                    <h4 class="mb-3 mt-0 float-right">1,587</h4>
                                </div>
                                <div>
                                    <span class="badge badge-light text-info"> +11% </span> <span class="ml-2">From previous period</span>
                                </div>
                                
                            </div>
                            <div class="p-3">
                                <div class="float-right">
                                    <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                </div>
                                <p class="font-14 m-0">Last : 1447</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-info mini-stat text-white">
                            <div class="p-3 mini-stat-desc">
                                <div class="clearfix">
                                    <h6 class="text-uppercase mt-0 float-left text-white-50">Revenue</h6>
                                    <h4 class="mb-3 mt-0 float-right">$46,785</h4>
                                </div>
                                <div>
                                    <span class="badge badge-light text-danger"> -29% </span> <span class="ml-2">From previous period</span>
                                </div>
                            </div>
                            <div class="p-3">
                                <div class="float-right">
                                    <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                                </div>
                                <p class="font-14 m-0">Last : $47,596</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-pink mini-stat text-white">
                            <div class="p-3 mini-stat-desc">
                                <div class="clearfix">
                                    <h6 class="text-uppercase mt-0 float-left text-white-50">Average Price</h6>
                                    <h4 class="mb-3 mt-0 float-right">15.9</h4>
                                </div>
                                <div>
                                    <span class="badge badge-light text-primary"> 0% </span> <span class="ml-2">From previous period</span>
                                </div>
                            </div>
                            <div class="p-3">
                                <div class="float-right">
                                    <a href="#" class="text-white-50"><i class="mdi mdi-tag-text-outline h5"></i></a>
                                </div>
                                <p class="font-14 m-0">Last : 15.8</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success mini-stat text-white">
                            <div class="p-3 mini-stat-desc">
                                <div class="clearfix">
                                    <h6 class="text-uppercase mt-0 float-left text-white-50">Product Sold</h6>
                                    <h4 class="mb-3 mt-0 float-right">1890</h4>
                                </div>
                                <div>
                                    <span class="badge badge-light text-info"> +89% </span> <span class="ml-2">From previous period</span>
                                </div>
                            </div>
                            <div class="p-3">
                                <div class="float-right">
                                    <a href="#" class="text-white-50"><i class="mdi mdi-briefcase-check h5"></i></a>
                                </div>
                                <p class="font-14 m-0">Last : 1776</p>
                            </div>
                        </div>
                    </div>
                </div>   -->
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mt-0" style="line-height:2">Selamat datang, pada aplikasi tes minat untuk menentukan pemilihan program studi di Universitas Pembangunan Jaya</h6>
                                <div class="row">
                                    <div class="col-lg-12">
                                    <p class="font-14" style="line-height:2">Aplikasi https://seleksi-maba.com melakukan proses pemilihan program studi yang didasarkan pada kemampuan minat dan bakat dari calon mahasiswa baru. Hal ini menjadi satu hal penting karena hasil dari pemilihan program studi akan berdampak pada keberlanjutan masa studi.
                                    Calon mahasiswa yang benar-benar memahami kemampuan minat maupun bakatnya pada sebuah program studi akan merasa nyaman dalam menjalankan masa studinya, bahkan berpotensi untuk memperoleh hasil studi yang membanggakan.
                                    </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p style="margin-bottom: 0.3rem;">Bagi calon mahasiswa baru :</p>
                                        <p style="margin-bottom: 5px;"><i class="mdi mdi-arrow-right text-primary mr-2"></i>Acuan dalam pemilihan program studi oleh calon mahasiswa baru di Universitas Pembangunan Jaya</p>
                                        <p style="margin-bottom: 5px;"><i class="mdi mdi-arrow-right text-primary mr-2"></i>Membantu calon mahasiswa baru dalam menentukan pilihan program studi yang sesuai dengan kemampuan minat dan bakat</p>

                                        <p style="margin-bottom: 0.3rem; margin-top:10px;">Bagi prodi :</p>
                                        <p style="margin-bottom: 5px;"><i class="mdi mdi-arrow-right text-primary mr-2"></i>Menggambarkan kriteria sebuah program studi yang ada di Universitas Pembangunan Jaya</p>
                                        <p style="margin-bottom: 5px;"><i class="mdi mdi-arrow-right text-primary mr-2"></i>Memberikan gambaran awal bagi program studi untuk potensi yang dimiliki oleh calon mahasiswa baru</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Program studi Pilihan kamu</h4>
                                <div class="text-center">
                                </div>
                                <?php
                                    foreach ($queryRekomendasi1 as $rok) {
                                ?>
                                <div class="row"> <!-- mt-5 -->
                                    <div class="col-md-12">
                                        <div class="social-source text-center mt-3">
                                            <div class="social-source-icon mb-2">
                                                <i class="mdi mdi-graphql h5 bg-dark text-white"></i>
                                            </div>
                                            <h6>
                                                <?php echo $rok->prodi_pilihan ; ?>
                                            </h6>
                                            <?php if ($isiTesHolland == "belum" || $isiTesBigFive == "belum") {  ?>
                                                <a href="<?php echo site_url() ?>Biodata/isi_biodata" class="text-primary font-14">Saya ingin mengubahnya <i class="mdi mdi-chevron-right"></i></a>
                                            <?php }  ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Rekomendasi Prodi</h4>
                                <div class="text-center">
                                    <!-- <div class="social-source-icon lg-icon mb-3">
                                        <i class="mdi mdi-facebook h2 bg-primary text-white"></i>
                                    </div> -->
                                    <p class="text-muted">Pengujian berdasarkan minat dan bakat direkomendasikan pada program pilihan berikut</p>
                                </div>
                                <?php
                                    foreach ($queryRekomendasi2 as $rou) {
                                ?>
                                <div class="row"> <!-- mt-5 -->
                                    <div class="col-md-6">
                                        <div class="social-source text-center mt-3">
                                            <div class="social-source-icon mb-2">
                                                <i class="mdi mdi-graphql h5 bg-primary text-white"></i>
                                            </div>
                                            <p class="font-14 text-muted mb-2">Pilihan 1 <br><small>(Tes Holland)</small> </p>
                                            <h6>
                                            <?php
                                                foreach ($queryRekomendasi1 as $roq) {
                                            ?>
                                            <?php echo $roq->rekomendasi ; ?>
                                            <?php
                                                }
                                            ?>
                                            </h6>
                                            <!-- <ul class="list-unstyled mb-0">
                                            <li>Desain Komunikasi Visual</li><li>Desain Produk</li></ul> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="social-source text-center mt-3">
                                            <div class="social-source-icon mb-2">
                                                <i class="mdi mdi-graphql h5 bg-pink text-white"></i>
                                            </div>
                                            <p class="font-14 text-muted mb-2">Pilihan 2 <br><small>(Tes Big Five)</small></p>
                                            <h6>
                                                <?php echo ($rou->rekomendasi_prodi2 == null ? "Belum Melakukan Tes" : $rou->rekomendasi_prodi2 ) ?>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Document files</h4>
                                <table class="table table-striped mb-0">
                                    <tbody>
                                        <tr>
                                            <td><i class="far fa-file-pdf text-primary h2"></i></td>
                                            <td>
                                                <h6 class="mt-0">2015</h6>
                                                <p class="text-muted mb-0">dolor sit amet</p></td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="far fa-file-pdf text-primary h2"></i></td>
                                            <td>
                                                <h6 class="mt-0">2016</h6>
                                                <p class="text-muted mb-0">dolor sit amet</p></td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="far fa-file-pdf text-primary h2"></i></td>
                                            <td>
                                                <h6 class="mt-0">2017</h6>
                                                <p class="text-muted mb-0">pretium quis</p></td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="far fa-file-pdf text-primary h2"></i></td>
                                            <td>
                                                <h6 class="mt-0">2018</h6>
                                                <p class="text-muted mb-0">ultricies nec</p></td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
    
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- end container-fluid -->
        </div>
        <!-- end wrapper -->