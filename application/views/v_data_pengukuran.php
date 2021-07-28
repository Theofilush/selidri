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
                                    <h4 class="page-title m-0">Data Pengukuran</h4>
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
                            <h4 class="page-title">Tes Holland</h4>
                            <table id="datatable_soal_holland" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Bagian Soal</th>
                                            <th>Kelompok</th>
                                            <th>Bagian</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 0; 
                                            foreach($queryHolland as $row){
                                                $no++;
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row->soal; ?></td>
                                            <td><?php echo $row->kelompok; ?></td>
                                            <td><?php echo $row->bagian; ?></td>
                                            <td>
                                                <a type="button" href="<?php echo site_url(); ?>Pengelolaan/edit_data_pengukuran_holland/<?php echo $row->id_soal; ?>" class="btn btn-primary btn-xs" ><span class="mdi mdi-pencil"></span></a> 
                                                <a href="<?php echo site_url(); ?>edit_data_pengukuran_holland/<?php echo $row->id_soal; ?>" class="btn btn-danger btn-xs btnnomargin" onClick="return doconfirm();"><i class="mdi mdi-delete"></i></a> 
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
                            <h4 class="page-title">Tes Big Five</h4>
                            <table id="datatable_soal_bigfive" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Bagian Soal</th>
                                            <th>Kelompok</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 0; 
                                            foreach($queryBigFive as $row){
                                                $no++;
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row->soal; ?></td>
                                            <td><?php echo $row->kelompok; ?></td>
                                            <td>
                                                <a type="button" href="<?php echo site_url(); ?>Pengelolaan/edit_data_pengukuran_bigfive/<?php echo $row->id_soal; ?>" class="btn btn-primary btn-xs" ><span class="mdi mdi-pencil"></span></a> 
                                                <a href="<?php echo site_url(); ?>/Pengelolaan/edit_data_pengukuran_bigfive/<?php echo $row->id_soal; ?>" class="btn btn-danger btn-xs btnnomargin" onClick="return doconfirm();"><i class="mdi mdi-delete"></i></a> 
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