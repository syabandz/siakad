<?php 
class Raport extends CI_Controller{
    function __construct(){
            parent::__construct();
            //chekAksesModule();
        }

	function index(){
        $walikelas      =   $this->db->get_where('tbl_walikelas',array('id_guru'=> $this->session->userdata('id_guru')))->row_array();
        $rombel         =   "SELECT rb.nama_rombel,rb.kelas,jr.nama_jurusan, mp.nama_mapel
                            FROM tbl_jadwal AS j,tbl_jurusan as jr, tbl_rombel as rb,tbl_mapel as mp
                            WHERE j.kd_jurusan=jr.kd_jurusan and rb.id_rombel=j.id_rombel and mp.kd_mapel=j.kd_mapel 
                            and j.id_rombel='".$walikelas['id_rombel']."'";
        $siswa          =   "SELECT s.nis,s.nama
                            FROM tbl_history_kelas as hk,tbl_siswa as s 
                            WHERE hk.nis=s.nis and hk.id_rombel=".$walikelas['id_rombel']." 
                            and hk.id_tahun_akademik=".  get_tahun_akademik_aktif('id_tahun_akademik');

        
        $data['rombel'] =   $this->db->query($rombel)->row_array();
        $data['siswa']  =   $this->db->query($siswa);
        $this->template->load('template','raport/list_siswa',$data);
    }
  function nilai_semester(){
       // blok query info siswa
       $nis = $this->uri->segment(3);
       $sqlSiswa = "SELECT ts.nama as nama_siswa,ts.nis,tj.nama_jurusan,tr.nama_rombel,tr.kelas
                    FROM tbl_history_kelas as hk,tbl_siswa as ts,tbl_rombel as tr,tbl_jurusan as tj
                    WHERE ts.nis=hk.nis and tr.id_rombel=ts.id_rombel and tr.kd_jurusan=tj.kd_jurusan 
                    and hk.nis='$nis' and hk.id_tahun_akademik=".  get_tahun_akademik_aktif('id_tahun_akademik');
       $siswa = $this->db->query($sqlSiswa)->row_array();
       
        $this->load->library('CFPDF');
        $pdf = new FPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->Image('uploads/logopgri.jpg',4,2,40,40);
        $pdf->SetFont('Arial','B',9);
        
        
        // BLOCK INFO SISWA
        $pdf->SetFont('TIMES','',12);
        $pdf->Cell(200, 5, 'SEKOLAH MENENGAH KEJURUSAN', 0, 1, 'C');
        $pdf->SetFont('TIMES','',10);
        $pdf->SetFont('TIMES','',12);
        $pdf->Cell(200, 5, 'SMK PGRI 1 TAMBUN SELATAN', 0, 1, 'C');
        $pdf->SetFont('TIMES','',8);
        $pdf->Cell(200, 5, 'JL.KEBON KELAPA PERUM PEMDA RT.07/02 TAMBUN SELATAN DESA TAMBUN ', 0, 1, 'C');
        $pdf->Cell(200, 5, ' KECAMATAN TAMBUN SELATAN KABUPATEN BEKASI', 0, 1, 'C');
        $pdf->Cell(200, 5, 'Telp.(022) 6645951 ,Fax(022)6645951', 0, 1, 'C');
        $pdf->Cell(200, 5, 'E-mail : smkpgri1@yahoo.com', 0, 1, 'C');
        
        
        
        $pdf->Cell(1,5,'',0,1);
        $pdf->Cell(1,5,'',0,1);
        $pdf->Cell(1,10,'',0,1);
        $pdf->Cell(30,5,'NIS',0,0,'L');
        $pdf->Cell(88,5,': '.$siswa['nis'],0,0,'L');
        $pdf->Cell(30,5,'KELAS',0,0,'L');
        $pdf->Cell(40,5,': '.$siswa['nama_rombel'],0,1,'L');
        
        $pdf->Cell(30,5,'NAMA',0,0,'L');
        $pdf->Cell(88,5,': '.$siswa['nama_siswa'],0,0,'L');
        $pdf->Cell(30,5,'TAHUN AJARAN',0,0,'L');
        $pdf->Cell(40,5,': '.  get_tahun_akademik_aktif('tahun_akademik'),0,1,'L');
        
        $pdf->Cell(30,5,'JURUSAN',0,0,'L');
        $pdf->Cell(88,5,': '.$siswa['nama_jurusan'],0,0,'L');
        $pdf->Cell(30,5,'SEMESTER',0,0,'L');
        $pdf->Cell(40,5,': '.  get_tahun_akademik_aktif('semester_aktif'),0,1,'L');
        
        // END BLOCK INFO SISWA
        
        
        // BLOCK NILAI SISWA ------------------------
        $pdf->Cell(1,10,'',0,1);
        $pdf->Cell(8,5,'NO',1,0,'L');
        $pdf->Cell(50,5,'Mata Pelajaran',1,0,'L');
        $pdf->Cell(10,5,'KKM',1,0,'L');
        $pdf->Cell(20,5,'Angka',1,0,'L');
        $pdf->Cell(58,5,'Huruf',1,0,'L');
        $pdf->Cell(23,5,'Ketercapaian',1,0,'L');
        $pdf->Cell(20,5,'Rata Kelas',1,1,'L');
        $pdf->SetFont('Arial','',9);






        $sqlMapel = "SELECT tj.id_jadwal,tm.nama_mapel 
                    FROM tbl_jadwal as tj,tbl_mapel as tm
                    WHERE tj.kd_mapel=tm.kd_mapel and tj.id_rombel";
        $mapel = $this->db->query($sqlMapel)->result();
        $no=1;
        foreach ($mapel as $m){
            $pdf->Cell(8,5,$no,1,0,'L');
            $pdf->Cell(50,5,$m->nama_mapel,1,0,'L');
            $pdf->Cell(10,5,75,1,0,'L');
            $nilai = chek_nilai($siswa['nis'], $m->id_jadwal);
            $pdf->Cell(20,5,  $nilai,1,0,'L');
            $pdf->Cell(58,5,  Terbilang($nilai),1,0,'L');
            $pdf->Cell(23,5,  $this->ketercapaian_kopetensi($nilai),1,0,'L');
            $pdf->Cell(20,5,  ceil($this->rata_rata_nilai($m->id_jadwal)),1,1,'L');
                $no++;
        }

        
        // END BLOCK NILAI SISWA --------------------------------
        $pdf->Cell(68,5,'                                                       Jumlah Nilai',1,0,'L');
        $pdf->Cell(121,5,ceil($this->jumlah_nilai($nis)),1,0,'L');
        $pdf->Cell(1,5,'',0,1);
        $pdf->Cell(68,5,'                                           Rata-rata nilai siswa',1,0,'L');
        $pdf->Cell(121,5,ceil($this->rata_nilai($nis)),1,0,'L');
        $pdf->Cell(1,5,'',0,1);
        $pdf->Cell(68,5,'                                                  Peringkat siswa',1,0,'L');
        $pdf->Cell(121,5,'',1,0,'L');

        $pdf->Output();
       



    }function rata_nilai($nis){
       $sql   ="SELECT sum(nilai)/count(nis) as rata_nilai FROM tbl_nilai WHERE nis=$nis"; 
       $rata  =$this->db->query($sql)->row_array();
       return $rata['rata_nilai'];
    }




    function jumlah_nilai($nis){
        $sql  ="SELECT sum(nilai) as jumlah_nilai FROM tbl_nilai WHERE nis=$nis";
        $jumlah =$this->db->query($sql)->row_array();
        return $jumlah['jumlah_nilai'];
    }
    
    function rata_rata_nilai($id_jadwal){
        $sql   =  "SELECT sum(nilai)/count(nis) as nilai_rata_rata FROM tbl_nilai WHERE id_jadwal=$id_jadwal";
        $nilai = $this->db->query($sql)->row_array();
        return $nilai['nilai_rata_rata'];
    }
    
    
    function ketercapaian_kopetensi($nilai){
        if($nilai>90){
            return 'Sangat baik';
        }elseif($nilai>80 and $nilai<=90){
            return 'Baik';
        }elseif($nilai>75 and $nilai<=80){
            return 'Cukup';
        }else{
            return "Kurang";
        }
    }
}
