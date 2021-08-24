<div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title m-0">Biodata</h4>
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
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <!-- 
                                <h4 class="mt-0 header-title">Textual inputs</h4>
                                <p class="text-muted m-b-30 font-14">Here are examples of <code
                                        class="highlighter-rouge">.form-control</code> applied to each
                                    textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code
                                            class="highlighter-rouge">type</code>.</p> -->
                                <?php
                                    $atribut = array();
                                    echo form_open_multipart('Tes/savedok_tes_holland1',$atribut);
                                    // echo form_hidden('pic',$bubi);
                                ?>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-10">
                                        <input name="nik" class="form-control" type="text" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input name=nama_lengkap"" class="form-control" type="search" id="example-search-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input name="email" class="form-control" type="email"bootstrap@example.com"" id="example-email-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-url-input" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-10">
                                        <input name="tempat_lahir" class="form-control" type="url" id="example-url-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input name="tanggal_lahir" class="form-control" type="tel" id="example-tel-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">No. Handphone</label>
                                    <div class="col-sm-10">
                                        <input name="no_handphone" class="form-control" type="text" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Nama Ayah</label>
                                    <div class="col-sm-10">
                                        <input name="nama_ayah" class="form-control" type="text" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
                                    <div class="col-sm-10">
                                        <input name="pekerjaan_ayah" class="form-control" type="text" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Penghasilan Ayah</label>
                                    <div class="col-sm-10">
                                        <input name="penghasilan_ayah" class="form-control" type="text" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Nama Ibu</label>
                                    <div class="col-sm-10">
                                        <input name="nama_ibu" class="form-control" type="text" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
                                    <div class="col-sm-10">
                                        <input name="pakerjaan_ibu" class="form-control" type="text" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Penghasilan Ibu</label>
                                    <div class="col-sm-10">
                                        <input name="penghasilan_ibu" class="form-control" type="text" id="example-text-input">
                                    </div>
                                </div>

                                <button type="reset" class="btn btn-info btn-lg waves-effect waves-light" name="btnReset" value="Reset">Reset</button>
                                <button type="submit" class="btn btn-info btn-lg waves-effect waves-light" name="btnSimpan" value="Simpan">Finish</button>
                                <?php
                                    echo form_close();
                                ?>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- end container-fluid -->
        </div>
        <!-- end wrapper -->