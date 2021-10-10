<div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title m-0">Tes Holland</h4>
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
                <?php
                            $atribut = array();
                            echo form_open_multipart('Tes/savedok_tes_holland3',$atribut);
                            // echo form_hidden('pic',$bubi);
                    ?>
                <div class="row">
                <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                                    <h4 class="page-title m-0">Bagian 3</h4>
                                    <h6 class="m-t-10">Daftar di bawah ini menggambarkan perasaan dan sikap Anda terhadap bermacam pekerjaan. </h6>
                                    <h6> Pada setiap pekerjaan pilihlah "Ya", bila pekerjaan tersebut, <u>Anda sukai atau menarik bagi Anda</u>. </h6>
                                    <h6>Pilihlah "Tidak", bila Anda merasa perkejaan tersebut <u>tidak Anda sukai atau tidak menarik bagi Anda. </u></h6>
                            </div>
                        </div>
                    </div> <!-- end col -->

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
                                            <div class="icheck-wetasphalt">
                                                <input type="radio" id="ra3<?php echo $no; ?>" name="r3<?php echo $no; ?>" value="1" required>
                                                <label for="ra3<?php echo $no; ?>"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-wetasphalt">
                                                <input type="radio" id="rb3<?php echo $no; ?>" name="r3<?php echo $no; ?>" value="0" required>
                                                <label for="rb3<?php echo $no; ?>"> Tidak suka
                                                </label>
                                            </div>
                                        </div>
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
                                            <div class="icheck-peterriver">
                                                <input type="radio" id="ia3<?php echo $no; ?>" name="i3<?php echo $no; ?>" value="1" required>
                                                <label for="ia3<?php echo $no; ?>"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-peterriver">
                                                <input type="radio" id="ib3<?php echo $no; ?>" name="i3<?php echo $no; ?>" value="0" required>
                                                <label for="ib3<?php echo $no; ?>"> Tidak suka
                                                </label>
                                            </div>
                                        </div>
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
                                            <div class="icheck-greensea">
                                                <input type="radio" id="aa3<?php echo $no; ?>" name="a3<?php echo $no; ?>" value="1" required>
                                                <label for="aa3<?php echo $no; ?>"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-greensea">
                                                <input type="radio" id="ab3<?php echo $no; ?>" name="a3<?php echo $no; ?>" value="0" required>
                                                <label for="ab3<?php echo $no; ?>"> Tidak suka
                                                </label>
                                            </div>
                                        </div>
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
                                            <div class="icheck-clouds">
                                                <input type="radio" id="sa3<?php echo $no; ?>" name="s3<?php echo $no; ?>" value="1" required>
                                                <label for="sa3<?php echo $no; ?>"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-clouds">
                                                <input type="radio" id="sb3<?php echo $no; ?>" name="s3<?php echo $no; ?>" value="0" required>
                                                <label for="sb3<?php echo $no; ?>"> Tidak suka
                                                </label>
                                            </div>
                                        </div>
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
                                            <div class="icheck-carrot">
                                                <input type="radio" id="ea3<?php echo $no; ?>" name="e3<?php echo $no; ?>" value="1" required>
                                                <label for="ea3<?php echo $no; ?>"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-carrot">
                                                <input type="radio" id="eb3<?php echo $no; ?>" name="e3<?php echo $no; ?>" value="0" required>
                                                <label for="eb3<?php echo $no; ?>"> Tidak suka
                                                </label>
                                            </div>
                                        </div>
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
                                            <div class="icheck-pomegranate">
                                                <input type="radio" id="ca3<?php echo $no; ?>" name="c3<?php echo $no; ?>" value="1" required>
                                                <label for="ca3<?php echo $no; ?>"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-pomegranate">
                                                <input type="radio" id="cb3<?php echo $no; ?>" name="c3<?php echo $no; ?>" value="0" required>
                                                <label for="cb3<?php echo $no; ?>"> Tidak suka
                                                </label>
                                            </div>
                                        </div>
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
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-primary btn-lg btn-block waves-effect m-b-5" name="btnUpload" value="Upload"> Selesaikan tes holland</button>
                                            <!-- <button type="reset" class="btn btn-secondary btn-lg btn-block waves-effect m-b-5">
                                                Cancel
                                            </button> -->
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                <?php
                        echo form_close();
                ?>

            </div> <!-- end container-fluid -->
        </div>
        <!-- end wrapper -->