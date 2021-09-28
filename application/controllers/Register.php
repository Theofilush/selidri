<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');	
		// if($this->session->userdata('status') != "login"){
		// 	redirect(site_url("login"));
		// } 	
	}

	public function index() {
		if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		} 	
		$this->load->view('login/v_register');
	}

	public function notifikasi_error() {
		$this->load->view('login/v_notif_email');
	}
	
	function randomPassword() {
	    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $pass = array(); //remember to declare $pass as an array
	    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
	    for ($i = 0; $i < 15; $i++) {
	        $n = rand(0, $alphaLength);
	        $pass[] = $alphabet[$n];
	    }
	    return implode($pass); //turn the array into a string
	}

	public function buat_akun() {
		$vals = array(
			'word' => rand(1,999999),
			'img_path' => './captcha/',
			'img_url' => base_url().'captcha/',
			'font_path' => base_url().'captcha/fonts/Monaco.ttf',
			'img_width' => 170,
			'img_height' => 45,
			'expiration' => 7200,
			'font_size'     => 32,
			'word_length' => 6,
			'colors' => array(
				'background' => array(255, 255, 255),
				'border'     => array(255, 255, 255),
				'text'       => array(0, 0, 0),
				'grid'       => array(255, 75, 100)
				)
			);
		$_captcha = create_captcha($vals);
		$this->session->set_userdata('keycode',md5($_captcha['word']));

		$dataHalaman = array(
			'captcha_img' =>$_captcha['image'],
		 );
		$this->load->view('login/v_buat_akun', $dataHalaman);
	}
	
	public function verifikasi($key, $id) {
		$this->M_login->changeActiveState($key);

		$getRegister = $this->M_login->getRegister($id);

		foreach ($getRegister as $row) {
			$nama = $row->nama;
			$email = $row->email;
			$asal_sekolah = $row->asal_sekolah;
			$no_handphone = $row->no_handphone;
			$prodi_pilihan = $row->prodi_pilihan;
			$password = $row->password;
		}

		$data = array(
			'nama' => $nama,
			'email' => $email, 
			'asal_sekolah' => $asal_sekolah,
			'no_handphone' => $no_handphone,
			'prodi_pilihan' => $prodi_pilihan,
			'password' => get_hash($password),
			'author' => 'camaba', 
			'ubah_password' => 'belum',
			'isi_regist' => 'belum',
			'isi_tes_holland' => 'belum',
			'isi_tes_bigfive' => 'belum',
        );
		$datal = array(
			'id_camaba' => $id,
			"id_dataakademik" => $id,
			"id_datasekolah" =>$id,
			"id_datapilprod" =>$id,
		);
		$this->M_login->insert_TLogin($data,$datal);

		$this->M_login->delete_tempRegister($id);

		// echo "Selamat kamu telah memverifikasi akun kamu"; 
		// echo "<br><br><a href='".site_url("login")."'>Kembali ke Menu Login</a>";

		$this->load->view('login/v_konfirmasi_aktif');
	}

	public function aksi_buatakun(){
		if($this->input->post('btnSimpan') == "Simpan"){
			$_email = $this->input->post('email');
			$_cemail = $this->input->post('cemail');
			$_asal_sekolah = $this->input->post('asal_sekolah');
			$_no_handphone = $this->input->post('no_handphone');
			$_prodi_pilihan = $this->input->post('prodi_pilihan');
			$_captcha = $this->input->post('captcha');
			$_nama_lengkap = $this->input->post('nama_lengkap');
			$_tempPassword = $this->randomPassword();

			if ($_email == $_cemail) {

				$cek = $this->m_login->cek_login2("t_login",$_email); 
				if($cek != null ){ 
					$this->session->set_flashdata('notification', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
														<button type="button" class="close" data-dismiss="alert" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
														Email sudah terdaftar, silakan login, jika lupa password harap hubungi administrator.
													</div>');
						redirect('login','refresh');
				}

				$data = array(
					'email' => $_email,
					'asal_sekolah' => $_asal_sekolah,
					'no_handphone' => $_no_handphone,
					'prodi_pilihan' => $_prodi_pilihan,
					'nama' => $_nama_lengkap,
					'password' => $_tempPassword,
					'active' => 0
				);

				$this->M_login->add_account($data);

				$query = $this->db->query('SELECT * FROM temp_register WHERE email="'.$_email.'" ORDER BY no DESC');
				$row = $query->row();

				if (isset($row)){
					$id = $row->no;
				}
				$encrypted_id = md5($id);
				
				$config = array();
				$config['charset'] = 'utf-8';
				$config['useragent'] = 'Codeigniter';
				$config['protocol']= "smtp";
				$config['mailtype']= "html";
				$config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
				$config['smtp_port']= "465";
				$config['smtp_timeout']= "400";
				$config['smtp_user']= "syakilagha@gmail.com"; // isi dengan email kamu
				$config['smtp_pass']= "Xesobuj3"; // isi dengan password kamu
				$config['crlf']="\r\n";
				$config['newline']="\r\n";
				$config['wordwrap'] = TRUE;

				// //memanggil library email dan set konfigurasi untuk pengiriman email
				$this->email->initialize($config);

				//konfigurasi pengiriman
				$this->email->from($config['smtp_user']);
				$this->email->to($_email);
				$this->email->subject("Verifikasi Akun");
				$this->email->message(
					"Hai $_nama_lengkap, Terimakasih telah melakukan pendaftaran online.<br><br> Berikut informasi login sementara akun anda:<br>
					<b>email : </b> $_email  <br>
					<b>password : </b> $_tempPassword  <br><Br>
					
					Silahkan verifikasi akun anda, WAJIB dibuka <br><br>".
					site_url("register/verifikasi/$encrypted_id/$id")
				);

				if(md5($_captcha) == $this->session->userdata('keycode')){
					$data['nama'] = $_nama_lengkap;
					$data['captcha']= $_captcha;
					$this->session->unset_userdata('keycode');

					//notifikasi registrasi berhasil
					if($this->email->send()){
						$this->session->set_flashdata('notification', '<div class="alert alert-success alert-dismissible fade show" role="alert">
														<button type="button" class="close" data-dismiss="alert" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
														Email terkirim, diharapkan untuk verifikasi melalui email
													</div>');
						redirect('login','refresh'); 
					}
					else {
						$this->session->set_flashdata('notification', '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin: 0px;">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											Registrasi berhasil, tetapi tidak dapat mengirimkan aktivasi email. Hubungi administrator!
											</div>');
						redirect('login','refresh');
					}
				}
				else {
					redirect('Register/buat_akun/?cap_error=1','refresh');
				}
			}
			else { //jika email tidak sama
				redirect('Register/notifikasi_error','refresh');
			}
		}
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
