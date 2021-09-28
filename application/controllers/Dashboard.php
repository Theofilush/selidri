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
		foreach($kue as $key){$kuee = $key;}
		$queryRekomendasi2 = $this->M_dokumen->tampil_rekomendasi($kuee->no);
		$queryRekomendasi1 = $this->M_dokumen->tampil_intrepretasi($kuee->no);
		$queryCekSudahIsiTes = $this->M_dokumen->cekSudahIsiTesBigFive($kuee->no);

		$dataHalaman = array(
		  'title'=>"Dashboard",		
		  'da' => $kue,
		  'queryRekomendasi1' => $queryRekomendasi1,
		  'queryRekomendasi2' => $queryRekomendasi2,
		  'queryCekSudahIsiTes' => $queryCekSudahIsiTes,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('dashboard/v_dashboard');
		$this->load->view('dashboard/v_footer');
	}

	public function tes_holland1(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);
		foreach($kue as $key){$kuee = $key;}
		$queryRekomendasi2 = $this->M_dokumen->tampil_rekomendasi($kuee->no);
		$queryRekomendasi1 = $this->M_dokumen->tampil_intrepretasi($kuee->no);
		$queryCekSudahIsiTes = $this->M_dokumen->cekSudahIsiTesBigFive($kuee->no);

		$dataHalaman = array(
		  'title'=>"Tes Holland",		
		  'da' => $kue,
		  'queryRekomendasi1' => $queryRekomendasi1,
		  'queryRekomendasi2' => $queryRekomendasi2,
		  'queryCekSudahIsiTes' => $queryCekSudahIsiTes,
		);
		
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('dashboard/v_testHolland1');
		$this->load->view('dashboard/v_footer2');
	}
	
	public function tes_holland2(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);
		foreach($kue as $key){$kuee = $key;}
		$queryRekomendasi2 = $this->M_dokumen->tampil_rekomendasi($kuee->no);
		$queryRekomendasi1 = $this->M_dokumen->tampil_intrepretasi($kuee->no);
		$queryCekSudahIsiTes = $this->M_dokumen->cekSudahIsiTesBigFive($kuee->no);

		$dataHalaman = array(
		  'title'=>"Tes Holland",		
		  'da' => $kue,
		  'queryRekomendasi1' => $queryRekomendasi1,
		  'queryRekomendasi2' => $queryRekomendasi2,
		  'queryCekSudahIsiTes' => $queryCekSudahIsiTes,
		);
		
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('dashboard/v_testHolland2');
		$this->load->view('dashboard/v_footer2');
	}

	public function tes_big_five1(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);
		foreach($kue as $key){$kuee = $key;}
		$queryRekomendasi2 = $this->M_dokumen->tampil_rekomendasi($kuee->no);
		$queryRekomendasi1 = $this->M_dokumen->tampil_intrepretasi($kuee->no);
		$queryCekSudahIsiTes = $this->M_dokumen->cekSudahIsiTesBigFive($kuee->no);

		$dataHalaman = array(
		  'title'=>"Tes Big Five",		
		  'da' => $kue,
		  'queryRekomendasi1' => $queryRekomendasi1,
		  'queryRekomendasi2' => $queryRekomendasi2,
		  'queryCekSudahIsiTes' => $queryCekSudahIsiTes,
		);
		
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('dashboard/v_testBigFive1');
		$this->load->view('dashboard/v_footer2');
	}

	public function tes_big_five2(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);
		foreach($kue as $key){$kuee = $key;}
		$queryRekomendasi2 = $this->M_dokumen->tampil_rekomendasi($kuee->no);
		$queryRekomendasi1 = $this->M_dokumen->tampil_intrepretasi($kuee->no);
		$queryCekSudahIsiTes = $this->M_dokumen->cekSudahIsiTesBigFive($kuee->no);

		$dataHalaman = array(
		  'title'=>"Tes Big Five",
		  'da' => $kue,
		  'queryRekomendasi1' => $queryRekomendasi1,
		  'queryRekomendasi2' => $queryRekomendasi2,
		  'queryCekSudahIsiTes' => $queryCekSudahIsiTes,
		);
		
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('dashboard/v_testBigFive2');
		$this->load->view('dashboard/v_footer2');
	}

	public function tes_big_five3(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);
		foreach($kue as $key){$kuee = $key;}
		$queryRekomendasi2 = $this->M_dokumen->tampil_rekomendasi($kuee->no);
		$queryRekomendasi1 = $this->M_dokumen->tampil_intrepretasi($kuee->no);
		$queryCekSudahIsiTes = $this->M_dokumen->cekSudahIsiTesBigFive($kuee->no);

		$dataHalaman = array(
		  'title'=>"Tes Big Five",		
		  'da' => $kue,
		  'queryRekomendasi1' => $queryRekomendasi1,
		  'queryRekomendasi2' => $queryRekomendasi2,
		  'queryCekSudahIsiTes' => $queryCekSudahIsiTes,
		);
		
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('dashboard/v_testBigFive3');
		$this->load->view('dashboard/v_footer2');
	}

}
