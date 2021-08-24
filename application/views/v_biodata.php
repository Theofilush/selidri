<div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <!-- <h4 class="page-title m-0">Biodata</h4> -->
                                </div>
                                <!-- <div class="col-md-4">
                                    <div class="float-right d-none d-md-block">
                                        <div class="dropdown">
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
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-8 offset-lg-2">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <?php
                                            foreach ($query as $rou) { //print_r($query);exit();
                                ?>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="invoice-title">
                                            <!-- <h4 class="float-right font-16"><strong>Order # 12345</strong></h4> -->
                                            <h3 class="m-t-0">
                                                <!-- <img src="assets/images/logo_dark.png" alt="logo" height="28"/> -->
                                                Biodata
                                            </h3>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <address>
                                                    <strong>NIK: &nbsp;</strong> <?php echo $rou->nik ; ?><br>
                                                    <strong>Nama Lengkap: &nbsp;</strong> <?php echo $rou->nama ; ?><br>
                                                    <strong>No. Handphone: &nbsp;</strong> <?php echo $rou->no_handphone ; ?><br>
                                                    <strong>Email: &nbsp;</strong> <?php echo $rou->email ; ?><br>
                                                    <strong>Asal Sekolah: &nbsp;</strong> <?php echo $rou->asal_sekolah ; ?><br>
                                                </address>
                                            </div>
                                            <div class="col-6">
                                                <address>
                                                    <strong>Program Studi Pilihanmu: &nbsp;</strong> <?php echo $rou->prodi_pilihan ; ?><br>
                                                </address>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 m-t-30">
                                                <address>
                                                    <strong>Nama Ayah: &nbsp;</strong> <?php echo $rou->nama_ayah ; ?><br>
                                                    <strong>Pekerjaan Ayah: &nbsp;</strong> <?php echo $rou->pekerjaan_ayah ; ?><br>
                                                    <strong>Penghasilan Ayah: &nbsp;</strong> <?php echo $rou->penghasilan_ayah ; ?><br>
                                                    <strong>Nama Ibu: &nbsp;</strong> <?php echo $rou->nama_ibu ; ?><br>
                                                    <strong>Pekerjaan Ibu: &nbsp;</strong> <?php echo $rou->pekerjaan_ibu ; ?><br>
                                                    <strong>Penghasilan Ibu: &nbsp;</strong> <?php echo $rou->penghasilan_ibu ; ?><br>
                                                </address>
                                            </div>
                                            <div class="col-6 m-t-30 ">
                                                <address>
                                                    <strong>Isi Tes Holland: &nbsp;</strong> <?php echo $rou->isi_tes_holland ; ?><br>
                                                    <strong>isi Tes Big Five: &nbsp;</strong> <?php echo $rou->isi_tes_bigfive ; ?><br>
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- end container-fluid -->
        </div>
        <!-- end wrapper -->