
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

        <!-- Bootstrap rating js -->
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-rating/bootstrap-rating.min.js"></script>
        <script src="<?php echo base_url() ?>assets/pages/rating-init.js"></script>

        
        <!-- Required datatable js -->
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/jszip.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="<?php echo base_url(); ?>assets/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url() ?>assets/js/app.js"></script>
        <script>
            function doconfirm(){
                job=confirm("Are you sure to delete permanently?");
                if(job!=true){
                    return false;
                }
            }
        </script>

    </body>
</html>