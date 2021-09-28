<?php foreach ($queryCekSudahIsiTes as $key) { $isiTesHolland = $key->isi_tes_holland; $isiTesBigFive = $key->isi_tes_bigfive; } ?>
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
        
        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- &copy; --> <script>
                            document.write(new Date().getFullYear())
                        </script> Universitas Pembangunan Jaya <span class="d-none d-md-inline-block"> - <i class="mdi mdi-heart text-danger"></i> Kenali Kemampuan dan Bakatmu untuk masa depan lebih cerah</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/modernizr.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/waves.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.js"></script>

        <!--Morris Chart-->
        <!-- <script src="<php echo base_url() ?>assets/plugins/morris/morris.min.js"></script>
        <script src="<php echo base_url() ?>assets/plugins/raphael/raphael.min.js"></script> -->

        <!-- dashboard js -->
        <script src="<?php echo base_url() ?>assets/pages/dashboard.int.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url() ?>assets/js/app.js"></script>

    </body>
</html>