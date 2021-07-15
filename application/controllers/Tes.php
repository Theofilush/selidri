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

	public function tes_holland(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);

		$dataHalaman = array(
		  'title'=>"Dashboard",		
		  'da' => $kue,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('tes/v_tes_holland');
		$this->load->view('dashboard/v_footer');
	}

	public function tes_bigfive(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);

		$dataHalaman = array(
		  'title'=>"Dashboard",		
		  'da' => $kue,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('tes/v_tes_bigfive');
		$this->load->view('dashboard/v_footer');
	}
}
