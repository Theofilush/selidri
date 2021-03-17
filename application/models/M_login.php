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

}

?>