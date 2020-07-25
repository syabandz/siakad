<?php

class Siswa extends CI_Controller {

	function __construct(){
			parent:: __construct();
            //chekAksesModule();
			$this->load->library('ssp') ;
            $this->load->model('model_siswa');

		}

		function data() {
			// nama tabel
        $table = 'v_siswa';
        // nama PK
        $primaryKey = 'nis';
        // list field
        $columns = array(
            array('db' => 'foto', 
            	'dt' => 'foto',
                'formatter' => function( $d) {
                    return "<img width='50px'src ='".base_url()."/uploads/".$d."'>";
                }
            	),
            array('db' => 'nis', 'dt' => 'nis'),
            array('db' => 'nama', 'dt' => 'nama'),
            array('db' => 'nama_rombel', 'dt' => 'nama_rombel'),
            array('db' => 'tempat_lahir', 'dt' => 'tempat_lahir'),
            array('db' => 'tanggal_lahir', 'dt' => 'tanggal_lahir'),
            array('db' => 'gender', 'dt' => 'gender'),
            array('db' => 'kd_agama', 'dt' => 'kd_agama'),
            array('db' => 'id_rombel', 'dt' => 'id_rombel'),
           
            

            array(
                'db' => 'nis',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                     return anchor('siswa/edit/' . $d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Edit"').'
                        '. anchor('siswa/detete/' . $d, '<i class="fa fa-trash-o"</i>', 'class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"');
                }
            )
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
		$this->template->load('template','siswa/list');
	}
	function add(){
         if (isset($_POST['submit'])){
                $uploadFoto= $this->upload_foto_siswa();
                $this->model_siswa->save($uploadFoto);
                redirect('siswa');
        }else{
             $this->template->load('template','siswa/add');
        }

    }
    function edit(){

        if (isset($_POST['submit'])){
            $uploadFoto = $this->upload_foto_siswa();
            $this->model_siswa->update($uploadFoto);
            
            redirect('siswa');

        } else {
                $nis            = $this->uri->segment(3);
                $data ['siswa'] = $this->db->get_where('tbl_siswa',array('nis'=>$nis))->row_array();
                $this->template->load('template','siswa/edit',$data);
        }

    } 
    function delete(){
        $nis = $this->uri->segment(3);
        if(!empty($nis)){
            $this->db->where('nis',$nis);
            $this->db->delete('tbl_siswa');
        }
        redirect('siswa');

    }
    function upload_foto_siswa(){
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $upload =$this->upload->data();
        return $upload['file_name'];

    }
    function siswa_aktif(){
        $this->template->load('template','siswa/siswa_aktif');
    }
    function load_data_siswa_by_rombel(){
        $rombel = $_GET['rombel'];
        
        echo "<table class='table table-bordered'>
            <tr><th width='90'>NIS</th><th>NAMA</th></tr>";
        $this->db->where('id_rombel',$rombel);
        $siswa = $this->db->get('tbl_siswa');
        foreach ($siswa->result() as $row){
            echo "<tr><td>$row->nis</td><td>$row->nama</td></tr>";
        }
        echo"</table>";
    }
    
    function data_by_rombel_excel(){
        $this->load->library('CPHP_excel');
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'DAFTAR NAMA SISWA');
        $objPHPExcel->getActiveSheet()->setCellValue('A3', 'nis');
        $objPHPExcel->getActiveSheet()->setCellValue('B3', 'SISWA');
        
        $rombel = $_POST['rombel'];
        $this->db->where('id_rombel',$rombel);
        $siswa = $this->db->get('tbl_siswa');
        $no=2;
        foreach ($siswa->result() as $row){
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$no, $row->nis);
            $objPHPExcel->getActiveSheet()->setCellValue('B'.$no, $row->nama);
            $no++;
        }
        
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
        $objWriter->save("data-siswa.xlsx");
        $this->load->helper('download');
        force_download('data-siswa.xlsx', NULL);
    }

}
