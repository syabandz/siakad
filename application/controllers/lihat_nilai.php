<?php 
class Lihat_nilai extends CI_controller{

    function index(){
        $nis =$this->session->userdata('no_identitas');
        $sql ="SELECT tm.nama_mapel,tn.nilai
             FROM tbl_nilai as tn, tbl_jadwal as tj,tbl_mapel as tm
             WHERE tn.id_jadwal=tj.id_jadwal and tj.kd_mapel=tm.kd_mapel and tn.nis=$nis";

         $rombel =   "SELECT ts.nis,tr.nama_rombel,tr.kelas,tj.nama_jurusan
                      FROM tbl_siswa as ts,tbl_rombel as tr,tbl_jurusan as tj
                    WHERE ts.id_rombel=tr.id_rombel and tr.kd_jurusan=tj.kd_jurusan and ts.nis=$nis";
       
        $data['rombel'] =   $this->db->query($rombel)->row_array();

        $data['nilai_semester']= $this->db->query($sql); 
        $this->template->load('template','Lihat_nilai/list',$data);
    }
    function cetak(){
        $nis=$this->session->userdata('no_identitas');
        $sql="SELECT tn.nis,ts.nama,tju.nama_jurusan,tr.nama_rombel,ta.tahun_akademik,ta.semester_aktif,tm.nama_mapel,tn.nilai
                FROM tbl_nilai as tn, tbl_jadwal as tj,tbl_mapel as tm, tbl_siswa as 
                ts,tbl_history_kelas as hk, tbl_tahun_akademik as ta,tbl_rombel as tr,tbl_jurusan as tju
                WHERE tn.id_jadwal=tj.id_jadwal and tj.kd_mapel=tm.kd_mapel and  tr.kd_jurusan=tju.kd_jurusan and ts.nis='$nis'
                and hk.id_tahun_akademik=".get_tahun_akademik_aktif('id_tahun_akademik');
         $rombel =   "SELECT ts.nis,tr.nama_rombel,tr.kelas,tj.nama_jurusan
                      FROM tbl_siswa as ts,tbl_rombel as tr,tbl_jurusan as tj
                    WHERE ts.id_rombel=tr.id_rombel and tr.kd_jurusan=tj.kd_jurusan and ts.nis=$nis";
       
        $data['rombel'] =   $this->db->query($rombel)->row_array();

         $data['cetak']= $this->db->query($sql); 
        $this->load->view('Lihat_nilai/cetak',$data);
       
        
    }
}