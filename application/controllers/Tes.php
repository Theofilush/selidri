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

		$dataHalaman = array(
		  'title'=>"Dashboard",		
		  'da' => $kue,
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
				'title'=>"Dashboard",
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

		if ($key == "") {
			$dataHalaman = array(
				'title'=>"Dashboard",		
				'da' => $kue,
			  );
			  $this->load->view('dashboard/v_header', $dataHalaman);
			  $this->load->view('tes/v_tes_bigfive');
			  $this->load->view('dashboard/v_footer');
		} elseif ($key == "1") {
			$totalBarisBigFive =  $this->M_dokumen->totalBarisBigFive();
			//$soal_bagian1 =  $this->M_dokumen->tampil_soal_bagian_r1(); //menampilkan semua data
			$batas_tengah = floor($totalBarisBigFive / 2);
			$queryTBF_awal =  $this->M_dokumen->queryTBF_awal(0,$batas_tengah);
			$queryTBF_akhir =  $this->M_dokumen->queryTBF_akhir($batas_tengah , $totalBarisBigFive);

			$dataHalaman = array(
				'title'=>"Dashboard",
				'da' => $kue,
				'soalTBF_awal'=> $queryTBF_awal,
				'soalTBF_akhir'=> $queryTBF_akhir,
				'batas_tengah'=> $batas_tengah,
			  );
			  $this->load->view('dashboard/v_header', $dataHalaman);
			  $this->load->view('tes/v_tes_bigfive1');
			  $this->load->view('dashboard/v_footer');
		} elseif ($key == "2") {
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
		}
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
				//$this->session->set_flashdata('notification', 'Penambahan Dokumen Akreditasi Berhasil');
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
			// 	echo " jumlah R : $jumlahR <br>";
			// 	echo " jumlah I : $jumlahI <br>";
			// 	echo " jumlah A : $jumlahA <br>";
			// 	echo " jumlah S : $jumlahS <br>";
			// 	echo " jumlah E : $jumlahE <br>";
			// 	echo " jumlah C : $jumlahC <br>";
			// echo "<br><br><br>-------------------------------------<br>";

			// print_r($inputTxt3);exit();

			$data = array(
				  'r3' => $jumlahR,
				  'i3' => $jumlahI,
				  'a3' => $jumlahA,
				  's3' => $jumlahS,
				  'e3' => $jumlahE,
				  'c3' => $jumlahC,
			);
			$id_peserta = $this->session->userdata('id_peserta');
			$query= $this->M_dokumen->save_update_tes_holland3($data, $id_peserta);
			   
			if ($query) {
				//$this->session->set_flashdata('notification', 'Penambahan Dokumen Akreditasi Berhasil');
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
			// print_r($inputTxtTBF);exit();
			
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
			   
			if ($query) {
				//$this->session->set_flashdata('notification', 'Penambahan Dokumen Akreditasi Berhasil');
				redirect(site_url('Tes/'));
			}
			else{
				redirect(site_url('Tes/'));
			}
		}
			  
	}

}