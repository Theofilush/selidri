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
                <?php
                            $atribut = array();
                            echo form_open_multipart('Tes/savedok_tes_bigfive',$atribut);
                            // echo form_hidden('pic',$bubi);
                ?>
                <div class="row">
                
                    <div class="col-lg-8 offset-lg-2">
                        <div class="card m-b-30">
                            <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h6 class="m-t-10">Daftar di bawah ini menggambarkan perasaan dan sikap Anda terhadap bermacam pekerjaan. </h6>
                                    <h6> Pada setiap pekerjaan pilihlah "Ya", bila pekerjaan tersebut, <u>Anda sukai atau menarik bagi Anda</u>. </h6>
                                    <h6>Pilihlah "Tidak", bila Anda merasa perkejaan tersebut <u>tidak Anda sukai atau tidak menarik bagi Anda. </u></h6>
                                    <h6>1 ceklis => Tidak setuju sekali</h6>
                                    <h6>2 ceklis => Tidak setuju</h6>
                                    <h6>3 ceklis => Netral</h6>
                                    <h6>4 ceklis => Setuju</h6>
                                    <h6>5 ceklis => Setuju sekali</h6>
                                </div>
                            </div>  
                            </div>
                        </div>
                    </div> <!-- end col -->
                
                    <div class="col-lg-8 offset-lg-2">
                        <div class="card m-b-30">
                            <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <?php 
                                    $no = 0;
                                        foreach($soalTBF_awal as $row){
                                            $no++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $no.". ". $row->soal; ?></p>
                                    <div class="form-group">
                                        <div style="display: flex;">
                                                <!-- <input name="TBF?php echo $no; ?>" type="hidden" class="rating" data-filled="mdi mdi-checkbox-marked font-32 text-primary" data-empty="mdi mdi-checkbox-blank-outline font-32 text-muted" value="0" required />  -->
                                                <div class="radio icheck-emerland" style="margin: auto 10px;">
                                                    <input type="radio" id="TBFv<?php echo $no; ?>" name="TBF<?php echo $row->kelompok.$no; ?>" value="1" required> 
                                                    <label for="TBFv<?php echo $no; ?>"> 1
                                                </div>
                                                <div class="radio icheck-emerland" style="margin: auto 10px;">
                                                    <input type="radio" id="TBFw<?php echo $no; ?>" name="TBF<?php echo $row->kelompok.$no; ?>" value="2" required> 
                                                    <label for="TBFw<?php echo $no; ?>"> 2
                                                </div>
                                                <div class="radio icheck-emerland" style="margin: auto 10px;">
                                                    <input type="radio" id="TBFx<?php echo $no; ?>" name="TBF<?php echo $row->kelompok.$no; ?>" value="3" required> 
                                                    <label for="TBFx<?php echo $no; ?>"> 3
                                                </div>
                                                <div class="radio icheck-emerland" style="margin: auto 10px;">
                                                    <input type="radio" id="TBFy<?php echo $no; ?>" name="TBF<?php echo $row->kelompok.$no; ?>" value="4" required> 
                                                    <label for="TBFy<?php echo $no; ?>"> 4
                                                </div>
                                                <div class="radio icheck-emerland" style="margin: auto 10px;">
                                                    <input type="radio" id="TBFz<?php echo $no; ?>" name="TBF<?php echo $row->kelompok.$no; ?>" value="5" required> 
                                                    <label for="TBFz<?php echo $no; ?>"> 5
                                                </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    ?> 
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <?php 
                                        foreach($soalTBF_akhir as $row){
                                            $batas_tengah++; 
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $batas_tengah.". ". $row->soal; ?></p>
                                
                                    <div class="form-group">
                                        <div style="display: flex;">
                                                <!-- <div class="radio icheck-emerland">
                                                    <input type="radio" id="ra1?php echo $batas_tengah; ?>" name="r1?php echo $batas_tengah; ?>" value="1" required>
                                                    <label for="ra1?php echo $batas_tengah; ?>"> Suka
                                                    </label>
                                                </div> -->
                                                <!-- <input name="TBF?php echo $batas_tengah; ?>" type="hidden" class="rating" data-filled="mdi mdi-checkbox-marked font-32 text-primary" data-empty="mdi mdi-checkbox-blank-outline font-32 text-muted"  required/>  -->
                                                <div class="radio icheck-emerland" style="margin: auto 10px;">
                                                    <input type="radio" id="TBFv<?php echo $batas_tengah; ?>" name="TBF<?php echo $row->kelompok.$batas_tengah; ?>" value="1" required> 
                                                    <label for="TBFv<?php echo $batas_tengah; ?>"> 1
                                                </div>
                                                <div class="radio icheck-emerland" style="margin: auto 10px;">
                                                    <input type="radio" id="TBFw<?php echo $batas_tengah; ?>" name="TBF<?php echo $row->kelompok.$batas_tengah; ?>" value="2" required> 
                                                    <label for="TBFw<?php echo $batas_tengah; ?>"> 2
                                                </div>
                                                <div class="radio icheck-emerland" style="margin: auto 10px;">
                                                    <input type="radio" id="TBFx<?php echo $batas_tengah; ?>" name="TBF<?php echo $row->kelompok.$batas_tengah; ?>" value="3" required> 
                                                    <label for="TBFx<?php echo $batas_tengah; ?>"> 3
                                                </div>
                                                <div class="radio icheck-emerland" style="margin: auto 10px;">
                                                    <input type="radio" id="TBFy<?php echo $batas_tengah; ?>" name="TBF<?php echo $row->kelompok.$batas_tengah; ?>" value="4" required> 
                                                    <label for="TBFy<?php echo $batas_tengah; ?>"> 4
                                                </div>
                                                <div class="radio icheck-emerland" style="margin: auto 10px;">
                                                    <input type="radio" id="TBFz<?php echo $batas_tengah; ?>" name="TBF<?php echo $row->kelompok.$batas_tengah; ?>" value="5" required> 
                                                    <label for="TBFz<?php echo $batas_tengah; ?>"> 5
                                                </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    ?> 
                                </div>
                            </div>  
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-12">
                        <div class="card m-b-30" style="background-color: #dfcdfa; border-color: #333;" >
                            <div class="card-body">
                                <!-- <h4 class="mt-0 header-title">Validation type</h4>
                                <p class="card-text m-b-30">Parsley is a javascript form validation
                                    library. It helps you provide your users with feedback on their form
                                    submission before sending it to your server.</p> -->
                                    <div class="form-group">
                                        <div>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block waves-effect m-b-5" name="btnUpload" value="Upload">Selesaikan Tes Big Five</button>
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