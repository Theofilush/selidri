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

                <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <?php
                            $atribut = array();
                            echo form_open_multipart('Tes/savedok_tes_holland1',$atribut);
                            // echo form_hidden('pic',$bubi);
                    ?>
                        <div class="card m-b-30">
                            <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mt-0 header-title">Bagian 1</h4>
                                    <h6 class="m-t-10">Pilihlah "Suka" jika Anda suka Kegiatan tersebut, </h6>
                                    <h6>Pilihlah "Tidak Suka" jika anda tidak suka atau biasa saja (bersikap netral) mengenai kegiatan tersebut.</u></h6>
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
                                    $no=0;
                                        foreach($soalr1_awal as $row){
                                            $no++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $no.". ". $row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="radio icheck-emerland">
                                                <input type="radio" id="ra1<?php echo $no; ?>" name="r1<?php echo $no; ?>" value="1" required>
                                                <label for="ra1<?php echo $no; ?>"> Suka
                                                </label>
                                            </div>
                                            <div class="radio icheck-emerland">
                                                <input type="radio" id="rb1<?php echo $no; ?>" name="r1<?php echo $no; ?>" value="0" required>
                                                <label for="rb1<?php echo $no; ?>"> Tidak Suka
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                        }
                                    ?> 
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <?php 
                                        foreach($soalr1_akhir as $row){
                                            $batas_tengahR++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $batas_tengahR.". ".$row->soal; ?></p>
                                
                                    <div class="form-group">
                                        <div>
                                            <div class="radio icheck-emerland">
                                                <input type="radio" id="ra1<?php echo $batas_tengahR; ?>" name="r1<?php echo $batas_tengahR; ?>" value="1" required>
                                                <label for="ra1<?php echo $batas_tengahR; ?>"> Suka
                                                </label>
                                            </div>
                                            <div class="radio icheck-emerland">
                                                <input type="radio" id="rb1<?php echo $batas_tengahR; ?>" name="r1<?php echo $batas_tengahR; ?>" value="0" required>
                                                <label for="rb1<?php echo $batas_tengahR; ?>"> Tidak Suka
                                                </label>
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
                    </div> <!-- end col r-->

                    <div class="col-lg-8 offset-lg-2">
                        <div class="card m-b-30">
                            <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <?php 
                                    $no=0;
                                        foreach($soali1_awal as $row){
                                        $no++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $no.". ".$row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="radio icheck-peterriver">
                                                <input type="radio" id="ia1<?php echo $no; ?>" name="i1<?php echo $no; ?>" value="1" required>
                                                <label for="ia1<?php echo $no; ?>"> Suka
                                                </label>
                                            </div>
                                            <div class="radio icheck-peterriver">
                                                <input type="radio" id="ib1<?php echo $no; ?>" name="i1<?php echo $no; ?>" value="0" required>
                                                <label for="ib1<?php echo $no; ?>"> Tidak Suka
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    ?> 
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <?php 
                                        foreach($soali1_akhir as $row){
                                            $batas_tengahI++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $batas_tengahI.". ".$row->soal; ?></p>
                                
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-peterriver">
                                                <input type="radio" id="ia1<?php echo $batas_tengahI; ?>" name="i1<?php echo $batas_tengahI; ?>" value="1" required>
                                                <label for="ia1<?php echo $batas_tengahI; ?>"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-peterriver">
                                                <input type="radio" id="ib1<?php echo $batas_tengahI; ?>" name="i1<?php echo $batas_tengahI; ?>" value="0" required>
                                                <label for="ib1<?php echo $batas_tengahI; ?>"> Tidak Suka
                                                </label>
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
                    </div> <!-- end col i-->

                    <div class="col-lg-8 offset-lg-2">
                        <div class="card m-b-30">
                            <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <?php 
                                    $no=0;
                                        foreach($soala1_awal as $row){
                                        $no++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $no.". ".$row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-amethyst">
                                                <input type="radio" id="aa1<?php echo $no; ?>" name="a1<?php echo $no; ?>" value="1" required>
                                                <label for="aa1<?php echo $no; ?>"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-amethyst">
                                                <input type="radio" id="ab1<?php echo $no; ?>" name="a1<?php echo $no; ?>" value="0" required>
                                                <label for="ab1<?php echo $no; ?>"> Tidak Suka
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                        }
                                    ?> 
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <?php 
                                        foreach($soala1_akhir as $row){
                                            $batas_tengahA++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $batas_tengahA.". ".$row->soal; ?></p>
                                
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-amethyst">
                                                <input type="radio" id="aa1<?php echo $batas_tengahA; ?>" name="a1<?php echo $batas_tengahA; ?>" value="1" required>
                                                <label for="aa1<?php echo $batas_tengahA; ?>"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-amethyst">
                                                <input type="radio" id="ab1<?php echo $batas_tengahA; ?>" name="a1<?php echo $batas_tengahA; ?>" value="0" required>
                                                <label for="ab1<?php echo $batas_tengahA; ?>"> Tidak Suka
                                                </label>
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
                    </div> <!-- end col a -->

                    <div class="col-lg-8 offset-lg-2">
                        <div class="card m-b-30">
                            <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <?php 
                                    $no=0;
                                        foreach($soals1_awal as $row){
                                            $no++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $no.". ".$row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-belizehole">
                                                <input type="radio" id="sa1<?php echo $no; ?>" name="s1<?php echo $no; ?>" value="1" required>
                                                <label for="sa1<?php echo $no; ?>"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-belizehole">
                                                <input type="radio" id="sb1<?php echo $no; ?>" name="s1<?php echo $no; ?>" value="0" required>
                                                <label for="sb1<?php echo $no; ?>"> Tidak Suka
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                        }
                                    ?> 
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <?php 
                                        foreach($soals1_akhir as $row){
                                            $batas_tengahS++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $batas_tengahS.". ".$row->soal; ?></p>
                                
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-belizehole">
                                                <input type="radio" id="sa1<?php echo $batas_tengahS; ?>" name="s1<?php echo $batas_tengahS; ?>" value="1" required>
                                                <label for="sa1<?php echo $batas_tengahS; ?>"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-belizehole">
                                                <input type="radio" id="sb1<?php echo $batas_tengahS; ?>" name="s1<?php echo $batas_tengahS; ?>" value="0" required>
                                                <label for="sb1<?php echo $batas_tengahS; ?>"> Tidak Suka
                                                </label>
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
                    </div> <!-- end col s -->

                    <div class="col-lg-8 offset-lg-2">
                        <div class="card m-b-30">
                            <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <?php $no=0;
                                        foreach($soale1_awal as $row){
                                            $no++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $no.". ".$row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-wetasphalt">
                                                <input type="radio" id="ea1<?php echo $no; ?>" name="e1<?php echo $no; ?>" value="1" required>
                                                <label for="ea1<?php echo $no; ?>"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-wetasphalt">
                                                <input type="radio" id="eb1<?php echo $no; ?>" name="e1<?php echo $no; ?>" value="0" required>
                                                <label for="eb1<?php echo $no; ?>"> Tidak Suka
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
                                            $batas_tengahE++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $batas_tengahE.". ". $row->soal; ?></p>
                                
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-wetasphalt">
                                                <input type="radio" id="ea1<?php echo $batas_tengahE; ?>" name="e1<?php echo $batas_tengahE; ?>" value="1" required>
                                                <label for="ea1<?php echo $batas_tengahE; ?>"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-wetasphalt">
                                                <input type="radio" id="eb1<?php echo $batas_tengahE; ?>" name="e1<?php echo $batas_tengahE; ?>" value="0" required>
                                                <label for="eb1<?php echo $batas_tengahE; ?>"> Tidak Suka
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
                                    <?php $no=0;
                                        foreach($soalc1_awal as $row){
                                            $no++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $no.". ".$row->soal; ?></p>
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-alizarin">
                                                <input type="radio" id="ca1<?php echo $no; ?>" name="c1<?php echo $no; ?>" value="1" required>
                                                <label for="ca1<?php echo $no; ?>"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-alizarin">
                                                <input type="radio" id="cb1<?php echo $no; ?>" name="c1<?php echo $no; ?>" value="0" required>
                                                <label for="cb1<?php echo $no; ?>"> Tidak Suka
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    ?> 
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <?php 
                                        foreach($soalc1_akhir as $row){
                                            $batas_tengahC++;
                                    ?>  
                                    <p class="text-muted m-b-10"><?php echo $batas_tengahC.". ".$row->soal; ?></p>
                                
                                    <div class="form-group">
                                        <div>
                                            <div class="icheck-alizarin">
                                                <input type="radio" id="ca1<?php echo $batas_tengahC; ?>" name="c1<?php echo $batas_tengahC; ?>" value="1" required>
                                                <label for="ca1<?php echo $batas_tengahC; ?>"> Suka
                                                </label>
                                            </div>
                                            <div class="icheck-alizarin">
                                                <input type="radio" id="cb1<?php echo $batas_tengahC; ?>" name="c1<?php echo $batas_tengahC; ?>" value="0" required>
                                                <label for="cb1<?php echo $batas_tengahC; ?>"> Tidak Suka
                                                </label>
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
                                            <button type="submit" class="btn btn-primary btn-lg btn-block waves-effect m-b-5" name="btnUpload" value="Upload">Lanjut ke bagian 2</button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                    <?php
                        echo form_close();
                    ?>
                </div> <!-- end row -->

            </div> <!-- end container-fluid -->
        </div>
        <!-- end wrapper -->