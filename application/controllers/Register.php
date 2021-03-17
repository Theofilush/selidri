<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	
		// if($this->session->userdata('status') != "login"){
		// 	redirect(site_url("login"));
		// } 	
	}

	public function index()
	{
		// $dataHalaman = array(
		//   'title'=>"Dashboard",		
		//   'da' => $kue,
        //  );
		$this->load->view('v_register');
	}


	function signup(){
		if($this->input->post('btnSimpan') == "Simpan"){
			$_nik = $this->input->post('nik', TRUE);
			$_nama_lengkap = $this->input->post('nama_lengkap', TRUE);
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
			// $_ = $this->input->post('', TRUE);

			$_nama_sekolah = $this->input->post('nama_sekolah', TRUE);
			$_alamat_sekolah = $this->input->post('alamat_sekolah', TRUE);
			$_status_sekolah = $this->input->post('status_sekolah', TRUE);
			$_jenis_sekolah = $this->input->post('jenis_sekolah', TRUE);
			$_kejuruan = $this->input->post('kejuruan', TRUE);

			$_nilai_agama = $this->input->post('nilai_agama', TRUE);
			$_nilai_pkn = $this->input->post('nilai_pkn', TRUE);
			$_nilai_matematika = $this->input->post('nilai_matematika', TRUE);
			$_nilai_bhsinggris = $this->input->post('nilai_bhsinggris', TRUE);
			$_nilai_bhsindonesia = $this->input->post('nilai_bhsindonesia', TRUE);
			$_nilai_sejarah = $this->input->post('nilai_sejarah', TRUE);
			$_nilai_kewirausahaan = $this->input->post('nilai_kewirausahaan', TRUE);
			$_nilai_kejuruan = $this->input->post('nilai_kejuruan', TRUE);
			
			$_filepdf_akta = $this->input->post('filepdf_akta', TRUE);
			$_filepdf_raport = $this->input->post('filepdf_raport', TRUE);
			
			$data_diri = array(
				'' => $_nik,
				'' => $_nama_lengkap,
				'' => $_email,
				'' => $_tempat_lahir,
				'' => $_tanggal_lahir,
				'' => $_nomor_handphone,
				'' => $_nama_ayah,
				'' => $_pekerjaan_ayah,
				'' => $_penghasilan_ayah,
				'' => $_nama_ibu,
				'' => $_pekerjaan_ibu,
				'' => $_penghasilan_ibu,
				'' => $_filepdf_akta,
				'' => $_filepdf_raport,
			);

			$data_sekolah = array(
				'' => $_nama_sekolah,
				'' => $_alamat_sekolah,
				'' => $_status_sekolah,
				'' => $_jenis_sekolah,
				'' => $_kejuruan,
			);

			$data_akademik = array(
				'' => $_nilai_agama,
				'' => $_nilai_pkn,
				'' => $_nilai_matematika,
				'' => $_nilai_bhsinggris,
				'' => $_nilai_bhsindonesia,
				'' => $_nilai_sejarah,
				'' => $_nilai_kewirausahaan,
				'' => $_nilai_kejuruan,
			);

			$query= $this->M_pengguna->simpanUser($data);
			if ($query) {
				$this->session->set_flashdata('notification', 'Pendaftaran berhasil, silakan login.');	
			redirect(site_url('users'));
			}
			else{
					$this->session->set_flashdata('notification', 'Pendaftaran gagal, silakan ulangi.');	
				  redirect(site_url('users'));
			}

		}
	}
}
