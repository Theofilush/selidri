<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		}
	}

	public function index(){ //lihat biodata
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);
		foreach($kue as $key){$kuee = $key;}
		$query = $this->M_dokumen->tampil_biodata($kuee->no);

		$dataHalaman = array(
		  'title'=>"Biodata",
		  'da' => $kue,
		  'query' => $query,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('v_biodata');
		$this->load->view('dashboard/v_footer');
	}

	public function isi_biodata(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);
		foreach($kue as $key){$kuee = $key;}
		$query = $this->M_dokumen->tampil_biodata($kuee->no);

		$dataHalaman = array(
		  'title'=>"Isi Biodata",		
		  'da' => $kue,
		  'query' => $query,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('v_biodata_add');
		$this->load->view('dashboard/v_footer');
	}

	function save_biodata_calmaba(){
		if($this->input->post('btnSimpan') == "Simpan"){
			$id = $this->input->post('id', TRUE);
			$_nik = $this->input->post('nik', TRUE);
			$_nama_lengkap = $this->input->post('nama_lengkap', TRUE);
			$_asal_sekolah = $this->input->post('asal_sekolah', TRUE);
			$_prodi_pilihan = $this->input->post('prodi_pilihan', TRUE);
			$_email = $this->input->post('email', TRUE);
			$_tempat_lahir = $this->input->post('tempat_lahir', TRUE);
			$_tanggal_lahir = $this->input->post('tanggal_lahir', TRUE);
			$_nomor_handphone = $this->input->post('nomor_handphone', TRUE);
			$_nama_ayah = $this->input->post('nama_ayah', TRUE);
			$_pekerjaan_ayah = $this->input->post('pekerjaan_ayah', TRUE);
			$_penghasilan_ayah = $this->input->post('penghasilan_ayah', TRUE);
			$_nama_ibu = $this->input->post('nama_ibu', TRUE);
			$_pekerjaan_ibu = $this->input->post('pekerjaan_ibu', TRUE);
			$_penghasilan_ibu = $this->input->post('penghasilan_ibu', TRUE);
			
			$data_diri1 = array(
				'nama' => $_nama_lengkap,
				'email' => $_email,
				'prodi_pilihan' => $_prodi_pilihan,
				'no_handphone' => $_nomor_handphone,
				'asal_sekolah' => $_asal_sekolah,
			);

			$data_diri2 = array(
				'nik' => $_nik,
				'nama_lengkap' => $_nama_lengkap,
				'email_bio' => $_email,
				'tempat_lahir' => $_tempat_lahir,
				'tanggal_lahir' => $_tanggal_lahir,
				'no_telp' => $_nomor_handphone,
				'nama_ayah' => $_nama_ayah,
				'pekerjaan_ayah' => $_pekerjaan_ayah,
				'penghasilan_ayah' => $_penghasilan_ayah,
				'nama_ibu' => $_nama_ibu,
				'pekerjaan_ibu' => $_pekerjaan_ibu,
				'penghasilan_ibu' => $_penghasilan_ibu,
				// 'file_aktalahir' => $_filepdf_akta,
				// 'file_nilairaport' => $_filepdf_raport,
			);

			$queryBiodata1 = $this->M_dokumen->updateBiodata1($data_diri1, $id);
			$queryBiodata2 = $this->M_dokumen->updateBiodata2($data_diri2, $id);
			
			if ($query) {
				$this->session->set_flashdata('notification', 'Pendaftaran berhasil, silakan login.');	
				redirect(site_url('Biodata'));
			}
			else{
				$this->session->set_flashdata('notification', 'Pendaftaran gagal, silakan ulangi.');	
				redirect(site_url('Biodata'));
			}

		}
	}
}
