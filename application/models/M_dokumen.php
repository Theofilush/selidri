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
    
    function save_update_rekomendasi1($txtProdi, $id_peserta){
        $this->db->where('id_peserta',$id_peserta);
        return $this->db->update($this->t_jawaban,$txtProdi);
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

    function tampil_daftar_soal_holland(){
        $this->db->order_by('t_soal_holland.bagian','ASC');
        $this->db->order_by('t_soal_holland.kelompok', 'ASC');
        $query = $this->db->get("t_soal_holland");
        return $query->result();
    }

    function tampil_daftar_soal_bigfive(){
        $this->db->order_by('t_soal_big_five.kelompok','ASC');
        $query = $this->db->get("t_soal_big_five");
        return $query->result();
    }

    function tampil_daftar_data_camaba(){
        $this->db->order_by('t_soal_holland.bagian','ASC');
        $this->db->order_by('t_soal_holland.kelompok', 'ASC');
        $query = $this->db->get("t_soal_holland");
        return $query->result();
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

    function update_soal_holland($data,$id_soal){
        $this->db->where('id_soal',$id_soal);
        return $this->db->update("t_soal_holland",$data);
    }
    
    function update_soal_bigfive($data,$id_soal){
        $this->db->where('id_soal',$id_soal);
        return $this->db->update("t_soal_big_five",$data);
    }

    function jumlah_r1($id_peserta){
        $this->db->select_sum('r1');
        $this->db->where('id_peserta',$id_peserta);
        $query = $this->db->get($this->t_jawaban ); 
        return $query->result();
    }

    function jumlah_r2($id_peserta){
        $this->db->select_sum('r2');
        $this->db->where('id_peserta',$id_peserta);
        $query = $this->db->get($this->t_jawaban ); 
        return $query->result();
    }

    function jumlah_r3($id_peserta){
        $this->db->select_sum('r3');
        $this->db->where('id_peserta',$id_peserta);
        $query = $this->db->get($this->t_jawaban ); 
        return $query->result();
    }

    function jumlah_i1($id_peserta){
        $this->db->select_sum('i1');
        $this->db->where('id_peserta',$id_peserta);
        $query = $this->db->get($this->t_jawaban ); 
        return $query->result();
    }

    function jumlah_i2($id_peserta){
        $this->db->select_sum('i2');
        $this->db->where('id_peserta',$id_peserta);
        $query = $this->db->get($this->t_jawaban ); 
        return $query->result();
    }

    function jumlah_i3($id_peserta){
        $this->db->select_sum('i3');
        $this->db->where('id_peserta',$id_peserta);
        $query = $this->db->get($this->t_jawaban ); 
        return $query->result();
    }

    function jumlah_a1($id_peserta){
        $this->db->select_sum('a1');
        $this->db->where('id_peserta',$id_peserta);
        $query = $this->db->get($this->t_jawaban ); 
        return $query->result();
    }

    function jumlah_a2($id_peserta){
        $this->db->select_sum('a2');
        $this->db->where('id_peserta',$id_peserta);
        $query = $this->db->get($this->t_jawaban ); 
        return $query->result();
    }

    function jumlah_a3($id_peserta){
        $this->db->select_sum('a3');
        $this->db->where('id_peserta',$id_peserta);
        $query = $this->db->get($this->t_jawaban ); 
        return $query->result();
    }

    function jumlah_s1($id_peserta){
        $this->db->select_sum('s1');
        $this->db->where('id_peserta',$id_peserta);
        $query = $this->db->get($this->t_jawaban ); 
        return $query->result();
    }

    function jumlah_s2($id_peserta){
        $this->db->select_sum('s2');
        $this->db->where('id_peserta',$id_peserta);
        $query = $this->db->get($this->t_jawaban ); 
        return $query->result();
    }

    function jumlah_s3($id_peserta){
        $this->db->select_sum('s3');
        $this->db->where('id_peserta',$id_peserta);
        $query = $this->db->get($this->t_jawaban ); 
        return $query->result();
    }

    function jumlah_e1($id_peserta){
        $this->db->select_sum('e1');
        $this->db->where('id_peserta',$id_peserta);
        $query = $this->db->get($this->t_jawaban ); 
        return $query->result();
    }

    function jumlah_e2($id_peserta){
        $this->db->select_sum('e2');
        $this->db->where('id_peserta',$id_peserta);
        $query = $this->db->get($this->t_jawaban ); 
        return $query->result();
    }

    function jumlah_e3($id_peserta){
        $this->db->select_sum('e3');
        $this->db->where('id_peserta',$id_peserta);
        $query = $this->db->get($this->t_jawaban ); 
        return $query->result();
    }

    function jumlah_c1($id_peserta){
        $this->db->select_sum('c1');
        $this->db->where('id_peserta',$id_peserta);
        $query = $this->db->get($this->t_jawaban ); 
        return $query->result();
    }

    function jumlah_c2($id_peserta){
        $this->db->select_sum('c2');
        $this->db->where('id_peserta',$id_peserta);
        $query = $this->db->get($this->t_jawaban ); 
        return $query->result();
    }

    function jumlah_c3($id_peserta){
        $this->db->select_sum('c3');
        $this->db->where('id_peserta',$id_peserta);
        $query = $this->db->get($this->t_jawaban ); 
        return $query->result();
    }

    function ambil_prodi_pilihan($id_peserta){
        $this->db->select('prodi_pilihan');
        $this->db->where('no',$id_peserta);
        $query = $this->db->get("t_login");
        return $query->result();
    }

    function ambil_kode_acuan_prodi($id_peserta){
        $query = $this->db->get("kode_acuan_prodi");
        return $query->result_array();
    }

    function ambil_acuan_skoring_R($kateg_acuan_prodi){
        $this->db->select('R');
        $this->db->where('KATEG',$kateg_acuan_prodi);
        $query = $this->db->get("acuan_skoring");
        return $query->result();
    }
    function ambil_acuan_skoring_I($kateg_acuan_prodi){
        $this->db->select('I');
        $this->db->where('KATEG',$kateg_acuan_prodi);
        $query = $this->db->get("acuan_skoring");
        return $query->result();
    }
    function ambil_acuan_skoring_A($kateg_acuan_prodi){
        $this->db->select('A');
        $this->db->where('KATEG',$kateg_acuan_prodi);
        $query = $this->db->get("acuan_skoring");
        return $query->result();
    }
    function ambil_acuan_skoring_S($kateg_acuan_prodi){
        $this->db->select('S');
        $this->db->where('KATEG',$kateg_acuan_prodi);
        $query = $this->db->get("acuan_skoring");
        return $query->result();
    }
    function ambil_acuan_skoring_E($kateg_acuan_prodi){
        $this->db->select('E');
        $this->db->where('KATEG',$kateg_acuan_prodi);
        $query = $this->db->get("acuan_skoring");
        return $query->result();
    }
    function ambil_acuan_skoring_C($kateg_acuan_prodi){
        $this->db->select('C');
        $this->db->where('KATEG',$kateg_acuan_prodi);
        $query = $this->db->get("acuan_skoring");
        return $query->result();
    }

}
?>