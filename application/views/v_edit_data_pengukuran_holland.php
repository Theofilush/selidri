<div class="wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div style="margin: 10px;">
                            <?php echo $this->session->flashdata('notification_password')?>
                        </div>
                    </div>
                </div>
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <!-- <h4 class="page-title m-0">Halaman Edit Soal Tes Holland</h4> -->
                                </div>
                                <div class="col-md-4">
                                    <div class="float-right d-none d-md-block">
                                        <!-- <div class="dropdown">
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
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
<?php 
foreach ($queryHolland as $rou) {
                                        $atribut = array();
                                        echo form_open('Pengelolaan/update_data_pengukuran_holland/',$atribut);
                                        echo form_hidden('id_soal',$rou->id_soal);
                                    ?>
                <div class="row">
                    <div class="col-xl-8 offset-lg-2">
                        <div class="card">
                            <div class="card-body">
                                    <h4 class="mt-0 header-title" style="margin-bottom:20px;">Halaman Edit Soal Tes Holland</h4>
                                    <!-- <p class="text-muted m-b-30 font-14">Here are examples of <code
                                            class="highlighter-rouge">.form-control</code> applied to each
                                        textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code
                                                class="highlighter-rouge">type</code>.</p> -->
                                    
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Soal</label>
                                        <div class="col-sm-9">
                                            <input name="soal" class="form-control" type="text" value="<?php echo $rou->soal ?>" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-sm-2 col-form-label">Kelompok</label>
                                        <div class="col-sm-3">
                                            <select name="kelompok" class="form-control">
                                                <option value="r" <?php if ($rou->kelompok == "r" ) { echo "selected";} ?>>R - Realistic</option>
                                                <option value="i" <?php if ($rou->kelompok == "i" ) { echo "selected";} ?>>I - Investigative</option>
                                                <option value="a" <?php if ($rou->kelompok == "a" ) { echo "selected";} ?>>A - Artistic</option>
                                                <option value="s" <?php if ($rou->kelompok == "s" ) { echo "selected";} ?>>S - Social</option>
                                                <option value="e" <?php if ($rou->kelompok == "e" ) { echo "selected";} ?>>E - Enterprising</option>
                                                <option value="c" <?php if ($rou->kelompok == "c" ) { echo "selected";} ?>>C - Conventional</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-email-input" class="col-sm-2 col-form-label">Bagian</label>
                                        <div class="col-sm-3">
                                            <select name="bagian" class="form-control">
                                                <option value="1" <?php if ($rou->bagian == "1") { echo "selected";} ?>>1</option>
                                                <option value="2" <?php if ($rou->bagian == "2") { echo "selected";} ?>>2</option>
                                                <option value="3" <?php if ($rou->bagian == "3") { echo "selected";} ?>>3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-xl-8 offset-lg-2">
                        <div class="card m-b-30" style="background-color: #dfcdfa; border-color: #333;" >
                            <div class="card-body">
                                <!-- <h4 class="mt-0 header-title">Validation type</h4>
                                <p class="card-text m-b-30">Parsley is a javascript form validation
                                    library. It helps you provide your users with feedback on their form
                                    submission before sending it to your server.</p> -->
                                    <div class="form-group">
                                        <div>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block waves-effect m-b-5" name="btnSimpan" value="Simpan">Simpan</button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
<?php
                                    echo form_close();
 }
?>

            </div> <!-- end container-fluid -->
        </div>
        <!-- end wrapper -->