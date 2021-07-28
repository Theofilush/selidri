<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengelolaan extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		}
	}

	public function index(){
		redirect(site_url("Pengaturan/data_hasil"));
    }
    
    public function data_prodi(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);

		$dataHalaman = array(
		  'title'=>"Dashboard",		
		  'da' => $kue,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('v_data_prodi');
		$this->load->view('dashboard/v_footer');
    }
    
    public function data_camaba(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);

		$dataHalaman = array(
		  'title'=>"Dashboard",		
		  'da' => $kue,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('v_data_camaba');
		$this->load->view('dashboard/v_footer');
    }
    
    public function data_pengukuran(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);
		$queryHolland = $this->M_dokumen->tampil_soal_holland();
		$queryBigFive = $this->M_dokumen->tampil_soal_bigfive();

		$dataHalaman = array(
		  'title'=>"Dashboard",		
		  'da' => $kue,
		  'queryHolland'=> $queryHolland,
		  'queryBigFive'=> $queryBigFive,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('v_data_pengukuran');
		$this->load->view('dashboard/v_footer');
    }

    public function data_hasil(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);
		$query = $this->M_dokumen->tampil_hasil_tes();

		$dataHalaman = array(
		  'title'=>"Dashboard",
		  'da' => $kue,
		  'query'=> $query,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('v_data_hasil');
		$this->load->view('dashboard/v_footer');
    }

	public function edit_data_pengukuran_holland($id_soal){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);
		$queryHolland = $this->M_dokumen->tampil_soal_holland($id_soal);

		$dataHalaman = array(
		  'title'=>"Dashboard",
		  'da' => $kue,
		  'queryHolland'=> $queryHolland,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('v_edit_data_pengukuran_holland');
		$this->load->view('dashboard/v_footer');
    }

	public function edit_data_pengukuran_bigfive($id_soal){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);
		$queryBigFive = $this->M_dokumen->tampil_soal_bigfive($id_soal);

		$dataHalaman = array(
		  'title'=>"Dashboard",
		  'da' => $kue,
		  'queryBigFive'=> $queryBigFive,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('v_edit_data_pengukuran_bigfive');
		$this->load->view('dashboard/v_footer');
    }

	public function update_data_pengukuran_holland($id_soal){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);
		$queryHolland = $this->M_dokumen->tampil_soal_holland($id_soal);

		$dataHalaman = array(
		  'title'=>"Dashboard",
		  'da' => $kue,
		  'queryHolland'=> $queryHolland,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('v_edit_data_pengukuran_holland');
		$this->load->view('dashboard/v_footer');
    }

	public function update_data_pengukuran_bigfive($id_soal){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);
		$queryBigFive = $this->M_dokumen->tampil_soal_bigfive($id_soal);

		$dataHalaman = array(
		  'title'=>"Dashboard",
		  'da' => $kue,
		  'queryBigFive'=> $queryBigFive,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('v_edit_data_pengukuran_bigfive');
		$this->load->view('dashboard/v_footer');
    }
    
    
}
