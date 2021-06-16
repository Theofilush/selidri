<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		} 	
	}

	public function index()
	{
		$usan = $this->session->userdata('email');
		 $kue = $this->M_login->hak_ak($usan);

		$dataHalaman = array(
		  'title'=>"Dashboard",		
		  'da' => $kue,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('dashboard/v_dashboard');
		$this->load->view('dashboard/v_footer');
	}

	public function tes_holland1(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);

		$dataHalaman = array(
		  'title'=>"Dashboard",		
		  'da' => $kue,
		);
		
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('dashboard/v_testHolland1');
		$this->load->view('dashboard/v_footer2');
	}
	
	public function tes_holland2(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);

		$dataHalaman = array(
		  'title'=>"Dashboard",		
		  'da' => $kue,
		);
		
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('dashboard/v_testHolland2');
		$this->load->view('dashboard/v_footer2');
	}

	public function tes_big_five1(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);

		$dataHalaman = array(
		  'title'=>"Dashboard",		
		  'da' => $kue,
		);
		
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('dashboard/v_testBigFive1');
		$this->load->view('dashboard/v_footer2');
	}

	public function tes_big_five2(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);

		$dataHalaman = array(
		  'title'=>"Dashboard",		
		  'da' => $kue,
		);
		
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('dashboard/v_testBigFive2');
		$this->load->view('dashboard/v_footer2');
	}

	public function tes_big_five3(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);

		$dataHalaman = array(
		  'title'=>"Dashboard",		
		  'da' => $kue,
		);
		
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('dashboard/v_testBigFive3');
		$this->load->view('dashboard/v_footer2');
	}

}
