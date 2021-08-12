<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_prodi extends CI_Controller {
	
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
		  'title'=>"Informasi Prodi",		
		  'da' => $kue,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('v_informasi_prodi');
		$this->load->view('dashboard/v_footer');
	}
}
