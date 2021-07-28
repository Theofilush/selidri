<?php
defined('BASEPATH') OR exit('Anda tidak boleh mengakses file ini secara langsung'); 
class M_dokumen extends CI_Model{

    var $t_soal_hollandd = 't_soal_holland';
    var $t_soal_big_fivee = 't_soal_big_five';
    var $t_jawaban = 't_jawaban';

    function totalBarisR1(){
        $this->db->where('bagian','1');
        $this->db->where('kelompok','r');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->num_rows();
    }
    function totalBarisI1(){
        $this->db->where('bagian','1');
        $this->db->where('kelompok','i');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->num_rows();
    }
    function totalBarisA1(){
        $this->db->where('bagian','1');
        $this->db->where('kelompok','a');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->num_rows();
    }
    function totalBarisS1(){
        $this->db->where('bagian','1');
        $this->db->where('kelompok','s');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->num_rows();
    }
    function totalBarisE1(){
        $this->db->where('bagian','1');
        $this->db->where('kelompok','e');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->num_rows();
    }
    function totalBarisC1(){
        $this->db->where('bagian','1');
        $this->db->where('kelompok','c');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->num_rows();
    }

    function queryr1_awal($a,$b){
        $query = $this->db->query("SELECT * FROM `t_soal_holland` where bagian=1 and kelompok='r' limit $a, $b")->result();
        return $query;
    }
    function queryr1_akhir($b, $c){
        $query = $this->db->query("SELECT * FROM `t_soal_holland` where bagian=1 and kelompok='r' limit $b, $c")->result();
        return $query;
    }
    function queryi1_awal($a,$b){
        $query = $this->db->query("SELECT * FROM `t_soal_holland` where bagian=1 and kelompok='i' limit $a, $b")->result();
        return $query;
    }
    function queryi1_akhir($b, $c){
        $query = $this->db->query("SELECT * FROM `t_soal_holland` where bagian=1 and kelompok='i' limit $b, $c")->result();
        return $query;
    }
    function querya1_awal($a,$b){
        $query = $this->db->query("SELECT * FROM `t_soal_holland` where bagian=1 and kelompok='a' limit $a, $b")->result();
        return $query;
    }
    function querya1_akhir($b, $c){
        $query = $this->db->query("SELECT * FROM `t_soal_holland` where bagian=1 and kelompok='a' limit $b, $c")->result();
        return $query;
    }
    function querys1_awal($a,$b){
        $query = $this->db->query("SELECT * FROM `t_soal_holland` where bagian=1 and kelompok='s' limit $a, $b")->result();
        return $query;
    }
    function querys1_akhir($b, $c){
        $query = $this->db->query("SELECT * FROM `t_soal_holland` where bagian=1 and kelompok='s' limit $b, $c")->result();
        return $query;
    }
    function querye1_awal($a,$b){
        $query = $this->db->query("SELECT * FROM `t_soal_holland` where bagian=1 and kelompok='e' limit $a, $b")->result();
        return $query;
    }
    function querye1_akhir($b, $c){
        $query = $this->db->query("SELECT * FROM `t_soal_holland` where bagian=1 and kelompok='e' limit $b, $c")->result();
        return $query;
    }
    function queryc1_awal($a,$b){
        $query = $this->db->query("SELECT * FROM `t_soal_holland` where bagian=1 and kelompok='c' limit $a, $b")->result();
        return $query;
    }
    function queryc1_akhir($b, $c){
        $query = $this->db->query("SELECT * FROM `t_soal_holland` where bagian=1 and kelompok='c' limit $b, $c")->result();
        return $query;
    }

    function tampil_soal_bagian_r2(){
        $this->db->where('bagian','2');
        $this->db->where('kelompok','r');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->result();
    }

    function tampil_soal_bagian_i2(){
        $this->db->where('bagian','2');
        $this->db->where('kelompok','i');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->result();
    }

    function tampil_soal_bagian_a2(){
        $this->db->where('bagian','2');
        $this->db->where('kelompok','a');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->result();
    }

    function tampil_soal_bagian_s2(){
        $this->db->where('bagian','2');
        $this->db->where('kelompok','s');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->result();
    }

    function tampil_soal_bagian_e2(){
        $this->db->where('bagian','2');
        $this->db->where('kelompok','e');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->result();
    }
    function tampil_soal_bagian_c2(){
        $this->db->where('bagian','2');
        $this->db->where('kelompok','c');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->result();
    }

    function tampil_soal_bagian_r3(){
        $this->db->where('bagian','3');
        $this->db->where('kelompok','r');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->result();
    }

    function tampil_soal_bagian_i3(){
        $this->db->where('bagian','3');
        $this->db->where('kelompok','i');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->result();
    }

    function tampil_soal_bagian_a3(){
        $this->db->where('bagian','3');
        $this->db->where('kelompok','a');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->result();
    }

    function tampil_soal_bagian_s3(){
        $this->db->where('bagian','3');
        $this->db->where('kelompok','s');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->result();
    }

    function tampil_soal_bagian_e3(){
        $this->db->where('bagian','3');
        $this->db->where('kelompok','e');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->result();
    }
    function tampil_soal_bagian_c3(){
        $this->db->where('bagian','3');
        $this->db->where('kelompok','c');
        $query = $this->db->get($this->t_soal_hollandd); 
        return $query->result();
    }

    function totalBarisBigFive(){
        $query = $this->db->get($this->t_soal_big_fivee); 
        return $query->num_rows();
    }

    function queryTBF_awal($a,$b){
        $query = $this->db->query("SELECT * FROM `t_soal_big_five` limit $a, $b")->result();
        return $query;
    }
    function queryTBF_akhir($b, $c){
        $query = $this->db->query("SELECT * FROM `t_soal_big_five` limit $b, $c")->result();
        return $query;
    }

    function save_tes_holland1($data){
        return $this->db->insert($this->t_jawaban, $data);
    }

    function save_update_tes_holland2($data, $id_peserta){
        $this->db->where('id_peserta',$id_peserta);
        return $this->db->update($this->t_jawaban,$data);
    }

    function save_update_tes_holland3($data, $id_peserta){
        $this->db->where('id_peserta',$id_peserta);
        return $this->db->update($this->t_jawaban,$data);
    }
     
    function save_update_tes_bigfive($data, $id_peserta){
        $this->db->where('id_peserta',$id_peserta);
        return $this->db->update($this->t_jawaban,$data);
    }

    // function tampil_hasil_tes(){ //query untuk menampilkan list user pada halaman user      
    //     $query = $this->db->get($this->t_jawaban);        
    //     return $query->result();
    // }

    function tampil_hasil_tes(){
        $this->db->select('*');
        $this->db->join("t_login", 't_jawaban.id_peserta = t_login.no','INNER');
        $this->db->order_by('t_jawaban.tanggal');
        $hasil = $this->db->get($this->t_jawaban);
        return $hasil->result();
    }

    function tampil_soal_holland($id_soal){
        $this->db->where('id_soal',$id_soal);
        $this->db->order_by('t_soal_holland.bagian','ASC');
        $this->db->order_by('t_soal_holland.kelompok', 'ASC');
        $query = $this->db->get("t_soal_holland");
        return $query->result();
    }

    function tampil_soal_bigfive($id_soal){
        $this->db->where('id_soal',$id_soal);
        $this->db->order_by('t_soal_big_five.kelompok','ASC');
        $query = $this->db->get("t_soal_big_five");
        return $query->result();
    }

}
?>