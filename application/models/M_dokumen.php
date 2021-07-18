<?php
defined('BASEPATH') OR exit('Anda tidak boleh mengakses file ini secara langsung'); 
class M_dokumen extends CI_Model{

    var $t_soal_hollandd = 't_soal_holland';

    function tampil_soal_bagian1r(){
        $this->db->where('bagian','1');
        $this->db->where('kelompok','r');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->result();
    }

    function totalBarisR1(){
        $this->db->where('bagian','1');
        $this->db->where('kelompok','r');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->num_rows();
    }

    function queryr1_awal ($a,$b){
        $query = $this->db->query("SELECT * FROM `t_soal_holland` where bagian=1 and kelompok='r' limit $a, $b")->result();
        return $query;
    }

    function queryr1_akhir($b, $c){
        $query = $this->db->query("SELECT * FROM `t_soal_holland` where bagian=1 and kelompok='r' limit $b, $c")->result();
        return $query;
    }

    function tampil_soal_bagian_i1(){
        $this->db->where('bagian','1');
        $this->db->where('kelompok','i');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->result();
    }

    function tampil_soal_bagian_a1(){
        $this->db->where('bagian','1');
        $this->db->where('kelompok','a');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->result();
    }

    function tampil_soal_bagian_s1(){
        $this->db->where('bagian','1');
        $this->db->where('kelompok','s');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->result();
    }

    function tampil_soal_bagian_e1(){
        $this->db->where('bagian','1');
        $this->db->where('kelompok','e');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->result();
    }
    function tampil_soal_bagian_c1(){
        $this->db->where('bagian','1');
        $this->db->where('kelompok','c');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->result();
    }
    

}
?>