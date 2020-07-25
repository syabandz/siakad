<?php

class Absensi extends CI_Controller {

    function __construct(){
            parent:: __construct();

            $this->load->library('ssp') ;
            $this->load->model('model_absen');
        }

        function data() {
            // nama tabel
        $table = 'tbl_absen';
        // nama PK
        $primaryKey = 'id_absen';
        // list field
        $columns = array(
           
            
            array('db' => 'nis', 'dt' => 'nis'),
            array('db' => 'nama', 'dt' => 'nama'),
            array('db' => 'tanggal', 'dt' => 'tanggal'),
            array('db' => 'absen', 'dt' => 'absen')
            
            
        );
        $sql_details = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db' => $this->db->database,
            'host' => $this->db->hostname
        );
 
        echo json_encode(
                SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
        );
    }
    function index(){
        $this->template->load('tampilan_utama','absensi/list');
    }
    function add(){
         if (isset($_POST['submit'])){
             
                $this->model_absen->save();
                redirect('absensi');
        }else{
             $this->template->load('template','absensi/add');
        }

    }
    function edit(){

        if (isset($_POST['submit'])){
         
            $this->model_absen->update();
            
            redirect('absen');

        } else {
                $id_absen            = $this->uri->segment(3);
                $data ['absen']      = $this->db->get_where('tbl_absen',array('id_absen'=>$id_absen))->row_array();
                $this->template->load('template','absen/edit',$data);
        }

    } 
    function delete(){
        $id_absen = $this->uri->segment(3);
        if(!empty($id_absen)){
            $this->db->where('id_absen',$kd_absen);
            $this->db->delete('tbl_absen');
        }
        redirect('absen');

    }
    function form_siswa_autocomplate(){
        $nis = $_GET['nis'];
        $sqlSiswa = "SELECT ts.nama as nama,ts.nis,tj.nama_jurusan,tr.nama_rombel,tr.kelas
                    FROM tbl_history_kelas as hk,tbl_siswa as ts,tbl_rombel as tr,tbl_jurusan as tj
                    WHERE ts.nis=hk.nis and tr.id_rombel=ts.id_rombel and tr.kd_jurusan=tj.kd_jurusan 
                    and hk.nis='$nis' and hk.id_tahun_akademik=".  get_tahun_akademik_aktif('id_tahun_akademik');
       $siswa = $this->db->query($sqlSiswa)->row_array();
        $data = array(
                    'nama'      =>  $siswa['nama'],
                    'jurusan'   =>  $siswa['nama_jurusan'],
                    'rombel'    =>  $siswa['nama_rombel'],
                    'kelas'     =>  $siswa['kelas'],);
         echo json_encode($data);

    }
  
}
