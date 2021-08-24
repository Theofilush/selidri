<div class="wrapper"><?php foreach($da as $row){ $id_peserta = $row->no; } ?>
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title m-0">Tambah Dosen </h4>
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
                    <div class="col-8 offset-lg-2">
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
                                    echo form_open_multipart('Pengelolaan/aksi_tambahUser2',$atribut);
                                    
                                ?>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-6">
                                        <input name="nama_lengkap" class="form-control" type="text" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-6">
                                        <input name="email" class="form-control" type="email" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">No Handphone</label>
                                    <div class="col-sm-6">
                                        <input name="no_handphone" class="form-control" type="text" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Password baru</label>
                                    <div class="col-sm-6">
                                        <input name="password" class="form-control" type="password" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Program studi</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" style="width: 100%" data-placeholder="Porgram Studi Pilihan" name="prodi_pilihan">
                                                        <option>Pilih Program Studi</option>
                                                        <option>Akuntansi</option>
                                                        <option>Manajemen</option>
                                                        <option>Psikologi</option>
                                                        <option>Ilmu Komunikasi</option>
                                                        <option>Desain Produk</option>
                                                        <option>Desain Komunikasi Visual</option>
                                                        <option>Informatika</option>
                                                        <option>Sistem Informasi</option>
                                                        <option>Teknik Sipil</option>
                                                        <option>Arsitektur</option>
										</select>
                                    </div>
                                </div>
                                
                                <div class="text-center">
                                    <button type="reset" class="btn btn-outline-dark btn-lg waves-effect waves-light" name="btnReset" value="Reset">Reset</button>
                                    <button type="submit" class="btn btn-success btn-lg waves-effect waves-light" name="btnSimpan" value="Simpan">Finish</button>
                                </div>
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