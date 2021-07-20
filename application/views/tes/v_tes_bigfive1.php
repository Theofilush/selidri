<div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title m-0">Tes Bigfive</h4>
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
                    <div class="col-lg-8 offset-lg-2">
                        <div class="card m-b-30">
                            <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <?php 
                                        foreach($soalTBF_awal as $row){
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary1" name="r1">
                                                <label for="radioPrimary1"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary2" name="r1">
                                                <label for="radioPrimary2"> Tidak Suka
                                                </label>
                                            </div>
                                        </div>
                                        <!-- <div class="m-t-10">
                                            <input type="password" class="form-control" required
                                                   data-parsley-equalto="#pass2"
                                                   placeholder="Re-Type Password"/>
                                        </div> -->
                                    </div>

                                    <?php
                                        }
                                    ?> 
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <?php 
                                        foreach($soalTBF_akhir as $row){
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $row->soal; ?></p>
                                
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary1" name="r1">
                                                <label for="radioPrimary1"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary2" name="r1">
                                                <label for="radioPrimary2"> Tidak Suka
                                                </label>
                                            </div>
                                        </div>
                                        <!-- <div class="m-t-10">
                                            <input type="password" class="form-control" required
                                                   data-parsley-equalto="#pass2"
                                                   placeholder="Re-Type Password"/>
                                        </div> -->
                                    </div>
                                    <?php
                                        }
                                    ?> 
                                </div>
                            </div>  
                            </div>
                        </div>
                    </div> <!-- end col r-->

                    <div class="col-lg-8 offset-lg-2">
                        <div class="card m-b-30">
                            <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <?php 
                                        foreach($soali1_awal as $row){
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary1" name="r1">
                                                <label for="radioPrimary1"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary2" name="r1">
                                                <label for="radioPrimary2"> Tidak Suka
                                                </label>
                                            </div>
                                        </div>
                                        <!-- <div class="m-t-10">
                                            <input type="password" class="form-control" required
                                                   data-parsley-equalto="#pass2"
                                                   placeholder="Re-Type Password"/>
                                        </div> -->
                                    </div>

                                    <?php
                                        }
                                    ?> 
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <?php 
                                        foreach($soali1_akhir as $row){
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $row->soal; ?></p>
                                
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary1" name="r1">
                                                <label for="radioPrimary1"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary2" name="r1">
                                                <label for="radioPrimary2"> Tidak Suka
                                                </label>
                                            </div>
                                        </div>
                                        <!-- <div class="m-t-10">
                                            <input type="password" class="form-control" required
                                                   data-parsley-equalto="#pass2"
                                                   placeholder="Re-Type Password"/>
                                        </div> -->
                                    </div>
                                    <?php
                                        }
                                    ?> 
                                </div>
                            </div>  
                            </div>
                        </div>
                    </div> <!-- end col i-->

                    <div class="col-lg-8 offset-lg-2">
                        <div class="card m-b-30">
                            <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <?php 
                                        foreach($soala1_awal as $row){
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary1" name="r1">
                                                <label for="radioPrimary1"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary2" name="r1">
                                                <label for="radioPrimary2"> Tidak Suka
                                                </label>
                                            </div>
                                        </div>
                                        <!-- <div class="m-t-10">
                                            <input type="password" class="form-control" required
                                                   data-parsley-equalto="#pass2"
                                                   placeholder="Re-Type Password"/>
                                        </div> -->
                                    </div>

                                    <?php
                                        }
                                    ?> 
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <?php 
                                        foreach($soala1_akhir as $row){
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $row->soal; ?></p>
                                
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary1" name="r1">
                                                <label for="radioPrimary1"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary2" name="r1">
                                                <label for="radioPrimary2"> Tidak Suka
                                                </label>
                                            </div>
                                        </div>
                                        <!-- <div class="m-t-10">
                                            <input type="password" class="form-control" required
                                                   data-parsley-equalto="#pass2"
                                                   placeholder="Re-Type Password"/>
                                        </div> -->
                                    </div>
                                    <?php
                                        }
                                    ?> 
                                </div>
                            </div>  
                            </div>
                        </div>
                    </div> <!-- end col a -->

                    <div class="col-lg-8 offset-lg-2">
                        <div class="card m-b-30">
                            <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <?php 
                                        foreach($soals1_awal as $row){
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary1" name="r1">
                                                <label for="radioPrimary1"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary2" name="r1">
                                                <label for="radioPrimary2"> Tidak Suka
                                                </label>
                                            </div>
                                        </div>
                                        <!-- <div class="m-t-10">
                                            <input type="password" class="form-control" required
                                                   data-parsley-equalto="#pass2"
                                                   placeholder="Re-Type Password"/>
                                        </div> -->
                                    </div>

                                    <?php
                                        }
                                    ?> 
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <?php 
                                        foreach($soals1_akhir as $row){
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $row->soal; ?></p>
                                
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary1" name="r1">
                                                <label for="radioPrimary1"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary2" name="r1">
                                                <label for="radioPrimary2"> Tidak Suka
                                                </label>
                                            </div>
                                        </div>
                                        <!-- <div class="m-t-10">
                                            <input type="password" class="form-control" required
                                                   data-parsley-equalto="#pass2"
                                                   placeholder="Re-Type Password"/>
                                        </div> -->
                                    </div>
                                    <?php
                                        }
                                    ?> 
                                </div>
                            </div>  
                            </div>
                        </div>
                    </div> <!-- end col e -->

                    <div class="col-lg-8 offset-lg-2">
                        <div class="card m-b-30">
                            <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <?php 
                                        foreach($soale1_awal as $row){
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary1" name="r1">
                                                <label for="radioPrimary1"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary2" name="r1">
                                                <label for="radioPrimary2"> Tidak Suka
                                                </label>
                                            </div>
                                        </div>
                                        <!-- <div class="m-t-10">
                                            <input type="password" class="form-control" required
                                                   data-parsley-equalto="#pass2"
                                                   placeholder="Re-Type Password"/>
                                        </div> -->
                                    </div>

                                    <?php
                                        }
                                    ?> 
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <?php 
                                        foreach($soale1_akhir as $row){
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $row->soal; ?></p>
                                
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary1" name="r1">
                                                <label for="radioPrimary1"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary2" name="r1">
                                                <label for="radioPrimary2"> Tidak Suka
                                                </label>
                                            </div>
                                        </div>
                                        <!-- <div class="m-t-10">
                                            <input type="password" class="form-control" required
                                                   data-parsley-equalto="#pass2"
                                                   placeholder="Re-Type Password"/>
                                        </div> -->
                                    </div>
                                    <?php
                                        }
                                    ?> 
                                </div>
                            </div>  
                            </div>
                        </div>
                    </div> <!-- end col e -->

                    <div class="col-lg-8 offset-lg-2">
                        <div class="card m-b-30">
                            <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <?php 
                                        foreach($soalc1_awal as $row){
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary1" name="r1">
                                                <label for="radioPrimary1"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary2" name="r1">
                                                <label for="radioPrimary2"> Tidak Suka
                                                </label>
                                            </div>
                                        </div>
                                        <!-- <div class="m-t-10">
                                            <input type="password" class="form-control" required
                                                   data-parsley-equalto="#pass2"
                                                   placeholder="Re-Type Password"/>
                                        </div> -->
                                    </div>

                                    <?php
                                        }
                                    ?> 
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <?php 
                                        foreach($soalc1_akhir as $row){
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $row->soal; ?></p>
                                
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary1" name="r1">
                                                <label for="radioPrimary1"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary2" name="r1">
                                                <label for="radioPrimary2"> Tidak Suka
                                                </label>
                                            </div>
                                        </div>
                                        <!-- <div class="m-t-10">
                                            <input type="password" class="form-control" required
                                                   data-parsley-equalto="#pass2"
                                                   placeholder="Re-Type Password"/>
                                        </div> -->
                                    </div>
                                    <?php
                                        }
                                    ?> 
                                </div>
                            </div>  
                            </div>
                        </div>
                    </div> <!-- end col c -->

                    <div class="col-lg-12">
                        <div class="card m-b-30" style="background-color: #dfcdfa; border-color: #333;" >
                            <div class="card-body">

                                <!-- <h4 class="mt-0 header-title">Validation type</h4>
                                <p class="card-text m-b-30">Parsley is a javascript form validation
                                    library. It helps you provide your users with feedback on their form
                                    submission before sending it to your server.</p> -->

                                <form class="" action="<?php echo site_url(); ?>Tes/tes_holland/2" method="post">
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-primary btn-lg btn-block waves-effect m-b-5">
                                                Lanjut ke bagian 2
                                            </button>  
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div> <!-- end col -->


                </div> <!-- end row -->

            </div> <!-- end container-fluid -->
        </div>
        <!-- end wrapper -->