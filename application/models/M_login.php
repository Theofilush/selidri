<?php

defined('BASEPATH') OR exit('Anda tidak boleh mengakses file ini secara langsung'); 
class M_login extends CI_Model{	

	function cek_login($table,$usn){		
		$this->db->where("email", $usn);
		$query = $this->db->get("t_login");
	    return $query;
	}

	function hak_ak($usan){          
        $this->db->where("email", $usan);
        $hasil = $this->db->get('t_login');
        return $hasil->result();    	
	}

	function simpanUpdatePass($data, $email){//query untuk menyimpan user baru pada halaman tambah users
        $this->db->where('email',$email);
        $hasil = $this->db->update("t_login", $data);
        return $hasil; 
    }

    function insertDataDiri($dataDiri){
        return $this->db->insert('data_diri', $dataDiri);
    } 
    function insertDatasekolah($dataSekolah){
        return $this->db->insert('data_sekolah', $dataSekolah);
    } 
    function insertDataAkademik($dataAkademik){
        return $this->db->insert('data_akademik', $dataAkademik);
    } 

    function add_account($data){
        return $this->db->insert('temp_register',$data);
    }
    
    function changeActiveState($key){
        $data = array(
            'active' => 1
        );
        
        $this->db->where('md5(no)', $key);
        $this->db->update('temp_register', $data);
        
        return true;
    }

    function getRegister($no){
        $this->db->where("no", $no);
        $hasil = $this->db->get('temp_register');
        return $hasil->result();
	}

    function delete_tempRegister($id){
        $this->db->where('no', $id);
        $this->db->delete('temp_register');
    }

    function insert_TLogin($data){
        return $this->db->insert('t_login', $data);
    } 

}

?>