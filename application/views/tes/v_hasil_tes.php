<div class="wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center" style="margin-top:120px;">
                    <div class="col-md-6">
                        <div class="text-center">
                            <h5>Hasil Tes & Rekomendasi Program Studi</h5>
                            <p class="text-muted">Selamat kamu telah menyelesaikan Tes Minat.</p>
                        </div>
                    </div>
                </div>

                <?php
                    foreach ($query as $rou) { //print_r($query);exit();
                ?>
                <div class="row">
                    <div class="col-lg-4 col-md-6  offset-lg-2">
                        <div class="pricing-box text-center bg-white mt-4 p-2">
                            <div class="pricing-title pt-4">
                                <div class="mb-5">
                                    <i class="mdi mdi-gauge-empty h1 text-primary"></i>
                                </div>
                                <h5 class="mt-0">Rekomendasi Program Studi 1</h5>
                                <p class="mt-0">Berdasarkan Tes Holland</p>
                            </div>
                            <div class="pt-3 pb-4">
                                <h3 class="price font-weight-normal">
                                    <?php echo ( $rou->rekomendasi_prodi1 == null ? "Belum Melakukan Tes" : $rou->rekomendasi_prodi1 ) ?>,
                                    <?php
                                        foreach ($queryIntrepretasi as $roq) {
                                    ?>
                                    <p><?php echo $roq->rekomendasi ; ?>:</p>
                                    <?php
                                        }
                                    ?>
                                </h3>
                            </div>
                            <!-- <div class="plan-features mb-4">
                                <p>10 GB Storage</p>
                                <p>500 GB Bandwidth</p>
                                <p>No Domain</p>
                                <p>1 User</p>
                                <p>Email Support</p>
                                <p class="mb-0">24 x 7 Support</p>
                            </div> -->
                            <!-- <div class="pt-3">
                                <a href="#" class="btn btn-primary btn-block">Join Now</a>
                            </div> -->
                        </div>
                    </div> 
                    <div class="col-lg-4 col-md-6  ">
                        <div class="pricing-box text-center bg-white mt-4 p-2">
                            <div class="pricing-title pt-4">
                                <div class="mb-5">
                                    <i class="mdi mdi-gauge-low h1 text-success"></i>
                                </div>
                                <h5 class="mt-0">Rekomendasi Program Studi 2</h5>
                                <p class="mt-0">Berdasarkan Tes Big Five</p>
                            </div>
                            <div class="pt-3 pb-4">
                                <h3 class="price font-weight-normal"><?php echo ($rou->rekomendasi_prodi2 == null ? "Belum Melakukan Tes" : $rou->rekomendasi_prodi2 ) ?></h3>
                            </div>
                            <!-- <div class="plan-features mb-4">
                                <p>10 GB Storage</p>
                                <p>500 GB Bandwidth</p>
                                <p>No Domain</p>
                                <p>1 User</p>
                                <p>Email Support</p>
                                <p class="mb-0">24 x 7 Support</p>
                            </div> -->
                            <!-- <div class="pt-3">
                                <a href="#" class="btn btn-success btn-block">Join Now</a>
                            </div>  -->
                        </div>
                    </div>   
                </div>
                <!-- end row -->
                <?php
                      }
                ?>
                <?php
                    foreach ($query as $rou) {
                ?>
                <div class="row">
                    <div class="col-10 offset-lg-1">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="invoice-title">
                                            <!-- <h4 class="float-right font-16"><strong>Order # 12345</strong></h4> -->
                                            <h6 class="m-t-0">
                                                <!-- <img src="assets/images/logo_dark.png" alt="logo" height="28"/> -->
                                                Keterangan
                                            </h6>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>Hasil tes berdasarkan tes Holland:</p>
                                                <address>
                                                    <strong>Realistic: &nbsp;</strong> <?php echo $rou->R_holland ; ?><br>
                                                    <strong>Investigative: &nbsp;</strong> <?php echo $rou->I_holland ; ?><br>
                                                    <strong>Artistic: &nbsp;</strong> <?php echo $rou->A_holland ; ?><br>
                                                    <strong>Social: &nbsp;</strong> <?php echo $rou->S_holland ; ?><br>
                                                    <strong>Enterprising: &nbsp;</strong> <?php echo $rou->E_holland ; ?><br>
                                                    <strong>Conventional: &nbsp;</strong> <?php echo $rou->C_holland ; ?><br>
                                                </address>
                                                <div class="pt-3">
                                                    <a href="<?php echo base_url() ?>Dashboard/tes_holland2" target="_blank" class="btn btn-primary btn-block">Ayok Cek Arti Istilah RIASEC</a>
                                                </div>
                                                <?php
                                                    foreach ($queryIntrepretasi as $rot) {
                                                ?>
                                                <div class="pt-3">
                                                    <p><?php echo $rot->deskripsi ; ?>:</p>
                                                </div>
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                            <div class="col-6">
                                                <p>Hasil tes berdasarkan tes Big Five:</p>
                                                <address>
                                                    <strong>Openness: &nbsp;</strong> <?php echo $rou->O ; ?><br>
                                                    <strong>Conscientiousness: &nbsp;</strong> <?php echo $rou->C ; ?><br>
                                                    <strong>Extraversion: &nbsp;</strong> <?php echo $rou->E ; ?><br>
                                                    <strong>Agreeableness: &nbsp;</strong> <?php echo $rou->A ; ?><br>
                                                    <strong>Neuroticism: &nbsp;</strong> <?php echo $rou->N ; ?><br><br>
                                                </address>
                                                <div class="pt-3">
                                                    <a href="<?php echo base_url() ?>Dashboard/tes_big_five1" target="_blank" class="btn btn-success btn-block">Ayok Cek Arti Istilah OCEAN</a>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- <div class="col-6 m-t-30">
                                                <address>
                                                    <strong>Nama Ayah: &nbsp;</strong> ?php echo $rou->nama_ayah ; ?><br>
                                                    <strong>Pekerjaan Ayah: &nbsp;</strong> ?php echo $rou->pekerjaan_ayah ; ?><br>
                                                    <strong>Penghasilan Ayah: &nbsp;</strong> ?php echo $rou->penghasilan_ayah ; ?><br>
                                                    <strong>Nama Ibu: &nbsp;</strong> ?php echo $rou->nama_ibu ; ?><br>
                                                    <strong>Pekerjaan Ibu: &nbsp;</strong> ?php echo $rou->pekerjaan_ibu ; ?><br>
                                                    <strong>Penghasilan Ibu: &nbsp;</strong> ?php echo $rou->penghasilan_ibu ; ?><br>
                                                </address>
                                            </div>
                                            <div class="col-6 m-t-30 ">
                                                <address>
                                                    <strong>Isi Tes Holland: &nbsp;</strong> ?php echo $rou->isi_tes_holland ; ?><br>
                                                    <strong>isi Tes Big Five: &nbsp;</strong> ?php echo $rou->isi_tes_bigfive ; ?><br>
                                                </address>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                <?php
                      }
                ?>
               
            </div> <!-- end container-fluid -->
        </div>
        <!-- end wrapper -->