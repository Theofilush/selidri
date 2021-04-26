<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Daftar Profile</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico">

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="<?php echo base_url() ?>assets/register/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url() ?>assets/register/css/material-bootstrap-wizard.css" rel="stylesheet" />
	<link href="<?php echo base_url() ?>assets/register/css/bootstrap-datepicker.min.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?php echo base_url() ?>assets/register/css/demo.css" rel="stylesheet" />
</head>

<body>
	<div class=" set-full-height" style="background: #f5f5f5; margin: 0; font-size: 13px; font-family: 'Open Sans, sans-serif;">
	    <!--   Creative Tim Branding   -->
	    <a href="http://creative-tim.com">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="<?php echo base_url() ?>assets/images/logo_upj_bulat.png">
	            </div>
	            <div class="brand" style="color: #000;">
	                Universitas Pembangunan Jaya
	            </div>
	        </div>
	    </a>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizardProfile">
		                    <form action="" method="">
		                <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        	   PENDAFTARAN CAMABA
		                        	</h3>
									<h5>Berikanlah informasi supaya kami mengetahui mengenaimu.</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#data_diri" data-toggle="tab">Data Diri</a></li>
			                            <li><a href="#data_sekolah" data-toggle="tab">Data Sekolah</a></li>
			                            <li><a href="#data_akademik" data-toggle="tab">Data Akademik</a></li>
			                            <li><a href="#data_pilprod" data-toggle="tab">Data Pilihan Prodi</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="data_diri">
		                              <div class="row">
		                                	<h4 class="info-text"> Perkenalkan pada kami lebih dekat dirimu disini</h4>
		                                	<div class="col-sm-4 col-sm-offset-1">
		                                    	<div class="picture-container">
		                                        	<div class="picture" style=" cursor: not-allowed;">
                                        				<img src="<?php echo base_url() ?>assets/register/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
		                                            	<input type="file" id="wizard-picture" style="cursor: not-allowed;" disabled>
		                                        	</div>
		                                        	<h6 style="cursor: not-allowed;">Choose Picture</h6>
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">record_voice_over</i>
													</span>
													<div class="form-group label-floating">
													  <label class="control-label">NIK* <small>(NIK KTP atau NIK individu dari KK)</small></label>
													  <input name="nik" type="text" class="form-control">
													</div>
												</div>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Nama Lengkap <small></small></label>
			                                          <input name="nama_lengkap" type="text" class="form-control">
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-10 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email</i>
													</span>
													<div class="form-group label-floating">
			                                            <label class="control-label">Email <small></small></label>
			                                            <input name="email" type="email" class="form-control">
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-10 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Tempat Lahir <small></small></label>
			                                          <input name="tempat_lahir" type="text" class="form-control">
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-10 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Tanggal Lahir <small></small></label>
			                                          <!-- <input name="tanggal_lahir" type="text" class="form-control">
			                                          <input type="text" class="form-control datepicker" value="10/10/2016" /> -->
			                                          <input type="text" class="form-control pull-right" id="datepicker" name="tanggal_lahir">
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-10 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Nomor Handphone <small></small></label>
			                                          <input name="nomor_handphone" type="text" class="form-control">
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Nama Ayah <small></small></label>
			                                          <input name="nama_ayah" type="text" class="form-control">
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-5">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Pekerjaan Ayah <small></small></label>
			                                          <input name="pekerjaan_ayah" type="text" class="form-control">
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Penghasilan Ayah <small></small></label>
			                                          <input name="penghasilan_ayah" type="text" class="form-control">
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Nama Ibu <small></small></label>
			                                          <input name="nama_ibu" type="text" class="form-control">
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-5">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Pekerjaan Ibu <small></small></label>
			                                          <input name="pekerjaan_ibu" type="text" class="form-control">
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Penghasilan Ibu <small></small></label>
			                                          <input name="penghasilan_ibu" type="text" class="form-control">
			                                        </div>
												</div>
		                                	</div>
		                              </div>
		                              <div class="row">
		                                    <div class="col-sm-12">
		                                        <h4 class="info-text"> Upload datamu disini </h4>
		                                    </div>
		                                    <div class="col-sm-4 col-sm-offset-2">
		                                        <div class="picture-container">
			                                        <div class="picture">
	                                        			<img src="<?php echo base_url() ?>assets/register/img/default-upload.png" class="picture-src" id="wizardPicturePreview2" title=""/>
			                                            <input type="file" id="wizard-picture2 upload" name="filepdf_akta" accept="application/pdf" />
			                                        </div>
			                                       	<h6>Upload Akta Lahir</h6>
			                                	</div>
		                                    </div>
		                                    <div class="col-sm-4">
		                                    	<div class="picture-container">
			                                        <div class="picture">
	                                        			<img src="<?php echo base_url() ?>assets/register/img/default-upload.png" class="picture-src" id="wizardPicturePreview3" title=""/>
			                                            <input type="file" id="wizard-picture3 upload" name="filepdf_raport" accept="application/pdf" />
			                                        </div>
			                                        <h6>Upload Nilai Raport</h6>
			                                    </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="data_sekolah">
		                                <!-- <h4 class="info-text"> What are you doing? (checkboxes) </h4> -->
		                                <div class="row">
		                                	<h4 class="info-text"> Kami ingin mengetahui lebih dalam mengenai dirimu, ayok perkenalkan dimana kamu bersekolah </h4>
		                                	<div class="col-sm-10 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">record_voice_over</i>
													</span>
													<div class="form-group label-floating">
													  <label class="control-label">Nama Sekolah <small></small></label>
													  <input name="nama_sekolah" type="text" class="form-control">
													</div>
												</div>
		                                	</div>
		                                	<div class="col-sm-10 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email</i>
													</span>
													<div class="form-group label-floating">
			                                            <label class="control-label">Alamat Sekolah <small></small></label>
			                                            <input name="alamat_sekolah" type="email" class="form-control">
			                                        </div>
												</div>
		                                	</div>
		                                	<!-- <div class="col-sm-10 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Status <small>(required)</small></label>
			                                          <input name="firstname" type="text" class="form-control">
			                                        </div>
												</div>
		                                	</div> -->
		                                	<div class="col-sm-10 col-sm-offset-1">
		                                		<div class="input-group">
			                                		<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
			                                        <div class="form-group label-floating">
			                                            <label class="control-label">Status</label>
		                                            	<select name="status_sekolah" class="form-control">
															<option disabled="" selected=""></option>
		                                                	<option value="Negeri"> Negeri </option>
		                                                	<option value="Swasta"> Swasta </option>
		                                            	</select>
			                                        </div>
			                                       </div>
		                                    </div>
		                                	<div class="col-sm-10 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Jenis Sekolah <small>(SMK / SMA / MA)</small></label>
			                                          <input name="jenis_sekolah" type="text" class="form-control">
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-10 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Kejuruan <small>(IPA/IPS/Teknik Komputer Jaringan/Rekayasa Perangkat Lunak/Akuntansi)</small></label>
			                                          <input name="kejuruan" type="text" class="form-control">
			                                        </div>
												</div>
		                                	</div>
		                              </div>
		                            </div>
		                            <div class="tab-pane" id="data_akademik">
		                                <!-- <h4 class="info-text"> What are you doing? (checkboxes) </h4> -->
		                                <div class="row">
		                                	<h4 class="info-text"> seberapa jauh minatmu pada mata pelajaran, ayok jabarkan nilaimu disini </h4>
		                                	<div class="col-sm-5 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">record_voice_over</i>
													</span>
													<div class="form-group label-floating">
													  <label class="control-label"> Nilai Agama <small></small></label>
													  <input name="nilai_agama" type="number" class="form-control">
													</div>
												</div>
		                                	</div>
		                                	<div class="col-sm-5">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                            <label class="control-label"> Nilai PKN <small></small></label>
			                                            <input name="nilai_pkn" type="number" class="form-control">
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label"> Nilai Matematika <small></small></label>
			                                          <input name="nilai_matematika" type="number" class="form-control">
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-5">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label"> Nilai Bahasa Inggris <small></small></label>
			                                          <input name="nilai_bhsinggris" type="number" class="form-control">
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label"> Nilai Bahasa Indonesia <small></small></label>
			                                          <input name="nilai_bhsindonesia" type="number" class="form-control">
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-5">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label"> Nilai Sejarah <small></small></label>
			                                          <input name="nilai_sejarah" type="number" class="form-control">
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label"> Nilai Kewirausahaan <small></small></label>
			                                          <input name="nilai_kewirausahaan" type="number" class="form-control">
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-5">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label"> Nilai Kejuruan <small></small></label>
			                                          <input name="nilai_kejuruan" type="number" class="form-control">
			                                        </div>
												</div>
		                                	</div>
		                              </div>
		                            </div>
		                            <div class="tab-pane" id="data_pilprod">
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <h4 class="info-text"> Kami ingin tau apa pilihan program studi kamu di Universitas Pembangunan Jaya</h4>
		                                    </div>
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                		<div class="input-group">
			                                		<span class="input-group-addon">
														<!-- <i class="material-icons">face</i> -->Pilihan Pertamamu
													</span>
			                                        <div class="form-group label-floating">
			                                            <label class="control-label">Prodi</label>
		                                            	<select name="status_sekolah" class="form-control">
															<option disabled="" selected=""></option>
		                                                	<option value="Negeri"> Negeri </option>
		                                                	<option value="Swasta"> Swasta </option>
		                                            	</select>
			                                        </div>
			                                       </div>
		                                    </div>
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                		<div class="input-group">
			                                		<span class="input-group-addon">
														<!-- <i class="material-icons">face</i> -->Pilihan Keduamu
													</span>
			                                        <div class="form-group label-floating">
			                                            <label class="control-label">Prodi</label>
		                                            	<select name="status_sekolah" class="form-control">
															<option disabled="" selected=""></option>
		                                                	<option value="Negeri"> Negeri </option>
		                                                	<option value="Swasta"> Swasta </option>
		                                            	</select>
			                                        </div>
			                                       </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
		                                <button type="submit" class="btn btn-finish btn-fill btn-success btn-wd" name="btnSimpan" value="Simpan">Finish</button>
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div><!-- end row -->
	    </div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	             <!-- &copy; --> <script>
                            document.write(new Date().getFullYear())
                        </script> Universitas Pembangunan Jaya <span> - <i class="fa fa-heart heart"></i> Kenali Kemampuan dan Bakatmu untuk masa depan lebih cerah</span>
	        </div>
	    </div>
	</div>

</body>

	<!--   Core JS Files   -->
    <script src="<?php echo base_url() ?>assets/register/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>assets/register/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>assets/register/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="<?php echo base_url() ?>assets/register/js/material-bootstrap-wizard.js"></script>
	<script src="<?php echo base_url() ?>assets/register/js/moment.min.js"></script>
	<script src="<?php echo base_url() ?>assets/register/js/bootstrap-datetimepicker.js"></script>
	<script src="<?php echo base_url() ?>assets/register/js/jquery.validate.min.js"></script>
	<script src="<?php echo base_url() ?>assets/register/js/bootstrap-datepicker.min.js"></script>

	<script type="text/javascript">
	    $(document).ready(function() {
	        demo.initFormExtendedDatetimepickers();
	    });

	    $("#datepicker").datepicker({
		      format: 'yyyy-mm-dd',
		      autoclose: true,
		      todayHighlight: true,
		});
	</script>
</html>
