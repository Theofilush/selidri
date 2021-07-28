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
                                    <h4 class="page-title m-0">Data Hasil</h4>
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
                            <table id="datatable_data_hasil" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Peserta</th>
                                            <th>Tanggal Tes</th>
                                            <th>Tes Holland</th>
                                            <th>Tes Holland</th>
                                            <th>Tes Big Five</th>
                                            <th>Pilihan Peserta</th>
                                            <th>Rekomendasi Tes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 0; 
                                            foreach($query as $row){
                                                $no++;
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row->nama; ?></td>
                                            <td><?php echo $row->tanggal; ?></td>
                                            <td>
                                                Realistic pertama: <?php echo $row->r1; ?><br>
                                                Realistic kedua: <?php echo $row->r2; ?><br>
                                                Realistic ketiga: <?php echo $row->r3; ?><br>
                                                <b>Total Realistic: <?php echo $row->r3; ?></b><br><br>

                                                Investigative pertama: <?php echo $row->r1; ?><br>
                                                Investigative kedua: <?php echo $row->r2; ?><br>
                                                Investigative ketiga: <?php echo $row->r3; ?><br>
                                                <b>Total Investigative: <?php echo $row->r3; ?></b><br><br>

                                                Artistic pertama: <?php echo $row->r1; ?><br>
                                                Artistic kedua: <?php echo $row->r2; ?><br>
                                                Artistic ketiga: <?php echo $row->r3; ?><br>
                                                <b>Total Artistic: <?php echo $row->r3; ?></b><br><br>
                                            </td>
                                            <td>
                                                Social pertama: <?php echo $row->r1; ?><br>
                                                Social kedua: <?php echo $row->r2; ?><br>
                                                Social ketiga: <?php echo $row->r3; ?><br>
                                                <b>Total Social: <?php echo $row->r3; ?></b><br><br>

                                                Enterprising pertama: <?php echo $row->r1; ?><br>
                                                Enterprising kedua: <?php echo $row->r2; ?><br>
                                                Enterprising ketiga: <?php echo $row->r3; ?><br>
                                                <b>Total Enterprising: <?php echo $row->r3; ?></b><br><br>

                                                Conventional pertama: <?php echo $row->r1; ?><br>
                                                Conventional kedua: <?php echo $row->r2; ?><br>
                                                Conventional ketiga: <?php echo $row->r3; ?><br>
                                                <b>Total Conventional: <?php echo $row->r3; ?></b><br><br>
                                            </td>                                            
                                            <td>
                                                Openness: <?php echo $row->O; ?><br>
                                                Conscientiousness: <?php echo $row->C; ?><br>
                                                Extroversion: <?php echo $row->E; ?><br>
                                                Agreeableness: <?php echo $row->A; ?><br>
                                                Neuroticism: <?php echo $row->N; ?><br><br>
                                            </td>
                                            <td><?php echo $row->prodi_pilihan; ?></td>
                                            <td>
                                                <div>
                                                    Rekomendasi 1: <?php echo $row->rekomendasi_prodi1; ?><br>
                                                    Rekomendasi 2: <?php echo $row->rekomendasi_prodi2; ?><br>
                                                    Rekomendasi 3: <?php echo $row->rekomendasi_prodi3; ?><br>
                                                </div>
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