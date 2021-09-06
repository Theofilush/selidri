<div class="wrapper"><?php foreach ($query as $key) { $isiTesHolland = $key->isi_tes_holland; $isiTesBigFive = $key->isi_tes_bigfive; } ?>
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title m-0">Tes Minat Bakat</h4>
                                </div>
                                 <!--<div class="col-md-4">
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
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <p class="text-muted m-b-30">Kedua Tes Penjurusan ini digunakan untuk mengetahui tipe kepribadian kamu, sehingga cocok dan sesuai untuk jurusan di kuliah nanti.</p>

                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                        <tr>
                                            <th width="10%">#</th>
                                            <th>Nama Tes</th>
                                            <th width="20%">Sudah Dikerjakan</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Tes Holland</td>
                                            <td>
                                                <?php if ($isiTesHolland == "sudah") { ?>
                                                    <i class="dripicons-checkmark"></i>
                                                <?php } ?> 
                                            </td>
                                            <td>
                                                <?php if ($isiTesHolland == "belum") {  ?>
                                                    <a href="<?php echo base_url() ?>Tes/tes_holland" type="button" class="btn btn-outline-primary waves-effect waves-light">Masuk</a>
                                                <?php }elseif ($isiTesHolland == "sudah") {
                                                    
                                                } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Test Big Five</td>
                                            <td>
                                                <?php if ($isiTesBigFive == "sudah") { ?>
                                                    <i class="dripicons-checkmark"></i>
                                                <?php } ?> 
                                            </td>
                                            <td>
                                               <?php if ($isiTesHolland == "sudah" && $isiTesBigFive == "belum") {  ?>
                                                    <a href="<?php echo base_url() ?>Tes/tes_bigfive" type="button" class="btn btn-outline-primary waves-effect waves-light">Masuk</a> 
                                               <?php } elseif ($isiTesHolland == "sudah" && $isiTesBigFive == "sudah") {
                                               
                                                } ?> 
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-12">
                        <div class="card m-b-30" style="background-color: #dfcdfa; border-color: #333;" >
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Halaman Hasil Tes akan muncul setelah kedua tes diatas telah diselesaikan</h4>
                                <!-- <form class="" action="#"> -->
                                    <div class="form-group">
                                        <div>
                                            <?php if ($isiTesHolland == "sudah" && $isiTesBigFive == "sudah") {  ?>
                                                <a href="<?php echo base_url() ?>Tes/hasil_tes" type="submit" class="btn btn-primary btn-lg btn-block waves-effect m-b-5">Submit</a>
                                            <?php } ?> 
                                        </div>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div> <!-- end col -->


                </div> <!-- end row -->

            </div> <!-- end container-fluid -->
        </div>
        <!-- end wrapper -->