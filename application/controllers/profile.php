<?php

class Profile extends CI_Controller {

	function __construct(){
			parent:: __construct();
            //chekAksesModule();
			$this->load->library('ssp') ;
            $this->load->model('model_profile');

		}

		function data() {
			// nama tabel
        $table = 'tbl_siswa';
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
            array('db' => 'tempat_lahir', 'dt' => 'tempat_lahir'),
            array('db' => 'tanggal_lahir', 'dt' => 'tanggal_lahir'),
            array('db' => 'gender', 'dt' => 'gender'),
            array('db' => 'kd_agama', 'dt' => 'kd_agama'),
            array('db' => 'id_rombel', 'dt' => 'id_rombel'),
           
            

            array(
                'db' => 'nis',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    return anchor('profile/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('profile/delete/'.$d,'<i class="fa fa-trash-o"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete"');
                    
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
		$this->template->load('template','profile/list');
	}
	function add(){
         if (isset($_POST['submit'])){
                $uploadFoto= $this->upload_foto_profile();
                $this->model_profile->save($uploadFoto);
                redirect('profile');
        }else{
             $this->template->load('template','profile/add');
        }

    }
    function edit(){

        if (isset($_POST['submit'])){
            $uploadFoto = $this->upload_foto_profile();
            $this->model_profile->update($uploadFoto);
            
            redirect('profile');

        } else {
                $nis            = $this->uri->segment(3);
                $data ['profile'] = $this->db->get_where('tbl_siswa',array('nis'=>$nis))->row_array();
                $this->template->load('template','profile/edit',$data);
        }

    } 
    function delete(){
        $nis = $this->uri->segment(3);
        if(!empty($nis)){
            $this->db->where('nis',$nis);
            $this->db->delete('tbl_profile');
        }
        redirect('profile');

    }
    function upload_foto_profile(){
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $upload =$this->upload->data();
        return $upload['file_name'];

    }
    function profile_aktif(){
        $this->template->load('template','profile/profile_aktif');
    }
    function load_data_profile_by_rombel(){
        $rombel = $_GET['rombel'];
        
        echo "<table class='table table-bordered'>
            <tr><th width='90'>nis</th><th>NAMA</th></tr>";
        $this->db->where('id_rombel',$rombel);
        $profile = $this->db->get('tbl_profile');
        foreach ($profile->result() as $row){
            echo "<tr><td>$row->nis</td><td>$row->nama</td></tr>";
        }
        echo"</table>";
    }
    
    function data_by_rombel_excel(){
        $this->load->library('CPHP_excel');
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'nis');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'profile');
        
        $rombel = $_POST['rombel'];
        $this->db->where('id_rombel',$rombel);
        $profile = $this->db->get('tbl_profile');
        $no=2;
        foreach ($profile->result() as $row){
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$no, $row->nis);
            $objPHPExcel->getActiveSheet()->setCellValue('B'.$no, $row->nama);
            $no++;
        }
        
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
        $objWriter->save("data-profile.xlsx");
        $this->load->helper('download');
        force_download('data-profile.xlsx', NULL);
    }

}
