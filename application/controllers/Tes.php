<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		}
	}

	public function index(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);
		foreach($kue as $key){$kuee = $key;}
		$query = $this->M_dokumen->cekSudahIsiTesBigFive($kuee->no);

		$dataHalaman = array(
		  'title'=>"Mulai Tes",
			'da' => $kue,
			'query' => $query,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('tes/v_mulai_tes');
		$this->load->view('dashboard/v_footer');
	}

	public function tes_holland($key=""){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);

		if ($key == "") {
			$dataHalaman = array(
				'title'=>"Tes Holland",
				'da' => $kue,
			  );
			  $this->load->view('dashboard/v_header', $dataHalaman);
			  $this->load->view('tes/v_tes_holland');
			  $this->load->view('dashboard/v_footer');		  
		} elseif ($key == "1") {
			$totalBarisR1 =  $this->M_dokumen->totalBarisR1();
			//$soal_bagian1 =  $this->M_dokumen->tampil_soal_bagian_r1(); //menampilkan semua data
			$batas_tengahR = floor($totalBarisR1 / 2);
			$queryr1_awal =  $this->M_dokumen->queryr1_awal(0,$batas_tengahR);
			$queryr1_akhir =  $this->M_dokumen->queryr1_akhir($batas_tengahR , $totalBarisR1);

			$totalBarisI1 =  $this->M_dokumen->totalBarisI1();
			$batas_tengahI = floor($totalBarisI1 / 2);
			$queryi1_awal =  $this->M_dokumen->queryi1_awal(0, $batas_tengahI);
			$queryi1_akhir =  $this->M_dokumen->queryi1_akhir($batas_tengahI , $totalBarisI1);

			$totalBarisA1 =  $this->M_dokumen->totalBarisA1();
			$batas_tengahA = floor($totalBarisA1 / 2);
			$querya1_awal =  $this->M_dokumen->querya1_awal(0, $batas_tengahA);
			$querya1_akhir =  $this->M_dokumen->querya1_akhir($batas_tengahA , $totalBarisA1);

			$totalBarisS1 =  $this->M_dokumen->totalBarisS1();
			$batas_tengahS = floor($totalBarisS1 / 2);
			$querys1_awal =  $this->M_dokumen->querys1_awal(0, $batas_tengahS);
			$querys1_akhir =  $this->M_dokumen->querys1_akhir($batas_tengahS , $totalBarisS1);

			$totalBarisE1 =  $this->M_dokumen->totalBarisE1();
			$batas_tengahE = floor($totalBarisE1 / 2);
			$querye1_awal =  $this->M_dokumen->querye1_awal(0, $batas_tengahE);
			$querye1_akhir =  $this->M_dokumen->querye1_akhir($batas_tengahE , $totalBarisE1);

			$totalBarisC1 =  $this->M_dokumen->totalBarisC1();
			$batas_tengahC = floor($totalBarisC1 / 2);
			$queryc1_awal =  $this->M_dokumen->queryc1_awal(0, $batas_tengahC);
			$queryc1_akhir =  $this->M_dokumen->queryc1_akhir($batas_tengahC , $totalBarisC1);
			
			$dataHalaman = array(
				'title'=>"Dashboard",
				'da' => $kue,
				'soalr1_awal'=> $queryr1_awal,
				'soalr1_akhir'=> $queryr1_akhir,
				'batas_tengahR'=> $batas_tengahR,
				'soali1_awal'=> $queryi1_awal,
				'soali1_akhir'=> $queryi1_akhir,
				'batas_tengahI' => $batas_tengahI,
				'soala1_awal'=> $querya1_awal,
				'soala1_akhir'=> $querya1_akhir,
				'batas_tengahA' => $batas_tengahA ,
				'soals1_awal'=> $querys1_awal,
				'soals1_akhir'=> $querys1_akhir,
				'batas_tengahS' => $batas_tengahS,
				'soale1_awal'=> $querye1_awal,
				'soale1_akhir'=> $querye1_akhir,
				'batas_tengahE' => $batas_tengahE,
				'soalc1_awal'=> $queryc1_awal,
				'soalc1_akhir'=> $queryc1_akhir,
				'batas_tengahC' => $batas_tengahC,
			);
			
			$this->load->view('dashboard/v_header', $dataHalaman);
			$this->load->view('tes/v_tes_holland1');
			$this->load->view('dashboard/v_footer');
		} elseif ($key == "2") {
			$soalr2_bagian2 =  $this->M_dokumen->tampil_soal_bagian_r2(); //menampilkan semua data
			$soali2_bagian2 =  $this->M_dokumen->tampil_soal_bagian_i2();
			$soala2_bagian2 =  $this->M_dokumen->tampil_soal_bagian_a2();
			$soals2_bagian2 =  $this->M_dokumen->tampil_soal_bagian_s2();
			$soale2_bagian2 =  $this->M_dokumen->tampil_soal_bagian_e2();
			$soalc2_bagian2 =  $this->M_dokumen->tampil_soal_bagian_c2();
			$dataHalaman = array(
				'title'=>"Dashboard",
				'da' => $kue,
				'soalr2_bagian2' => $soalr2_bagian2,
				'soali2_bagian2' => $soali2_bagian2,
				'soala2_bagian2' => $soala2_bagian2,
				'soals2_bagian2' => $soals2_bagian2,
				'soale2_bagian2' => $soale2_bagian2,
				'soalc2_bagian2' => $soalc2_bagian2,
			);
			$this->load->view('dashboard/v_header', $dataHalaman);
			$this->load->view('tes/v_tes_holland2');
			$this->load->view('dashboard/v_footer');	
		} elseif ($key == "3") {
			$soalr3_bagian3 =  $this->M_dokumen->tampil_soal_bagian_r3(); //menampilkan semua data
			$soali3_bagian3 =  $this->M_dokumen->tampil_soal_bagian_i3();
			$soala3_bagian3 =  $this->M_dokumen->tampil_soal_bagian_a3();
			$soals3_bagian3 =  $this->M_dokumen->tampil_soal_bagian_s3();
			$soale3_bagian3 =  $this->M_dokumen->tampil_soal_bagian_e3();
			$soalc3_bagian3 =  $this->M_dokumen->tampil_soal_bagian_c3();
			$dataHalaman = array(
				'title'=>"Dashboard",
				'da' => $kue,
				'soalr3_bagian3' => $soalr3_bagian3,
				'soali3_bagian3' => $soali3_bagian3,
				'soala3_bagian3' => $soala3_bagian3,
				'soals3_bagian3' => $soals3_bagian3,
				'soale3_bagian3' => $soale3_bagian3,
				'soalc3_bagian3' => $soalc3_bagian3,
			  );
			  $this->load->view('dashboard/v_header', $dataHalaman);
			  $this->load->view('tes/v_tes_holland3');
			  $this->load->view('dashboard/v_footer');	
		}		
	}

	public function tes_bigfive($key=""){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);

		$totalBarisBigFive =  $this->M_dokumen->totalBarisBigFive();
		//$soal_bagian1 =  $this->M_dokumen->tampil_soal_bagian_r1(); //menampilkan semua data
		$batas_tengah = floor($totalBarisBigFive / 2);
		$queryTBF_awal =  $this->M_dokumen->queryTBF_awal(0,$batas_tengah);
		$queryTBF_akhir =  $this->M_dokumen->queryTBF_akhir($batas_tengah , $totalBarisBigFive);

		$dataHalaman = array(
			'title'=>"Tes Big Five",
			'da' => $kue,
			'soalTBF_awal'=> $queryTBF_awal,
			'soalTBF_akhir'=> $queryTBF_akhir,
			'batas_tengah'=> $batas_tengah,
		);
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('tes/v_tes_bigfive1');
		$this->load->view('dashboard/v_footer');

		/*if ($key == "") {
			$dataHalaman = array(
				'title'=>"Tes Big Five",		
				'da' => $kue,
			  );
			  $this->load->view('dashboard/v_header', $dataHalaman);
			  $this->load->view('tes/v_tes_bigfive');
			  $this->load->view('dashboard/v_footer');
		} else*/
		// if ($key == "1") {
			
		//} 
		/*elseif ($key == "2") {
			$dataHalaman = array(
				'title'=>"Dashboard",		
				'da' => $kue,
			  );
			  $this->load->view('dashboard/v_header', $dataHalaman);
			  $this->load->view('tes/v_tes_bigfive2');
			  $this->load->view('dashboard/v_footer');
		} elseif ($key == "3") {
			$dataHalaman = array(
				'title'=>"Dashboard",		
				'da' => $kue,
			  );
			  $this->load->view('dashboard/v_header', $dataHalaman);
			  $this->load->view('tes/v_tes_bigfive3');
			  $this->load->view('dashboard/v_footer');
		}*/
	}

	public function savedok_tes_holland1(){
		if($this->input->post('btnUpload') == "Upload"){			 
			$inputTxt2= $this->input->post(NULL, True);
			$jumlahR = 0;
			$jumlahI = 0;
			$jumlahA = 0;
			$jumlahS = 0;
			$jumlahE = 0;
			$jumlahC = 0;
			foreach ($inputTxt2 as $key => $value) {

				$filterInisial = str_split($key,1);
					
				if($filterInisial[0] == 'r'){
					$jumlahR += $value;
				}
				if($filterInisial[0] == 'i'){
					$jumlahI += $value;
				}
				if($filterInisial[0] == 'a'){
					$jumlahA += $value;
				}
				if($filterInisial[0] == 's'){
					$jumlahS += $value;
				}
				if($filterInisial[0] == 'e'){
					$jumlahE += $value;
				}
				if($filterInisial[0] == 'c'){
					$jumlahC += $value;
				}
			}
			// 	echo " jumlah R : $jumlahR <br>";
			// 	echo " jumlah I : $jumlahI <br>";
			// 	echo " jumlah A : $jumlahA <br>";
			// 	echo " jumlah S : $jumlahS <br>";
			// 	echo " jumlah E : $jumlahE <br>";
			// 	echo " jumlah C : $jumlahC <br>";
			// echo "<br><br><br>-------------------------------------<br>";

			// print_r($inputTxt2);exit();

			$data = array(
				'id_peserta'=> $this->session->userdata('id_peserta'),
				  'r1' => $jumlahR,
				  'i1' => $jumlahI,
				  'a1' => $jumlahA,
				  's1' => $jumlahS,
				  'e1' => $jumlahE,
				  'c1' => $jumlahC,
			);
			$query= $this->M_dokumen->save_tes_holland1($data, $id);
			   
			if ($query) {
				redirect(site_url('Tes/tes_holland/2'));
			}
			else{
				redirect(site_url('Tes/tes_holland/2'));
			}
		}
			  
	}

	public function savedok_tes_holland2(){
		if($this->input->post('btnUpload') == "Upload"){			 
			$inputTxt2= $this->input->post(NULL, True);
			$jumlahR = 0;
			$jumlahI = 0;
			$jumlahA = 0;
			$jumlahS = 0;
			$jumlahE = 0;
			$jumlahC = 0;
			foreach ($inputTxt2 as $key => $value) {

				$filterInisial = str_split($key,1);
					
				if($filterInisial[0] == 'r'){
					$jumlahR += $value;
				}
				if($filterInisial[0] == 'i'){
					$jumlahI += $value;
				}
				if($filterInisial[0] == 'a'){
					$jumlahA += $value;
				}
				if($filterInisial[0] == 's'){
					$jumlahS += $value;
				}
				if($filterInisial[0] == 'e'){
					$jumlahE += $value;
				}
				if($filterInisial[0] == 'c'){
					$jumlahC += $value;
				}
			}
			// 	echo " jumlah R : $jumlahR <br>";
			// 	echo " jumlah I : $jumlahI <br>";
			// 	echo " jumlah A : $jumlahA <br>";
			// 	echo " jumlah S : $jumlahS <br>";
			// 	echo " jumlah E : $jumlahE <br>";
			// 	echo " jumlah C : $jumlahC <br>";
			// echo "<br><br><br>-------------------------------------<br>";
			// print_r($inputTxt2);exit();

			$data = array(
				  'r2' => $jumlahR,
				  'i2' => $jumlahI,
				  'a2' => $jumlahA,
				  's2' => $jumlahS,
				  'e2' => $jumlahE,
				  'c2' => $jumlahC,
			);
			$id_peserta = $this->session->userdata('id_peserta');
			$query= $this->M_dokumen->save_update_tes_holland2($data, $id_peserta);
			   
			if ($query) {
				//$this->session->set_flashdata('notification', 'Penambahan Dokumen Akreditasi Berhasil');
				redirect(site_url('Tes/tes_holland/3'));
			}
			else{
				redirect(site_url('Tes/tes_holland/3'));
			}
		}
			  
	}

	public function savedok_tes_holland3(){
		if($this->input->post('btnUpload') == "Upload"){
			$id_peserta = $this->session->userdata('id_peserta');
			$inputTxt3= $this->input->post(NULL, True);
			$jumlahR = 0;
			$jumlahI = 0;
			$jumlahA = 0;
			$jumlahS = 0;
			$jumlahE = 0;
			$jumlahC = 0;
			
			foreach ($inputTxt3 as $key => $value) {
				$filterInisial = str_split($key,1);
				
				if($filterInisial[0] == 'r'){
					$jumlahR += $value;
				}
				if($filterInisial[0] == 'i'){
					$jumlahI += $value;
				}
				if($filterInisial[0] == 'a'){
					$jumlahA += $value;
				}
				if($filterInisial[0] == 's'){
					$jumlahS += $value;
				}
				if($filterInisial[0] == 'e'){
					$jumlahE += $value;
				}
				if($filterInisial[0] == 'c'){
					$jumlahC += $value;
				}
			}

			$data0 = array(
				'r3' => $jumlahR,
				'i3' => $jumlahI,
				'a3' => $jumlahA,
				's3' => $jumlahS,
				'e3' => $jumlahE,
				'c3' => $jumlahC,
		 	);

			$this->M_dokumen->save_update_tes_holland3($data0, $id_peserta); // untuk save data tes terbaru ke tabel jawaban

			$jumlahR1 =  $this->M_dokumen->jumlah_r1($id_peserta);
			$jumlahR2 =  $this->M_dokumen->jumlah_r2($id_peserta);
			$jumlahR3 =  $this->M_dokumen->jumlah_r3($id_peserta);
			$jumlahI1 =  $this->M_dokumen->jumlah_i1($id_peserta);
			$jumlahI2 =  $this->M_dokumen->jumlah_i2($id_peserta);
			$jumlahI3 =  $this->M_dokumen->jumlah_i3($id_peserta);
			$jumlahA1 =  $this->M_dokumen->jumlah_a1($id_peserta);
			$jumlahA2 =  $this->M_dokumen->jumlah_a2($id_peserta);
			$jumlahA3 =  $this->M_dokumen->jumlah_a3($id_peserta);
			$jumlahS1 =  $this->M_dokumen->jumlah_s1($id_peserta);
			$jumlahS2 =  $this->M_dokumen->jumlah_s2($id_peserta);
			$jumlahS3 =  $this->M_dokumen->jumlah_s3($id_peserta);
			$jumlahE1 =  $this->M_dokumen->jumlah_e1($id_peserta);
			$jumlahE2 =  $this->M_dokumen->jumlah_e2($id_peserta);
			$jumlahE3 =  $this->M_dokumen->jumlah_e3($id_peserta);
			$jumlahC1 =  $this->M_dokumen->jumlah_c1($id_peserta);
			$jumlahC2 =  $this->M_dokumen->jumlah_c2($id_peserta);
			$jumlahC3 =  $this->M_dokumen->jumlah_c3($id_peserta);

			foreach($jumlahR1 as $key){$jumlahR1 = $key;}
			foreach($jumlahR2 as $key){$jumlahR2 = $key;}
			foreach($jumlahR3 as $key){$jumlahR3 = $key;}
			foreach($jumlahI1 as $key){$jumlahI1 = $key;}
			foreach($jumlahI2 as $key){$jumlahI2 = $key;}
			foreach($jumlahI3 as $key){$jumlahI3 = $key;}
			foreach($jumlahA1 as $key){$jumlahA1 = $key;}
			foreach($jumlahA2 as $key){$jumlahA2 = $key;}
			foreach($jumlahA3 as $key){$jumlahA3 = $key;}
			foreach($jumlahS1 as $key){$jumlahS1 = $key;}
			foreach($jumlahS2 as $key){$jumlahS2 = $key;}
			foreach($jumlahS3 as $key){$jumlahS3 = $key;}
			foreach($jumlahE1 as $key){$jumlahE1 = $key;}
			foreach($jumlahE2 as $key){$jumlahE2 = $key;}
			foreach($jumlahE3 as $key){$jumlahE3 = $key;}
			foreach($jumlahC1 as $key){$jumlahC1 = $key;}
			foreach($jumlahC2 as $key){$jumlahC2 = $key;}
			foreach($jumlahC3 as $key){$jumlahC3 = $key;}

			$totalR = $jumlahR1->r1 + $jumlahR2->r2 + $jumlahR3->r3 ;
			$totalI = $jumlahI1->i1 + $jumlahI2->i2 + $jumlahI3->i3 ;
			$totalA = $jumlahA1->a1 + $jumlahA2->a2 + $jumlahA3->a3 ;
			$totalS = $jumlahS1->s1 + $jumlahS2->s2 + $jumlahS3->s3 ;
			$totalE = $jumlahE1->e1 + $jumlahE2->e2 + $jumlahE3->e3 ;
			$totalC = $jumlahC1->c1 + $jumlahC2->c2 + $jumlahC3->c3 ;
			
			$data0 = array(
				'R_holland' => $totalR,
				'I_holland' => $totalI,
				'A_holland' => $totalA,
				'S_holland' => $totalS,
				'E_holland' => $totalE,
				'C_holland' => $totalC,
		 	);

			$query= $this->M_dokumen->save_update_tes_holland3($data0, $id_peserta); // untuk save data tes terbaru ke tabel jawaban
			
			$total= array("R"=>$totalR, "I"=>$totalI, "A"=>$totalA, "S"=>$totalS, "E"=>$totalE, "C"=>$totalC); //menyimpan array dan mengurutkan hasil yang terbaru
			arsort($total);

			$type_peserta = "";
			$urutanKe3 = 0 ;
			foreach ($total as $row => $value) {
				$type_peserta .= $row;
				if ($urutanKe3 >= 2) { break; }
				$urutanKe3++;
			}

			$prodi_pilihan =  $this->M_dokumen->ambil_prodi_pilihan($id_peserta); // mengambil prodi pilihan calon mahasiswa
			$kode_acuan_prodi =  $this->M_dokumen->ambil_kode_acuan_prodi($id_peserta); // mengambil seluruh kode acuan prodi yang banyak itu

			foreach ($prodi_pilihan as $key => $value) { $prodi = $value->prodi_pilihan; $txtProdi = $value->prodi_pilihan; } //memunculkan variabel spesifik prodi pilihan

			if ($prodi == "Akuntansi" ) { $prodi = 'akuntansi'; }
			elseif ($prodi == "Manajemen" ) { $prodi = 'manajemen'; }
			elseif ($prodi == "Psikologi" ) { $prodi = 'psikologi'; }
			elseif ($prodi == "Ilmu Komunikasi" ) { $prodi = 'ilmu_komunikasi'; }
			elseif ($prodi == "Desain Produk" ) { $prodi = 'desain_produk'; }
			elseif ($prodi == "Desain Komunikasi Visual" ) { $prodi = 'desain_komunikasi_visual'; }
			elseif ($prodi == "Informatika" ) { $prodi = 'informatika'; }
			elseif ($prodi == "Sistem Informasi" ) { $prodi = 'sistem_informasi'; }
			elseif ($prodi == "Teknik Sipil" ) { $prodi = 'teknik_sipil'; }
			elseif ($prodi == "Arsitektur" ) { $prodi = 'arsitektur'; }
			
			$i=0;
			$digit_1 = array();
			$digit_2 = array();
			$digit_3 = array();

			foreach ($total as $row => $value) {
				$i++;
				if ($i >= 4) { break; }

				$kateg_tes = str_split($row,1);

				if ($i == 1) {
					if($kateg_tes[0] == 'R'){
						foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
							$kateg_acuan_prodi = str_split($value[$prodi],1); 
							if (empty($kateg_acuan_prodi[1])) {  break; }
							// echo "kateg acuan prodi: ";print_r($kateg_acuan_prodi);echo "<br>";

							$ambil_digit1 =  $this->M_dokumen->ambil_acuan_skoring_R($kateg_acuan_prodi[0]); // mengambil prodi pilihan calon mahasiswa
							// echo "ambildigit1 : ";print_r($ambil_digit1);echo "<br><br>";
							foreach ($ambil_digit1 as $abc => $value) { array_push($digit_1, $value->R); }
						}
					}
					elseif($kateg_tes[0] == 'I'){
						foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
							$kateg_acuan_prodi = str_split($value[$prodi],1);
							$ambil_digit1 =  $this->M_dokumen->ambil_acuan_skoring_I($kateg_acuan_prodi[0]); // mengambil prodi pilihan calon mahasiswa
							foreach ($ambil_digit1 as $abc => $value) { array_push($digit_1, $value->I); }
						}
					}
					elseif($kateg_tes[0] == 'A'){
						foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
							$kateg_acuan_prodi = str_split($value[$prodi],1);
							$ambil_digit1 =  $this->M_dokumen->ambil_acuan_skoring_A($kateg_acuan_prodi[0]); // mengambil prodi pilihan calon mahasiswa
							foreach ($ambil_digit1 as $abc => $value) { array_push($digit_1, $value->A); }
						}
					}
					elseif($kateg_tes[0] == 'S'){
						foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
							$kateg_acuan_prodi = str_split($value[$prodi],1);
							$ambil_digit1 =  $this->M_dokumen->ambil_acuan_skoring_S($kateg_acuan_prodi[0]); // mengambil prodi pilihan calon mahasiswa
							foreach ($ambil_digit1 as $abc => $value) { array_push($digit_1, $value->S); }
						}
					}
					elseif($kateg_tes[0] == 'E'){
						foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
							$kateg_acuan_prodi = str_split($value[$prodi],1);
							$ambil_digit1 =  $this->M_dokumen->ambil_acuan_skoring_E($kateg_acuan_prodi[0]); // mengambil prodi pilihan calon mahasiswa
							foreach ($ambil_digit1 as $abc => $value) { array_push($digit_1, $value->E); }
						}
					}
					elseif($kateg_tes[0] == 'C'){
						foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
							$kateg_acuan_prodi = str_split($value[$prodi],1);
							$ambil_digit1 =  $this->M_dokumen->ambil_acuan_skoring_C($kateg_acuan_prodi[0]); // mengambil prodi pilihan calon mahasiswa
							foreach ($ambil_digit1 as $abc => $value) { array_push($digit_1, $value->C); }
						}	
					}
				}

				if ($i == 2) {
					if($kateg_tes[0] == 'R'){
						foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
							$kateg_acuan_prodi = str_split($value[$prodi],1); 
							if (empty($kateg_acuan_prodi[1])) {  break; }
							$ambil_digit2 =  $this->M_dokumen->ambil_acuan_skoring_R($kateg_acuan_prodi[1]); // mengambil prodi pilihan calon mahasiswa
							foreach ($ambil_digit2 as $abc => $value) { array_push($digit_2, $value->R); }
						}
					}
					elseif($kateg_tes[0] == 'I'){
						foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
							$kateg_acuan_prodi = str_split($value[$prodi],1); 
							if (empty($kateg_acuan_prodi[1])) {  break; }
							// echo "kateg acuan prodi: ";print_r($kateg_acuan_prodi[1]);echo "<br>";

							$ambil_digit2 =  $this->M_dokumen->ambil_acuan_skoring_I($kateg_acuan_prodi[1]); // mengambil prodi pilihan calon mahasiswa
							// echo "ambildigit2 : ";print_r($ambil_digit2);echo "<br><br>";
							foreach ($ambil_digit2 as $abc => $value) { array_push($digit_2, $value->I); }
						}
					}
					elseif($kateg_tes[0] == 'A'){
						foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
							$kateg_acuan_prodi = str_split($value[$prodi],1);
							if (empty($kateg_acuan_prodi[1])) {  break; }
							$ambil_digit2 =  $this->M_dokumen->ambil_acuan_skoring_A($kateg_acuan_prodi[1]); // mengambil prodi pilihan calon mahasiswa
							foreach ($ambil_digit2 as $abc => $value) { array_push($digit_2, $value->A); }
						}
					}
					elseif($kateg_tes[0] == 'S'){
						foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
							$kateg_acuan_prodi = str_split($value[$prodi],1);
							if (empty($kateg_acuan_prodi[1])) {  break; }
							$ambil_digit2 =  $this->M_dokumen->ambil_acuan_skoring_S($kateg_acuan_prodi[1]); // mengambil prodi pilihan calon mahasiswa
							foreach ($ambil_digit2 as $abc => $value) { array_push($digit_2, $value->S); }
						}
					}
					elseif($kateg_tes[0] == 'E'){
						foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
							$kateg_acuan_prodi = str_split($value[$prodi],1);
							if (empty($kateg_acuan_prodi[1])) {  break; }
							$ambil_digit2 =  $this->M_dokumen->ambil_acuan_skoring_E($kateg_acuan_prodi[1]); // mengambil prodi pilihan calon mahasiswa
							foreach ($ambil_digit2 as $abc => $value) { array_push($digit_2, $value->E); }
						}
					}
					elseif($kateg_tes[0] == 'C'){
						foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
							$kateg_acuan_prodi = str_split($value[$prodi],1);
							if (empty($kateg_acuan_prodi[1])) {  break; }
							$ambil_digit2 =  $this->M_dokumen->ambil_acuan_skoring_C($kateg_acuan_prodi[1]); // mengambil prodi pilihan calon mahasiswa
							foreach ($ambil_digit2 as $abc => $value) { array_push($digit_2, $value->C); }
						}	
					}
				}

				if ($i == 3) {
					if($kateg_tes[0] == 'R'){
						foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
							$kateg_acuan_prodi = str_split($value[$prodi],1); 
							if (empty($kateg_acuan_prodi[2])) {  break; }
							$ambil_digit3 =  $this->M_dokumen->ambil_acuan_skoring_R($kateg_acuan_prodi[2]); // mengambil prodi pilihan calon mahasiswa
							foreach ($ambil_digit3 as $abc => $value) { array_push($digit_3, $value->R); }
						}
					}
					elseif($kateg_tes[0] == 'I'){
						foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
							$kateg_acuan_prodi = str_split($value[$prodi],1); 
							if (empty($kateg_acuan_prodi[2])) {  break; }
							$ambil_digit3 =  $this->M_dokumen->ambil_acuan_skoring_I($kateg_acuan_prodi[2]); // mengambil prodi pilihan calon mahasiswa
							foreach ($ambil_digit3 as $abc => $value) { array_push($digit_3, $value->I); }
						}
					}
					elseif($kateg_tes[0] == 'A'){
						foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
							$kateg_acuan_prodi = str_split($value[$prodi],1);
							if (empty($kateg_acuan_prodi[2])) {  break; }
							// echo "kateg acuan prodi: ";print_r($kateg_acuan_prodi[2]);echo "<br>";
							$ambil_digit3 =  $this->M_dokumen->ambil_acuan_skoring_A($kateg_acuan_prodi[2]); // mengambil prodi pilihan calon mahasiswa
							// echo "ambildigit3 : ";print_r($ambil_digit3);echo "<br><br>";
							foreach ($ambil_digit3 as $abc => $value) { array_push($digit_3, $value->A); }
						}
					}
					elseif($kateg_tes[0] == 'S'){
						foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
							$kateg_acuan_prodi = str_split($value[$prodi],1);
							if (empty($kateg_acuan_prodi[2])) {  break; }
							$ambil_digit3 =  $this->M_dokumen->ambil_acuan_skoring_S($kateg_acuan_prodi[2]); // mengambil prodi pilihan calon mahasiswa
							foreach ($ambil_digit3 as $abc => $value) { array_push($digit_3, $value->S); }
						}
					}
					elseif($kateg_tes[0] == 'E'){
						foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
							$kateg_acuan_prodi = str_split($value[$prodi],1);
							if (empty($kateg_acuan_prodi[2])) {  break; }
							$ambil_digit3 =  $this->M_dokumen->ambil_acuan_skoring_E($kateg_acuan_prodi[2]); // mengambil prodi pilihan calon mahasiswa
							foreach ($ambil_digit3 as $abc => $value) { array_push($digit_3, $value->E); }
						}
					}
					elseif($kateg_tes[0] == 'C'){
						foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
							$kateg_acuan_prodi = str_split($value[$prodi],1);
							if (empty($kateg_acuan_prodi[2])) {  break; }
							$ambil_digit3 =  $this->M_dokumen->ambil_acuan_skoring_C($kateg_acuan_prodi[2]); // mengambil prodi pilihan calon mahasiswa
							foreach ($ambil_digit3 as $abc => $value) { array_push($digit_3, $value->C); }
						}	
					}
				}

				
			}

			$level_congruence = array();
			for($i=0; $i < count($digit_1); $i++){ 
				$hitung = (3 * $digit_1[$i]) + (2 * $digit_2[$i]) + $digit_3[$i];
				array_push($level_congruence, $hitung); 
			}

			$opposite = 0;
			$alternate = 0;
			$adjacent = 0;

			for($i=0; $i < count($level_congruence); $i++){ 
				if ($level_congruence[$i] >= 0 && $level_congruence[$i] <= 6 ) {
					$opposite++;
				}
				elseif ($level_congruence[$i] >= 7 && $level_congruence[$i] <= 12 ) {
					$alternate++;
				}
				elseif ($level_congruence[$i] >= 13 && $level_congruence[$i] <= 18 ) {
					$adjacent++;
				}
			}

			// echo "<br><br>";
			// print_r($opposite);echo "<br>";
			// print_r($alternate);echo "<br>";
			// print_r($adjacent);echo "<br><br>";

			$hasil_tertinggi = max($opposite, $alternate, $adjacent);

			// echo "Hasil tertinggi : ".$hasil_tertinggi;
			// echo "<br><br>";

			if ($opposite > $alternate && $opposite > $adjacent) {
				// echo "Program studi pilihan Anda: ".$txtProdi." sangat tidak cocok <br><br>";
				$txtProdi = "Tidak cocok dengan Prodi yang dipilih";
			}
			elseif ($alternate > $opposite && $alternate > $adjacent) {
				// echo "Program studi pilihan Anda: ".$txtProdi." sesuai minat <br><br>";
			}
			elseif ($adjacent > $opposite && $adjacent > $alternate) {
				// echo "Program studi pilihan Anda: ".$txtProdi." sangat sesuai dengan minat <br><br>";
			}

			if ($opposite == $alternate) {
				// echo "Program studi pilihan Anda: ".$txtProdi." sesuai minat <br><br>";
				$txtProdi = $prodi." Sesuai Minat";
			}elseif ($alternate == $adjacent) {
				// echo "Program studi pilihan Anda: ".$txtProdi." sangat sesuai minat <br><br>";
				$txtProdi = $prodi." Sangat Sesuai Minat";
			}

			

			if ($opposite > $alternate && $opposite > $adjacent) {
				$tidakCocok = array();
				$Xprodi = array("akuntansi","manajemen","psikologi","ilmu_komunikasi","desain_produk","desain_komunikasi_visual","informatika","sistem_informasi","teknik_sipil","arsitektur");
				for ($ij=0; $ij < count($Xprodi); $ij++) { 
					$i=0;
					$digit_1 = array();
					$digit_2 = array();
					$digit_3 = array();

					foreach ($total as $row => $value) {
						$i++;
						if ($i >= 4) { break; }

						$kateg_tes = str_split($row,1);

						if ($i == 1) {
							if($kateg_tes[0] == 'R'){
								foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
									$kateg_acuan_prodi = str_split($value[$Xprodi[$ij]],1); 
									if (empty($kateg_acuan_prodi[1])) {  break; }
									// echo "kateg acuan prodi: ";print_r($kateg_acuan_prodi);echo "<br>";

									$ambil_digit1 =  $this->M_dokumen->ambil_acuan_skoring_R($kateg_acuan_prodi[0]); // mengambil prodi pilihan calon mahasiswa
									// echo "ambildigit1 : ";print_r($ambil_digit1);echo "<br><br>";
									foreach ($ambil_digit1 as $abc => $value) { array_push($digit_1, $value->R); }
								}
							}
							elseif($kateg_tes[0] == 'I'){
								foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
									$kateg_acuan_prodi = str_split($value[$Xprodi[$ij]],1);
									$ambil_digit1 =  $this->M_dokumen->ambil_acuan_skoring_I($kateg_acuan_prodi[0]); // mengambil prodi pilihan calon mahasiswa
									foreach ($ambil_digit1 as $abc => $value) { array_push($digit_1, $value->I); }
								}
							}
							elseif($kateg_tes[0] == 'A'){
								foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
									$kateg_acuan_prodi = str_split($value[$Xprodi[$ij]],1);
									$ambil_digit1 =  $this->M_dokumen->ambil_acuan_skoring_A($kateg_acuan_prodi[0]); // mengambil prodi pilihan calon mahasiswa
									foreach ($ambil_digit1 as $abc => $value) { array_push($digit_1, $value->A); }
								}
							}
							elseif($kateg_tes[0] == 'S'){
								foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
									$kateg_acuan_prodi = str_split($value[$Xprodi[$ij]],1);
									$ambil_digit1 =  $this->M_dokumen->ambil_acuan_skoring_S($kateg_acuan_prodi[0]); // mengambil prodi pilihan calon mahasiswa
									foreach ($ambil_digit1 as $abc => $value) { array_push($digit_1, $value->S); }
								}
							}
							elseif($kateg_tes[0] == 'E'){
								foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
									$kateg_acuan_prodi = str_split($value[$Xprodi[$ij]],1);
									$ambil_digit1 =  $this->M_dokumen->ambil_acuan_skoring_E($kateg_acuan_prodi[0]); // mengambil prodi pilihan calon mahasiswa
									foreach ($ambil_digit1 as $abc => $value) { array_push($digit_1, $value->E); }
								}
							}
							elseif($kateg_tes[0] == 'C'){
								foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
									$kateg_acuan_prodi = str_split($value[$Xprodi[$ij]],1);
									$ambil_digit1 =  $this->M_dokumen->ambil_acuan_skoring_C($kateg_acuan_prodi[0]); // mengambil prodi pilihan calon mahasiswa
									foreach ($ambil_digit1 as $abc => $value) { array_push($digit_1, $value->C); }
								}	
							}
						}

						if ($i == 2) {
							if($kateg_tes[0] == 'R'){
								foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
									$kateg_acuan_prodi = str_split($value[$Xprodi[$ij]],1); 
									if (empty($kateg_acuan_prodi[1])) {  break; }
									$ambil_digit2 =  $this->M_dokumen->ambil_acuan_skoring_R($kateg_acuan_prodi[1]); // mengambil prodi pilihan calon mahasiswa
									foreach ($ambil_digit2 as $abc => $value) { array_push($digit_2, $value->R); }
								}
							}
							elseif($kateg_tes[0] == 'I'){
								foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
									$kateg_acuan_prodi = str_split($value[$Xprodi[$ij]],1); 
									if (empty($kateg_acuan_prodi[1])) {  break; }
									// echo "kateg acuan prodi: ";print_r($kateg_acuan_prodi[1]);echo "<br>";

									$ambil_digit2 =  $this->M_dokumen->ambil_acuan_skoring_I($kateg_acuan_prodi[1]); // mengambil prodi pilihan calon mahasiswa
									// echo "ambildigit2 : ";print_r($ambil_digit2);echo "<br><br>";
									foreach ($ambil_digit2 as $abc => $value) { array_push($digit_2, $value->I); }
								}
							}
							elseif($kateg_tes[0] == 'A'){
								foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
									$kateg_acuan_prodi = str_split($value[$Xprodi[$ij]],1);
									if (empty($kateg_acuan_prodi[1])) {  break; }
									$ambil_digit2 =  $this->M_dokumen->ambil_acuan_skoring_A($kateg_acuan_prodi[1]); // mengambil prodi pilihan calon mahasiswa
									foreach ($ambil_digit2 as $abc => $value) { array_push($digit_2, $value->A); }
								}
							}
							elseif($kateg_tes[0] == 'S'){
								foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
									$kateg_acuan_prodi = str_split($value[$Xprodi[$ij]],1);
									if (empty($kateg_acuan_prodi[1])) {  break; }
									$ambil_digit2 =  $this->M_dokumen->ambil_acuan_skoring_S($kateg_acuan_prodi[1]); // mengambil prodi pilihan calon mahasiswa
									foreach ($ambil_digit2 as $abc => $value) { array_push($digit_2, $value->S); }
								}
							}
							elseif($kateg_tes[0] == 'E'){
								foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
									$kateg_acuan_prodi = str_split($value[$Xprodi[$ij]],1);
									if (empty($kateg_acuan_prodi[1])) {  break; }
									$ambil_digit2 =  $this->M_dokumen->ambil_acuan_skoring_E($kateg_acuan_prodi[1]); // mengambil prodi pilihan calon mahasiswa
									foreach ($ambil_digit2 as $abc => $value) { array_push($digit_2, $value->E); }
								}
							}
							elseif($kateg_tes[0] == 'C'){
								foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
									$kateg_acuan_prodi = str_split($value[$Xprodi[$ij]],1);
									if (empty($kateg_acuan_prodi[1])) {  break; }
									$ambil_digit2 =  $this->M_dokumen->ambil_acuan_skoring_C($kateg_acuan_prodi[1]); // mengambil prodi pilihan calon mahasiswa
									foreach ($ambil_digit2 as $abc => $value) { array_push($digit_2, $value->C); }
								}	
							}
						}

						if ($i == 3) {
							if($kateg_tes[0] == 'R'){
								foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
									$kateg_acuan_prodi = str_split($value[$Xprodi[$ij]],1); 
									if (empty($kateg_acuan_prodi[2])) {  break; }
									$ambil_digit3 =  $this->M_dokumen->ambil_acuan_skoring_R($kateg_acuan_prodi[2]); // mengambil prodi pilihan calon mahasiswa
									foreach ($ambil_digit3 as $abc => $value) { array_push($digit_3, $value->R); }
								}
							}
							elseif($kateg_tes[0] == 'I'){
								foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
									$kateg_acuan_prodi = str_split($value[$Xprodi[$ij]],1); 
									if (empty($kateg_acuan_prodi[2])) {  break; }
									$ambil_digit3 =  $this->M_dokumen->ambil_acuan_skoring_I($kateg_acuan_prodi[2]); // mengambil prodi pilihan calon mahasiswa
									foreach ($ambil_digit3 as $abc => $value) { array_push($digit_3, $value->I); }
								}
							}
							elseif($kateg_tes[0] == 'A'){
								foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
									$kateg_acuan_prodi = str_split($value[$Xprodi[$ij]],1);
									if (empty($kateg_acuan_prodi[2])) {  break; }
									// echo "kateg acuan prodi: ";print_r($kateg_acuan_prodi[2]);echo "<br>";
									$ambil_digit3 =  $this->M_dokumen->ambil_acuan_skoring_A($kateg_acuan_prodi[2]); // mengambil prodi pilihan calon mahasiswa
									// echo "ambildigit3 : ";print_r($ambil_digit3);echo "<br><br>";
									foreach ($ambil_digit3 as $abc => $value) { array_push($digit_3, $value->A); }
								}
							}
							elseif($kateg_tes[0] == 'S'){
								foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
									$kateg_acuan_prodi = str_split($value[$Xprodi[$ij]],1);
									if (empty($kateg_acuan_prodi[2])) {  break; }
									$ambil_digit3 =  $this->M_dokumen->ambil_acuan_skoring_S($kateg_acuan_prodi[2]); // mengambil prodi pilihan calon mahasiswa
									foreach ($ambil_digit3 as $abc => $value) { array_push($digit_3, $value->S); }
								}
							}
							elseif($kateg_tes[0] == 'E'){
								foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
									$kateg_acuan_prodi = str_split($value[$Xprodi[$ij]],1);
									if (empty($kateg_acuan_prodi[2])) {  break; }
									$ambil_digit3 =  $this->M_dokumen->ambil_acuan_skoring_E($kateg_acuan_prodi[2]); // mengambil prodi pilihan calon mahasiswa
									foreach ($ambil_digit3 as $abc => $value) { array_push($digit_3, $value->E); }
								}
							}
							elseif($kateg_tes[0] == 'C'){
								foreach ($kode_acuan_prodi as $roww => $value) { // memunculkan hanya 1 kolom kode acuan prodi 
									$kateg_acuan_prodi = str_split($value[$Xprodi[$ij]],1);
									if (empty($kateg_acuan_prodi[2])) {  break; }
									$ambil_digit3 =  $this->M_dokumen->ambil_acuan_skoring_C($kateg_acuan_prodi[2]); // mengambil prodi pilihan calon mahasiswa
									foreach ($ambil_digit3 as $abc => $value) { array_push($digit_3, $value->C); }
								}	
							}
						}

						
					}

					$level_congruence = array();
					for($i=0; $i < count($digit_1); $i++){ 
						$hitung = (3 * $digit_1[$i]) + (2 * $digit_2[$i]) + $digit_3[$i];
						array_push($level_congruence, $hitung); 
					}

					$opposite = 0;
					$alternate = 0;
					$adjacent = 0;
					$txtHasil_tertinggi = "";

					for($i=0; $i < count($level_congruence); $i++){ 
						if ($level_congruence[$i] >= 0 && $level_congruence[$i] <= 6 ) {
							$opposite++;
						}
						elseif ($level_congruence[$i] >= 7 && $level_congruence[$i] <= 12 ) {
							$alternate++;
						}
						elseif ($level_congruence[$i] >= 13 && $level_congruence[$i] <= 18 ) {
							$adjacent++;
						}
					}

					// echo "<br>";
					// echo "opposite :";print_r($opposite);echo "<br>";
					// echo "alternate :";print_r($alternate);echo "<br>";
					// echo "adjacent :";print_r($adjacent);echo "<br>";

					if ($opposite > $alternate && $opposite > $adjacent) {
						$txtHasil_tertinggi = "Sangat Tidak Cocok";
						array_push($tidakCocok, "$Xprodi[$ij]");

						$txtProdi = "Mayoritas prodi memiliki kesesuaian dengan minat kecuali ";
						for($i=0; $i < count($tidakCocok); $i++){ 
							$txtProdi .= $tidakCocok[$i].", ";
						}
					}elseif ($alternate > $opposite && $alternate > $adjacent) {
						$txtHasil_tertinggi = "Sesuai Minat";
					}elseif ($adjacent > $opposite && $adjacent > $alternate) {
						$txtHasil_tertinggi = "Sangat Sesuai Minat";

						$rekomendasiProdi = $Xprodi[$ij];
						$txtProdi = $Xprodi[$ij]; 
					}

					if ($opposite == $alternate) {
						// echo "Program studi pilihan Anda: ".$txtHasil_tertinggi." sesuai minat <br><br>";
						$txtHasil_tertinggi = " Sesuai Minat";
					}elseif ($alternate == $adjacent) {
						// echo "Program studi pilihan Anda: ".$txtHasil_tertinggi." sangat sesuai minat <br><br>";
						$txtHasil_tertinggi = " Sangat Sesuai Minat";
					}

					$hasil_tertinggi = max($opposite, $alternate, $adjacent);
					// echo "Prodi yang ".$txtHasil_tertinggi." adalah ".$Xprodi[$ij];
					// echo "<br>";
				} 
				
			}

			// print_r($txtProdi);
			

			$dataRekomendasi = array(
				'rekomendasi_prodi1' => $txtProdi,
		 	);
			$querySave_rekomendasi= $this->M_dokumen->save_update_rekomendasi1($dataRekomendasi, $id_peserta);

			$queryDone_tes_holland = $this->M_dokumen->done_tes_holland( array('isi_tes_holland' => "sudah", 'tipe_peserta' => $type_peserta), $id_peserta);

			// exit();

			if ($queryDone_tes_holland) {
				redirect(site_url('Tes/'));
			}
			else{
				redirect(site_url('Tes/'));
			}
		}
	}

	public function savedok_tes_bigfive(){
		if($this->input->post('btnUpload') == "Upload"){			 
			$inputTxtTBF= $this->input->post(NULL, True);
			$jumlahO = 0;
			$jumlahC = 0;
			$jumlahE = 0;
			$jumlahA = 0;
			$jumlahN = 0;
			print_r($inputTxtTBF);exit();
			
			foreach ($inputTxtTBF as $key => $value) {

				$putusStr = substr($key,3);
				if (strlen($putusStr) == 2) {
					$putusStr = substr($putusStr,1);
				}
				if ($value == "" || $value == NULL || $value == "Upload") {
					$value =0;
				}

				if($putusStr == 1 || $putusStr == 6){
					$jumlahO += $value;
				}
				if($putusStr == 2 || $putusStr == 7){
					$jumlahC += $value;
				}
				if($putusStr == 3 || $putusStr == 8){
					$jumlahE += $value;
				}
				if($putusStr == 4 || $putusStr == 9){
					$jumlahA += $value;
				}
				if($putusStr == 5 || $putusStr == 0){
					$jumlahN += $value;
				}
			}
			// 	echo "<br>";
			// 	echo " jumlah O : $jumlahO <br>";
			// 	echo " jumlah C : $jumlahC <br>";
			// 	echo " jumlah E : $jumlahE <br>";
			// 	echo " jumlah A : $jumlahA <br>";
			// 	echo " jumlah N : $jumlahN <br>";
			// echo "<br><br><br>-------------------------------------<br>";

			// print_r($inputTxtTBF);exit();

			$data = array(
				  'O' => $jumlahO,
				  'C' => $jumlahC,
				  'E' => $jumlahE,
				  'A' => $jumlahA,
				  'N' => $jumlahN,
			);
			$id_peserta = $this->session->userdata('id_peserta');
			$query= $this->M_dokumen->save_update_tes_bigfive($data, $id_peserta);
			   exit();
			if ($query) {
				//$this->session->set_flashdata('notification', 'Penambahan Dokumen Akreditasi Berhasil');
				redirect(site_url('Tes/'));
			}
			else{
				redirect(site_url('Tes/'));
			}
		}
			  
	}

	public function hasil_tes(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);
		foreach($kue as $key){$kuee = $key;}
		$query = $this->M_dokumen->tampil_rekomendasi($kuee->no);
		$query2 = $this->M_dokumen->tampil_intrepretasi($kuee->no);

		$dataHalaman = array(
		  'title'=>"Hasil Tes",	
		  'da' => $kue,
		  'query' => $query,
		  'queryIntrepretasi' => $query2,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('tes/v_hasil_tes');
		$this->load->view('dashboard/v_footer');
	}
}