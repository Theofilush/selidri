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
				'nik' => $_nik,
				'nama_lengkap' => $_nama_lengkap,
				'email' => $_email,
				'tempat_lahir' => $_tempat_lahir,
				'tanggal_lahir' => $_tanggal_lahir,
				'no_telp' => $_nomor_handphone,
				'nama_ayah' => $_nama_ayah,
				'pekerjaan_ayah' => $_pekerjaan_ayah,
				'penghasilan_ayah' => $_penghasilan_ayah,
				'nama_ibu' => $_nama_ibu,
				'pekerjaan ibu' => $_pekerjaan_ibu,
				'penghasilan_ibu' => $_penghasilan_ibu,
				'file_aktalahir' => $_filepdf_akta,
				'file_nilairaport' => $_filepdf_raport,
			);

			$data_sekolah = array(
				'nama_sekolah' => $_nama_sekolah,
				'alamat_sekolah' => $_alamat_sekolah,
				'status_sekolah' => $_status_sekolah,
				'jenis_sekolah' => $_jenis_sekolah,
				'kejuruan' => $_kejuruan,
			);

			$data_akademik = array(
				'nilai_agama' => $_nilai_agama,
				'nilai_pkn' => $_nilai_pkn,
				'nilai_matematika' => $_nilai_matematika,
				'nilai_bhsinggris' => $_nilai_bhsinggris,
				'nilai_bhsindonesia' => $_nilai_bhsindonesia,
				'nilai_sejarah' => $_nilai_sejarah,
				'nilai_kewirausahaan' => $_nilai_kewirausahaan,
				'nilai_kejuruan' => $_nilai_kejuruan,
			);

			$queryDataDiri = $this->M_login->insertDataDiri($data_diri);
			$queryDataSekolah = $this->M_login->insertDatasekolah($data_sekolah);
			$queryAkademik = $this->M_login->insertDataAkademik($data_akademik);

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
