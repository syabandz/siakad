<?php
Class Jadwal extends CI_Controller{

	function __construct(){
			parent::__construct();
            //chekAksesModule();
			$this->load->model(array('model_jadwal'));
		}

		
	
    
	function index(){
		if($this->session->userdata('id_level_user')==3){
            //load daftar ajar guru
            $sql = "SELECT tj.id_jadwal,tjr.nama_jurusan,tj.kelas,tm.nama_mapel,tj.jam,tr.nama_ruang,tj.hari,tj.semester
                    FROM tbl_jadwal as tj,tbl_jurusan as tjr,tbl_ruangan as tr,tbl_mapel as tm
                    WHERE tj.kd_jurusan=tjr.kd_jurusan and tj.kd_mapel=tm.kd_mapel and tj.kd_ruang=tr.kd_ruang and tj.id_guru=".$this->session->userdata('id_guru');
            $data['jadwal'] = $this->db->query($sql); 
            $this->template->load('template','jadwal/jadwal_ajar_guru',$data);
        }else{
            $infoSekolah =  "SELECT js.jumlah_kelas
                        FROM tbl_jenjang_sekolah as js,tabel_sekolah as si 
                        WHERE js.id_jenjang =si.id_jenjang_sekolah";

        $data['info'] = $this->db->query($infoSekolah)->row_array();
        $this->template->load('template','jadwal/list',$data);
        }
	}
	function generate_jadwal(){
		if (isset($_POST['submit'])){
			$this->model_jadwal->generateJadwal();
			die;
		}
		redirect('jadwal');
	}
	function dataJadwal(){
       $kd_jurusan     = $_GET['jurusan'];
        $kelas          = $_GET['kelas'];
        $id_kurikulum   = $_GET['id_kurikulum'];
        $rombel         = $_GET['rombel'];
         if($kelas=='semua_kelas'){
            $selected_kelas = '';
        }else{
            $selected_kelas="and kd.kelas='$kelas'";
        }
        echo "<table class='table table-striped table-bordered table-hover table-full-width dataTable'>
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>MATA PELAJARAN</th>
                        <th>GURU</th>
                        <th>RUANG</th>
                        <th>HARI</th>
                        <th>JAM</th>
                        <th></th>

                    </tr>
                </thead>";
                $sql ="SELECT tj.hari,tj.id_jadwal,tm.nama_mapel,tg.id_guru,tg.nama_guru,tr.kd_ruang,tj.hari,tj.jam
                		
						FROM tbl_jadwal as tj,tbl_mapel as tm,tbl_ruangan as tr,tbl_guru as tg 
						WHERE tj.kd_mapel=tm.kd_mapel and tj.kd_ruang=tr.kd_ruang and tg.id_guru=tj.id_guru
						and tj.kelas='$kelas' and tj.kd_jurusan='$kd_jurusan' and tj.id_rombel=$rombel";
                $jadwal =$this->db->query($sql)->result();
                $no=1;
                 $jam_pelajaran = $this->model_jadwal->getJamPelajaran();
                 $hari          = array (
                        'SENIN'	=>'SENIN',
                        'SELASA'=>'SELASA',
                        'RABU'	=>'RABU',
                        'KAMIS'	=>'KAMIS',
                        'JUMAT'	=>'JUMAT',
                        'SABTU'	=>'SABTU');

                    foreach ($jadwal as $row ) {
                       echo "<tr>
                       <td>$no </td>
                       <td>$row->nama_mapel</td>
                       <td>".cmb_dinamis('guru','tbl_guru','nama_guru','id_guru',$row->id_guru,"id='guru".$row->id_jadwal."'onchange='updateGuru(".$row->id_jadwal.")'")."</td>
                       <td>".cmb_dinamis('ruangan','tbl_ruangan','nama_ruang','kd_ruang',$row->kd_ruang,"id='ruang".$row->id_jadwal."'onchange='updateRuangan(".$row->id_jadwal.")'")."</td>
                       <td>".  form_dropdown('hari',$hari         ,$row->hari,"class='form-control' id='hari".$row->id_jadwal."' onchange='updateHari(".$row->id_jadwal.")'")."</td>
               		   <td>".  form_dropdown('jam', $jam_pelajaran,$row->jam, "class='form-control' id='jam".$row->id_jadwal."' onchange='updateJam(".$row->id_jadwal.")'")."</td>

                       <td>".anchor('kurikulum/deletedetail/'.$row->id_jadwal,'<i class="fa fa-trash"></i>')."</td>
                       </tr>";
                       $no++;
                    
                }


       echo "     </table>";

    }
    function updateGuru(){
        $id_guru = $_GET['id_guru'];
        $id_jadwal = $_GET['id_jadwal'];
        $this->db->where('id_jadwal',$id_jadwal);
        $this->db->update('tbl_jadwal',array('id_guru'=>$id_guru));
    }
    function updateRuangan(){
        $kd_ruang = $_GET['kd_ruang'];
        $id_jadwal  = $_GET['id_jadwal'];
        $this->db->where('id_jadwal',$id_jadwal);
        $this->db->update('tbl_jadwal',array('kd_ruang'=>$kd_ruang));
    }
    
    function updateHari(){
        $hari       = $_GET['hari'];
        $id_jadwal  = $_GET['id_jadwal'];
        $this->db->where('id_jadwal',$id_jadwal);
        $this->db->update('tbl_jadwal',array('hari'=>$hari));
    }
    
    function updateJam(){
        $jam        = $_GET['jam'];
        $id_jadwal  = $_GET['id_jadwal'];
        $this->db->where('id_jadwal',$id_jadwal);
        $this->db->update('tbl_jadwal',array('jam'=>$jam));
    }

    function show_rombel(){
        echo "<select id='rombel' name='rombel' class='form-control' onchange='loadPelajaran()'>";
        $where  = array ('kd_jurusan'=>$_GET['jurusan'],'kelas'=>$_GET['kelas']);
        $rombel = $this->db->get_where('tbl_rombel',$where);
        foreach ($rombel->result() as $row){
            echo "<option value='$row->id_rombel'>$row->nama_rombel</option>";
        }
        echo "</select>";
    }
    function cetak_jadwal(){
        $this->load->library('CFPDF');
        $pdf = new FPDF('L','mm','A4');
        $pdf->AddPage();
       $pdf->SetFont('TIMES','',12);
       $pdf->Cell(130, 5, 'POLITEKNIK TEDC BANDUNG', 0, 1, 'C');
       $pdf->SetFont('TIMES','',10);
       $pdf->Cell(130, 5, 'Jalan Pesantren. 2 Cibabaat - Cimahi Utara 40513 ,Jawa Barat', 0, 1, 'C');
       $pdf->Cell(130, 5, 'Telp.(022) 6645951 ,Fax(022)6645951', 0, 1, 'C');
       $pdf->Cell(130, 5, 'E-mail : http://www.poltektedc.ac.id', 0, 1, 'C');
       $pdf->Line(11, 31, 140, 31);
         $pdf->Cell(1,5,'',0,1);
        $pdf->Cell(10,10,'NO',1,0,'L');
        $pdf->Cell(30,10,'WAKTU',1,0,'L');
        $rombel = $_POST['rombel'];
    
        
        $days          = array (
                        'SENIN'=>'SENIN',
                        'SELASA'=>'SELASA',
                        'RABU'=>'RABU',
                        'KAMIS'=>'KAMIS',
                        'JUMAT'=>'JUMAT',
                        'SABTU'=>'SABTU');
        
        // foreach di kolom judul
        foreach ($days as $day){
            $pdf->Cell(40,10,$day,1,0,'L');
        }
        $pdf->Cell(30,10,'',0,1,'L');
        
        $jam_ajar = $this->model_jadwal->getJamPelajaran();
        $no=1;
        foreach ($jam_ajar  as $jam){
            $pdf->Cell(10,10,$no,1,0,'L');
            $pdf->Cell(30,10,$jam,1,0,'L');
            // foreach hari di kolom jadwal
            foreach ($days as $day){
                $pdf->Cell(40,10,  $this->getPelajaran($jam, $day, $rombel),1,0,'L');
            }
             $pdf->Cell(30,10,'',0,1,'L');
            $no++;
        }
        $pdf->Output();
    }
    
    
    function getPelajaran($jam,$hari,$rombel){
        $sql = "SELECT tj.*,tm.nama_mapel
                FROM tbl_jadwal as tj,tbl_mapel as tm 
                WHERE tj.kd_mapel=tm.kd_mapel and tj.id_rombel=$rombel and tj.hari='$hari' and tj.jam='$jam'";
        $pelajaran = $this->db->query($sql);
        if($pelajaran->num_rows()>0){
            $row = $pelajaran->row_array();
            return $row['nama_mapel'];
        }else{
            return '-';
        }
    }
    
}