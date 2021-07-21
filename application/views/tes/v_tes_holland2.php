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
                            echo form_open_multipart('Tes/savedok_tes_holland2',$atribut);
                            // echo form_hidden('pic',$bubi);
                    ?>
                <div class="row">
                    
                        <div class="col-lg-8 offset-lg-2">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Bagian 2</h4>
                                    <h6 class="m-t-10">Pilihlah "Ya" untuk kegiatan yang <u>mampu Anda lakukan dengan baik</u>.</h6>
                                    <h6> Pilihlah "Tidak" untuk kegiatan yang <u>tidak pernah Anda lakukan atau tidak mampu Anda lakukan dengan baik</u></h6>
                                </div>
                            </div>
                        </div> <!-- end col -->

                    <div class="col-lg-8 offset-lg-2">
                        <div class="card m-b-30">
                            <div class="card-body">
                                    <?php 
                                    $no = 0 ;
                                        foreach($soalr2_bagian2 as $row){
                                            $no++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $no.". ". $row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="ra2<?php echo $no; ?>" name="r2<?php echo $no; ?>" value="1" required>
                                                <label for="ra2<?php echo $no; ?>"> Ya
                                                </label>
                                            </div>
                                            <div class="icheck-primary">
                                                <input type="radio" id="rb2<?php echo $no; ?>" name="r2<?php echo $no; ?>" value="0" required>
                                                <label for="rb2<?php echo $no; ?>"> Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    ?> 
                            </div>
                        </div>
                    </div> <!-- end col r --> 

                    <div class="col-lg-8 offset-lg-2">
                        <div class="card m-b-30">
                            <div class="card-body">
                                    <?php 
                                    $no = 0 ;
                                        foreach($soali2_bagian2 as $row){
                                            $no++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $no.". ".$row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-sunflower">
                                                <input type="radio" id="ia2<?php echo $no; ?>" name="i2<?php echo $no; ?>" value="1" required>
                                                <label for="ia2<?php echo $no; ?>"> Ya
                                                </label>
                                            </div>
                                            <div class="icheck-sunflower">
                                                <input type="radio" id="ib2<?php echo $no; ?>" name="i2<?php echo $no; ?>" value="0" required>
                                                <label for="ib2<?php echo $no; ?>"> Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    ?> 
                            </div>
                        </div>
                    </div> <!-- end col i --> 

                    <div class="col-lg-8 offset-lg-2">
                        <div class="card m-b-30">
                            <div class="card-body">
                                    <?php 
                                    $no = 0;
                                        foreach($soala2_bagian2 as $row){
                                            $no++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $no.". ".$row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-orange">
                                                <input type="radio" id="aa2<?php echo $no; ?>" name="a2<?php echo $no; ?>" value="1" required>
                                                <label for="aa2<?php echo $no; ?>"> Ya
                                                </label>
                                            </div>
                                            <div class="icheck-orange">
                                                <input type="radio" id="ab2<?php echo $no; ?>" name="a2<?php echo $no; ?>" value="0" required>
                                                <label for="ab2<?php echo $no; ?>"> Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    ?> 
                            </div>
                        </div>
                    </div> <!-- end col a --> 

                    <div class="col-lg-8 offset-lg-2">
                        <div class="card m-b-30">
                            <div class="card-body">
                                    <?php 
                                    $no = 0;
                                        foreach($soals2_bagian2 as $row){
                                            $no++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $no.". ".$row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-wisteria">
                                                <input type="radio" id="sa2<?php echo $no; ?>" name="s2<?php echo $no; ?>" value="1" required>
                                                <label for="sa2<?php echo $no; ?>"> Ya
                                                </label>
                                            </div>
                                            <div class="icheck-wisteria">
                                                <input type="radio" id="sb2<?php echo $no; ?>" name="s2<?php echo $no; ?>" value="0" required>
                                                <label for="sb2<?php echo $no; ?>"> Tidak
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
                    
                    <div class="col-lg-8 offset-lg-2">
                        <div class="card m-b-30">
                            <div class="card-body">
                                    <?php 
                                    $no = 0;
                                        foreach($soale2_bagian2 as $row){
                                            $no++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $no.". ".$row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-alizarin">
                                                <input type="radio" id="ea2<?php echo $no; ?>" name="e2<?php echo $no; ?>" value="1" required>
                                                <label for="ea2<?php echo $no; ?>"> Ya
                                                </label>
                                            </div>
                                            <div class="icheck-alizarin">
                                                <input type="radio" id="eb2<?php echo $no; ?>" name="e2<?php echo $no; ?>" value="0" required>
                                                <label for="eb2<?php echo $no; ?>"> Tidak
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
                    
                    <div class="col-lg-8 offset-lg-2">
                        <div class="card m-b-30">
                            <div class="card-body">
                                    <?php 
                                    $no= 0;
                                        foreach($soalc2_bagian2 as $row){
                                            $no++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $no.". ".$row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-turquoise">
                                                <input type="radio" id="ca2<?php echo $no; ?>" name="c2<?php echo $no; ?>" value="1" required>
                                                <label for="ca2<?php echo $no; ?>"> Ya
                                                </label>
                                            </div>
                                            <div class="icheck-turquoise">
                                                <input type="radio" id="cb2<?php echo $no; ?>" name="c2<?php echo $no; ?>"  value="0" required>
                                                <label for="cb2<?php echo $no; ?>"> Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    ?> 
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
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-primary btn-lg btn-block waves-effect m-b-5" name="btnUpload" value="Upload">Lanjut ke bagian terakhir</button>
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