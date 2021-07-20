<div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title m-0">Tes Holland</h4>
                                    <h4 class="page-title m-0">Bagian 3</h4>
                                    <h6 class="m-t-10">Daftar di bawah ini menggambarkan perasaan dan sikap Anda terhadap bermacam pekerjaan. </h6>
                                    <h6> Pada setiap pekerjaan pilihlah "Ya", bila pekerjaan tersebut, <u>Anda sukai atau menarik bagi Anda</u>. </h6>
                                    <h6>Pilihlah "Tidak", bila Anda merasa perkejaan tersebut <u>tidak Anda sukai atau tidak menarik bagi Anda. </u></h6>
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
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-body">
                                        <?php 
                                        $no=0;
                                        foreach($soalr3_bagian3 as $row){
                                            $no++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $no.". ".$row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary1" name="r1">
                                                <label for="radioPrimary1"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary2" name="r1">
                                                <label for="radioPrimary2"> Tidak suka
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
                    </div> <!-- end col r-->

                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-body">
                                        <?php 
                                        $no =0;
                                        foreach($soali3_bagian3 as $row){
                                            $no++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $no.". ". $row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary1" name="r1">
                                                <label for="radioPrimary1"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary2" name="r1">
                                                <label for="radioPrimary2"> Tidak suka
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
                    </div> <!-- end col i-->

                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-body">
                                        <?php 
                                        $no=0;
                                        foreach($soala3_bagian3 as $row){
                                            $no++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $no.". ".$row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary1" name="r1">
                                                <label for="radioPrimary1"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary2" name="r1">
                                                <label for="radioPrimary2"> Tidak suka
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
                    </div> <!-- end col a-->

                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-body">
                                        <?php 
                                        $no=0;
                                        foreach($soals3_bagian3 as $row){
                                            $no++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $no.". ".$row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary1" name="r1">
                                                <label for="radioPrimary1"> SUka
                                                </label>
                                            </div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary2" name="r1">
                                                <label for="radioPrimary2"> Tidak suka
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
                    </div> <!-- end col s -->

                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-body">
                                        <?php 
                                        $no=0;
                                        foreach($soale3_bagian3 as $row){
                                            $no++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $no.". ".$row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary1" name="r1">
                                                <label for="radioPrimary1"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary2" name="r1">
                                                <label for="radioPrimary2"> Tidak suka
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
                    </div> <!-- end col e -->

                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-body">
                                        <?php 
                                        $no=0;
                                        foreach($soalc3_bagian3 as $row){
                                            $no++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $no.". ".$row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary1" name="r1">
                                                <label for="radioPrimary1"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="radioPrimary2" name="r1">
                                                <label for="radioPrimary2"> Tidak suka
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
                    </div> <!-- end col c-->

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
                                            <button type="reset" class="btn btn-primary btn-lg btn-block waves-effect m-b-5">
                                                Selesaikan tes holland
                                            </button>
                                            <!-- <button type="reset" class="btn btn-secondary btn-lg btn-block waves-effect m-b-5">
                                                Cancel
                                            </button> -->
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