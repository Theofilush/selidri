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

			$batas_tengah = floor($totalBarisR1 / 2);
			$queryr1_awal =  $this->M_dokumen->queryr1_awal(0,$batas_tengah);
			$queryr1_akhir =  $this->M_dokumen->queryr1_akhir($batas_tengah , $totalBarisR1);
			// $queryr1_awal = $this->db->query("SELECT * FROM t_soal_holland where bagian=1 and kelompok='r' limit 0, $batas_tengah")->result();
			// $queryr1_akhir = $this->db->query("SELECT * FROM t_soal_holland where bagian=1 and kelompok='r' limit $batas_tengah, $totalBarisR1")->result();
			// print_r($queryr1_awal);print_r($queryr1_akhir);exit();

			$dataHalaman = array(
				'title'=>"Dashboard",
				'da' => $kue,
				'queryr1_awal'=> $queryr1_awal,
				'queryr1_akhir'=> $queryr1_akhir,
			);
			
			$this->load->view('dashboard/v_header', $dataHalaman);
			$this->load->view('tes/v_tes_holland1');
			$this->load->view('dashboard/v_footer');
		} elseif ($key == "2") {
			$dataHalaman = array(
				'title'=>"Dashboard",
				'da' => $kue,
			  );
			  $this->load->view('dashboard/v_header', $dataHalaman);
			  $this->load->view('tes/v_tes_holland2');
			  $this->load->view('dashboard/v_footer');	
		} elseif ($key == "3") {
			$dataHalaman = array(
				'title'=>"Dashboard",
				'da' => $kue,
			  );
			  $this->load->view('dashboard/v_header', $dataHalaman);
			  $this->load->view('tes/v_tes_holland3');
			  $this->load->view('dashboard/v_footer');	
		}		
	}

	public function tes_bigfive(){
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
			$dataHalaman = array(
				'title'=>"Dashboard",
				'da' => $kue,
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
}
