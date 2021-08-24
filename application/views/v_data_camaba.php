<div class="wrapper">
            <div class="container-fluid">

                <!-- <div class="row">
                    <div class="col-sm-12">
                        <div style="margin: 10px;">
                            ?php echo $this->session->flashdata('notification_password')?>
                        </div>
                    </div>
                </div> -->
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title m-0">Manajemen Pengguna</h4>
                                    <?php echo $this->session->flashdata('notification_password')?>
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

                <!-- end row -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="page-title">
                                Peserta Tes
                                <a type="button" href="<?php echo site_url(); ?>Pengelolaan/data_camaba_tambah1" class="btn btn-sm btn-success btn-xs" ><span class="mdi mdi-plus"></span> Tambah Peserta </a>
                            </h4>
                            <table id="datatable_mnj_peserta" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>No Handphone</th>
                                            <th>Asal Sekolah</th>
                                            <th>Prodi Yang Dipilih</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 0; 
                                            foreach($queryTampilCamaba as $row){
                                                $no++;
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row->nama; ?></td>
                                            <td><?php echo $row->email; ?></td>
                                            <td><?php echo $row->no_handphone; ?></td>
                                            <td><?php echo $row->asal_sekolah; ?></td>
                                            <td><?php echo $row->prodi_pilihan; ?></td>
                                            <td>
                                                <small>Sudah isi Tes Hollnad: <?php echo $row->isi_tes_holland; ?></small><br>
                                                <small>Sudah isi Tes Big Five: <?php echo $row->isi_tes_bigfive; ?></small>
                                            <td>
                                                <a type="button" href="<?php echo site_url(); ?>Pengelolaan/data_camaba_detail1/<?php echo $row->no; ?>" class="btn btn-sm btn-primary btn-xs" ><span class="mdi mdi-pencil"></span> Detail Data Diri</a> 
                                                <a href="<?php echo site_url(); ?>Pengelolaan/data_camaba_hapus1/<?php echo $row->no; ?>" class="btn btn-sm btn-danger btn-xs btnnomargin" onClick="return doconfirm();"><i class="mdi mdi-delete"></i></a> 
                                            </td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="page-title">
                                Pengguna Dosen
                                <a type="button" href="<?php echo site_url(); ?>Pengelolaan/data_camaba_tambah2" class="btn btn-sm btn-success btn-xs" ><span class="mdi mdi-plus"></span> Tambah Dosen </a> 
                            </h4>
                            <table id="datatable_mnj_dosen" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 0; 
                                            foreach($queryTampilDosen as $row){
                                                $no++;
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row->nama; ?></td>
                                            <td><?php echo $row->email; ?></td>
                                            <td>
                                                <!-- <small>Sudah isi Tes Hollnad: <?php echo $row->isi_tes_holland; ?></small><br>
                                                <small>Sudah isi Tes Big Five: <?php echo $row->isi_tes_bigfive; ?></small> -->
                                            <td>
                                                <a type="button" href="<?php echo site_url(); ?>Pengelolaan/data_camaba_detail2/<?php echo $row->no; ?>" class="btn btn-sm btn-primary btn-xs" ><span class="mdi mdi-pencil"></span> </a> 
                                                <a href="<?php echo site_url(); ?>Pengelolaan/data_camaba_hapus2/<?php echo $row->no; ?>" class="btn btn-sm btn-danger btn-xs btnnomargin" onClick="return doconfirm();"><i class="mdi mdi-delete"></i></a> 
                                            </td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div> <!-- end container-fluid -->
        </div>
        <!-- end wrapper -->