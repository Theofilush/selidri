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
		redirect(site_url("Pengelolaan/data_prodi"));
    }
    
    public function data_prodi(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);
		foreach($kue as $key){$kuee = $key;}
		$querycek = $this->M_dokumen->cekSudahIsiTesBigFive($kuee->no);

		if ($querycek[0]->author == 'camaba') {
			redirect(site_url('Dashboard'));
		}

		$dataHalaman = array(
		  'title'=>"Data Prodi",
		  'da' => $kue,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('v_data_prodi');
		$this->load->view('dashboard/v_footer');
    }
    
    public function data_camaba(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);
		$queryTampilCamaba = $this->M_dokumen->tampil_daftar_data_camaba();
		$queryTampilDosen = $this->M_dokumen->tampil_daftar_data_dosen();
		foreach($kue as $key){$kuee = $key;}
		$querycek = $this->M_dokumen->cekSudahIsiTesBigFive($kuee->no);

		if ($querycek[0]->author == 'camaba') {
			redirect(site_url('Dashboard'));
		}

		$dataHalaman = array(
		  'title'=>"Data Camaba",		
		  'da' => $kue,
		  'queryTampilCamaba'=> $queryTampilCamaba,
		  'queryTampilDosen'=> $queryTampilDosen,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('v_data_camaba');
		$this->load->view('dashboard/v_footer');
    }

	public function data_camaba_tambah1(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);
		foreach($kue as $key){$kuee = $key;}
		$querycek = $this->M_dokumen->cekSudahIsiTesBigFive($kuee->no);

		if ($querycek[0]->author == 'camaba') {
			redirect(site_url('Dashboard'));
		}

		$dataHalaman = array(
		  'title'=>"Data Camaba",		
		  'da' => $kue,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('v_data_camaba_add1');
		$this->load->view('dashboard/v_footer');
    }

	public function data_camaba_tambah2(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);
		foreach($kue as $key){$kuee = $key;}
		$querycek = $this->M_dokumen->cekSudahIsiTesBigFive($kuee->no);

		if ($querycek[0]->author == 'camaba') {
			redirect(site_url('Dashboard'));
		}

		$dataHalaman = array(
		  'title'=>"Data Camaba",		
		  'da' => $kue,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('v_data_camaba_add2');
		$this->load->view('dashboard/v_footer');
    }

	public function aksi_tambahUser1(){
		if($this->input->post('btnSimpan') == "Simpan"){
			$nama_lengkap = $this->input->post('nama_lengkap', TRUE);
			$email = $this->input->post('email', TRUE);
			$no_handphone = $this->input->post('no_handphone', TRUE);
			$asal_sekolah = $this->input->post('asal_sekolah', TRUE);
			$password = $this->input->post('password', TRUE);
			$prodi_pilihan = $this->input->post('prodi_pilihan', TRUE);

			$data = array(
				  'nama' => $nama_lengkap,
				  'email' => $email,
				  'no_handphone' => $no_handphone,
				  'asal_sekolah'=> $asal_sekolah,
				  'prodi_pilihan'=> $prodi_pilihan,
				  'password'=> get_hash($password),
				  'author'=> 'camaba',
				  'ubah_password' => 'belum',
				  'isi_regist' => 'belum',
				  'isi_tes_holland' => 'belum',
				  'isi_tes_bigfive' => 'belum',
			); 
				$query= $this->M_dokumen->simpanUser($data);
				if ($query) {
					$this->session->set_flashdata('notification', 'Penambahan Peserta Berhasil');	
				  redirect(site_url('Pengelolaan/data_camaba'));
				}
				else{
					$this->session->set_flashdata('notification', 'Penambahan Peserta Tidak Berhasil');	
				  redirect(site_url('Pengelolaan/data_camaba'));
				}
		}
	}

	public function aksi_tambahUser2(){
		if($this->input->post('btnSimpan') == "Simpan"){
			$nama_lengkap = $this->input->post('nama_lengkap', TRUE);
			$email = $this->input->post('email', TRUE);
			$no_handphone = $this->input->post('no_handphone', TRUE);
			$password = $this->input->post('password', TRUE);
			$prodi_pilihan = $this->input->post('prodi_pilihan', TRUE);

			$data = array(
				  'nama' => $nama_lengkap,
				  'email' => $email,
				  'no_handphone' => $no_handphone,
				  'prodi_pilihan'=> $prodi_pilihan,
				  'password'=> get_hash($password),
				  'author'=> 'kaprodi',
				  'ubah_password' => 'belum',
			); 
				$query= $this->M_dokumen->simpanUser($data);
				if ($query) {
					$this->session->set_flashdata('notification', 'Penambahan Peserta Berhasil');	
				  redirect(site_url('Pengelolaan/data_camaba'));
				}
				else{
					$this->session->set_flashdata('notification', 'Penambahan Peserta Tidak Berhasil');	
				  redirect(site_url('Pengelolaan/data_camaba'));
				}
		}
	}

	public function data_camaba_detail1($id){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);
		$queryTampilCamaba = $this->M_dokumen->tampil_data_edit_camaba($id);
		foreach($kue as $key){$kuee = $key;}
		$querycek = $this->M_dokumen->cekSudahIsiTesBigFive($kuee->no);

		if ($querycek[0]->author == 'camaba') {
			redirect(site_url('Dashboard'));
		}

		$dataHalaman = array(
		  'title'=>"Data Camaba",		
		  'da' => $kue,
		  'queryTampilCamaba'=> $queryTampilCamaba,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('v_data_camaba_edit1');
		$this->load->view('dashboard/v_footer');
    }

	public function data_camaba_detail2($id){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);
		$queryTampilDosen = $this->M_dokumen->tampil_data_edit_dosen($id);
		foreach($kue as $key){$kuee = $key;}
		$querycek = $this->M_dokumen->cekSudahIsiTesBigFive($kuee->no);

		if ($querycek[0]->author == 'camaba') {
			redirect(site_url('Dashboard'));
		}

		$dataHalaman = array(
		  'title'=>"Data Camaba",		
		  'da' => $kue,
		  'queryTampilDosen'=> $queryTampilDosen,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('v_data_camaba_edit2');
		$this->load->view('dashboard/v_footer');
    }

	public function aksi_editUser1(){
		if ($this->input->post('btnSimpan') == "Simpan") {
			$nama_lengkap = $this->input->post('nama_lengkap', TRUE);
			$email = $this->input->post('email', TRUE);
			$no_handphone = $this->input->post('no_handphone', TRUE);
			$asal_sekolah = $this->input->post('asal_sekolah', TRUE);
			$prodi_pilihan = $this->input->post('prodi_pilihan', TRUE);

			$_password = $this->input->post('ppassword', TRUE);
			$_cpassword = $this->input->post('cpassword', TRUE);
			$id = $this->input->post('id', TRUE);
			
			if($_password == ""){
			  $data = array(
				'nama' => $nama_lengkap,
				'email' => $email,
				'no_handphone' => $no_handphone,
				'asal_sekolah' => $asal_sekolah,
				'prodi_pilihan' => $prodi_pilihan,
			  );
			  $query= $this->M_dokumen->simpanUpdateUser($data,$id);
			}
			else{
			  if ($_password == $_cpassword) { //jika password sama
				//kumpulkan semua inputan kedalam array
				$data = array(
					'nama' => $nama_lengkap,
					'email' => $email,
					'no_handphone' => $no_handphone,
					'asal_sekolah' => $asal_sekolah,
					'prodi_pilihan' => $prodi_pilihan,
				  	'password'=> get_hash($_password), 
				);              
				$query= $this->M_dokumen->simpanUpdateUser($data,$id);
			  }
			  else{
				//jika password tidak sama
				$this->session->set_flashdata('notification_password', '<div class="col-xs-5 alert alert-danger alert-dismissible pull-right">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<p><i class="icon fa fa-ban"></i> Password konfirmasi tidak cocok!</p>
				  </div>');
				redirect('Pengelolaan/data_camaba');
			  }
			}

			if ($query) {
			  redirect('Pengelolaan/data_camaba');
			}
			else{
				   $this->session->set_flashdata( ' notification_password', '<div class="col-xs-5 alert alert-danger alert-dismissible pull-right">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <p><i class="icon fa fa-ban"></i> Edit Data gagal dilakukan</p>
				</div>');
			  redirect('Pengelolaan/data_camaba');
			}
		}
	}

	public function aksi_editUser2(){
		if ($this->input->post('btnSimpan') == "Simpan") {
			$nama_lengkap = $this->input->post('nama_lengkap', TRUE);
			$email = $this->input->post('email', TRUE);
			$no_handphone = $this->input->post('no_handphone', TRUE);

			$_password = $this->input->post('password', TRUE);
			$_cpassword = $this->input->post('cpassword', TRUE);
			$id = $this->input->post('id', TRUE);
			
			if($_password == ""){
			  $data = array(
				'nama' => $nama_lengkap,
				'email' => $email,
				'no_handphone' => $no_handphone,
			  );
			  $query= $this->M_dokumen->simpanUpdateUser($data,$id);
			}
			else{
			  if ($_password == $_cpassword) { //jika password sama
				//kumpulkan semua inputan kedalam array
				$data = array(
					'nama' => $nama_lengkap,
					'email' => $email,
					'no_handphone' => $no_handphone,
				  'password'=> get_hash($_password), 
				);              
				$query= $this->M_dokumen->simpanUpdateUser($data,$id);
			  }
			  else{
				//jika password tidak sama
				$this->session->set_flashdata('notification_password', '<div class="col-xs-5 alert alert-danger alert-dismissible pull-right">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<p><i class="icon fa fa-ban"></i> Password konfirmasi tidak cocok!</p>
				  </div>');
				redirect('Pengelolaan/data_camaba');
			  }
			}

			if ($query) {
			  redirect('Pengelolaan/data_camaba');
			}
			else{
				   $this->session->set_flashdata( ' notification_password', '<div class="col-xs-5 alert alert-danger alert-dismissible pull-right">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <p><i class="icon fa fa-ban"></i> Edit Data gagal dilakukan</p>
				</div>');
			  redirect('Pengelolaan/data_camaba');
			}
		}
	}

	public function data_camaba_hapus1($id){
		$this->M_dokumen->deleteUser($id);
		redirect('Pengelolaan/data_camaba');
    }

	public function data_camaba_hapus2($id){
		$this->M_dokumen->deleteUser($id);
		redirect('Pengelolaan/data_camaba');
    }
    
    public function data_pengukuran(){
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);
		$queryHolland = $this->M_dokumen->tampil_daftar_soal_holland();
		$queryBigFive = $this->M_dokumen->tampil_daftar_soal_bigfive();
		foreach($kue as $key){$kuee = $key;}
		$querycek = $this->M_dokumen->cekSudahIsiTesBigFive($kuee->no);

		if ($querycek[0]->author == 'camaba') {
			redirect(site_url('Dashboard'));
		}

		$dataHalaman = array(
		  'title'=>"Data Pengukuran",		
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
		foreach($kue as $key){$kuee = $key;}
		$querycek = $this->M_dokumen->cekSudahIsiTesBigFive($kuee->no);

		if ($querycek[0]->author == 'camaba') {
			redirect(site_url('Dashboard'));
		}

		$dataHalaman = array(
		  'title'=>"Data Hasil",
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
		
		foreach($kue as $key){$kuee = $key;}
		$querycek = $this->M_dokumen->cekSudahIsiTesBigFive($kuee->no);

		if ($querycek[0]->author == 'camaba') {
			redirect(site_url('Dashboard'));
		}

		$dataHalaman = array(
		  'title'=>"Edit Data",
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
		foreach($kue as $key){$kuee = $key;}
		$querycek = $this->M_dokumen->cekSudahIsiTesBigFive($kuee->no);

		if ($querycek[0]->author == 'camaba') {
			redirect(site_url('Dashboard'));
		}

		$dataHalaman = array(
		  'title'=>"Edit Data",
		  'da' => $kue,
		  'queryBigFive'=> $queryBigFive,
        );
		$this->load->view('dashboard/v_header', $dataHalaman);
		$this->load->view('v_edit_data_pengukuran_bigfive');
		$this->load->view('dashboard/v_footer');
    }

	public function update_data_pengukuran_holland(){
		if ($this->input->post('btnSimpan') == "Simpan") {
			$id_soal = $this->input->post('id_soal', TRUE);
			$soal = $this->input->post('soal', TRUE);
			$kelompok = $this->input->post('kelompok', TRUE);
			$bagian = $this->input->post('bagian', TRUE);

			$data = array(
				'soal' => $soal,
				'kelompok' => $kelompok,
				'bagian' => $bagian,
			);
			$query= $this->M_dokumen->update_soal_holland($data,$id_soal);

			if ($query) {
				redirect('Pengelolaan/data_pengukuran');
			}
			else{
				redirect('Pengelolaan/data_pengukuran');
			}
		}
    }

	public function update_data_pengukuran_bigfive(){
		if ($this->input->post('btnSimpan') == "Simpan") {
			$id_soal = $this->input->post('id_soal', TRUE);
			$soal = $this->input->post('soal', TRUE);
			$kelompok = $this->input->post('kelompok', TRUE);

			$data = array(
				'soal' => $soal,
				'kelompok' => $kelompok,
			);
			$query= $this->M_dokumen->update_soal_bigfive($data,$id_soal);

			if ($query) {
				redirect('Pengelolaan/data_pengukuran');
			}
			else{
				redirect('Pengelolaan/data_pengukuran');
			}
		}
    }
    
    
}
