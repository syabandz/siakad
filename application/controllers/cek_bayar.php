<?php 
class Cek_bayar extends CI_controller{

    function index(){
        $nis=$this->session->userdata('no_identitas');
        $sql=	"SELECT tp.nis,tp.tanggal,tj.nama_jenis_pembayaran,tp.jumlah,tb.jumlah_biaya
				FROM tbl_pembayaran as tp,tbl_jenis_pembayaran as tj, tbl_biaya_sekolah as tb
				WHERE tp.id_jenis_pembayaran=tj.id_jenis_pembayaran and tp.id_jenis_pembayaran=tb.id_jenis_pembayaran and tp.nis=$nis";
        $rombel         =   "SELECT ts.nis,tr.nama_rombel,tr.kelas,tj.nama_jurusan
                            FROM tbl_siswa as ts,tbl_rombel as tr,tbl_jurusan as tj
                            WHERE ts.id_rombel=tr.id_rombel and tr.kd_jurusan=tj.kd_jurusan and ts.nis=$nis";
       
        
        $data['rombel'] =   $this->db->query($rombel)->row_array();
        $data['cek']= $this->db->query($sql); 
        $this->template->load('template','pembayaran/Cek_bayar',$data);
        
    }
    function cetak(){
        $nis=$this->session->userdata('no_identitas');
        $sql="SELECT tp.nis,tp.tanggal,tj.nama_jenis_pembayaran,tp.jumlah,tb.jumlah_biaya
                FROM tbl_pembayaran as tp,tbl_jenis_pembayaran as tj, tbl_biaya_sekolah as tb
                WHERE tp.id_jenis_pembayaran=tj.id_jenis_pembayaran and tp.id_jenis_pembayaran=tb.id_jenis_pembayaran and tp.nis=$nis";
         $rombel =   "SELECT ts.nis,tr.nama_rombel,tr.kelas,tj.nama_jurusan
                      FROM tbl_siswa as ts,tbl_rombel as tr,tbl_jurusan as tj
                    WHERE ts.id_rombel=tr.id_rombel and tr.kd_jurusan=tj.kd_jurusan and ts.nis=$nis";
       
        $data['rombel'] =   $this->db->query($rombel)->row_array();

         $data['cetak']= $this->db->query($sql); 
        $this->load->view('pembayaran/cetak',$data);
       
        
    }
    
}