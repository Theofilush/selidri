<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');		
	}

	public function index(){
		$this->load->view('login/v_login');
		if($this->session->userdata('status') == "login"){
			redirect(site_url("dashboard"));
		}
	}

	public function aksi_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email
			//'password' => md5($password),
			);
		$cek = $this->m_login->cek_login("t_login",$email)->num_rows();
		if($cek > 0){
			$db=$this->m_login->cek_login("t_login",$email)->row();
			if(hash_verified($password ,$db->password)) {
				if ($db->ubah_password == "belum") { 
					$data_session = array(
						'email' => $email,
                        'id_peserta' => $db->no,
						'status' => "login",
					);
					$this->session->set_userdata($data_session);
					redirect(site_url("login/ubah_firstpassword"),'refresh');
				} elseif ($db->ubah_password == "sudah") {
					$data_session = array(
						'email' => $email,
                        'id_peserta' => $db->no,
						'status' => "login"
					);
					$this->session->set_userdata($data_session);
					redirect(site_url("dashboard"),'refresh');
				}		
			}
			else{
				$this->session->set_flashdata('notification','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        Maaf Password Salah. 
                                    </div>');
				redirect('','refresh');
			}
		}else{
			$this->session->set_flashdata('notification', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        Email tidak ditemukan. 
                                    </div>');	
			  redirect(site_url());
		}
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

	public function ubah_firstpassword() {
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);

		$dataHalaman = array(
		  'title'=>"Ubah Password",		
		  'da' => $kue,
        );
		$this->load->view('login/v_ubah_firstpassword', $dataHalaman);
	}

	public function aksi_ubah_firstpassword(){
		$_email = $this->input->post('email');
		$password_baru = $this->input->post('password_baru');
		$ulangi_password_baru = $this->input->post('ulangi_password_baru');
		if($password_baru == ""){
            $this->session->set_flashdata('notification_password', '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin: 0px;">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        Password Tidak Terisi!
                                    </div>');
            redirect('login/ubah_firstpassword','refresh');
        }
        else {
            if ($password_baru == $ulangi_password_baru) {
              $data = array(
                'password'=> get_hash($password_baru),
                'ubah_password' => "sudah",
              );
              $query= $this->M_login->simpanUpdatePass($data, $_email);
            }
            else { //jika password tidak sama
			  $this->session->set_flashdata('notification_password', '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin: 0px;">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        Password konfirmasi tidak cocok!
                                    </div>');
                redirect('login/ubah_firstpassword','refresh');
            }
        }

        if ($query) {
            $this->session->set_flashdata('notification_password', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        Edit Password Berhasil!
                                    </div>');
            redirect('dashboard','refresh');            
        }
        else{
            $this->session->set_flashdata('notification_password', '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin: 0px;">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        Edit Password Gagal!
                                    </div>');
            redirect('login/ubah_firstpassword','refresh');
        }
	}

	public function ubah_password() {
		$usan = $this->session->userdata('email');
		$kue = $this->M_login->hak_ak($usan);

		$dataHalaman = array(
		  'title'=>"Ubah Password",		
		  'da' => $kue,
        );
		$this->load->view('login/v_ubah_password', $dataHalaman);
	}

	public function aksi_ubah_password(){
		$_email = $this->input->post('email');
		$password_baru = $this->input->post('password_baru');
		$ulangi_password_baru = $this->input->post('ulangi_password_baru');
		if($password_baru == ""){
            $this->session->set_flashdata('notification_password', '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin: 0px;">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        Password Tidak Terisi!
                                    </div>');
            redirect('login/ubah_password','refresh');
        }
        else {
            if ($password_baru == $ulangi_password_baru) {
              $data = array(
                'password'=> get_hash($password_baru),
              );
              $query= $this->M_login->simpanUpdatePass($data, $_email);
            }
            else { //jika password tidak sama
			  $this->session->set_flashdata('notification_password', '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin: 0px;">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        Password konfirmasi tidak cocok!
                                    </div>');
                redirect('login/ubah_password','refresh');
            }
        }

        if ($query) {
            $this->session->set_flashdata('notification_password', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        Edit Password Berhasil!
                                    </div>');
            redirect('dashboard','refresh');            
        }
        else{
            $this->session->set_flashdata('notification_password', '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin: 0px;">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        Edit Password Gagal!
                                    </div>');
            redirect('login/ubah_password','refresh');
        }
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}
}
