<?php

class Guru extends CI_Controller {

	function __construct(){
			parent:: __construct();
            //chekAksesModule();
			$this->load->library('ssp') ;
            $this->load->model('model_guru');
		}

		function data() {
			// nama tabel
        $table = 'tbl_guru';
        // nama PK
        $primaryKey = 'id_guru';
        // list field
        $columns = array(
        	array('db' => 'foto', 
            	'dt' => 'foto',
                'formatter' => function( $d) {
                    return "<img width='50px'src ='".base_url()."/uploads/".$d."'>";
                }
            	),
           
            array('db' => 'id_guru', 'dt' => 'id_guru'),
            array('db' => 'nuptk', 'dt' => 'nuptk'),
            array('db' => 'nama_guru', 'dt' => 'nama_guru'),
            array('db' => 'tempat_lahir', 'dt' => 'tempat_lahir'),
            array('db' => 'tanggal_lahir', 'dt' => 'tanggal_lahir'),
            array('db' => 'gender', 
            	  'dt' => 'gender',
           'formatter' => function( $d) {
                    return $d=='p'?'Laki-Laki':'Wanita';
                }),
            
            array(
                'db' => 'id_guru',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                     return anchor('guru/edit/' . $d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Edit"') . ' 
                        '. anchor('guru/delete/' . $d, '<i class="fa fa-trash-o"</i>', 'class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Delete"');
                    
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
		$this->template->load('template','guru/list');
	}
	function add(){
         if (isset($_POST['submit'])){
             $uploadFoto = $this->upload_foto_guru();
            $this->model_guru->save($uploadFoto);
                redirect('guru');
        }else{
             $this->template->load('template','guru/add');
        }

    }
    function edit(){

        if (isset($_POST['submit'])){
          $uploadFoto = $this->upload_foto_guru();
           $this->model_guru->update($uploadFoto);
            redirect('guru');

        } else {
                $id_guru            = $this->uri->segment(3);
                $data ['guru'] 	 = $this->db->get_where('tbl_guru',array('id_guru'=>$id_guru))->row_array();
                $this->template->load('template','guru/edit',$data);
        }

    } 
    function delete(){
        $id_guru = $this->uri->segment(3);
        if(!empty($id_guru)){
            $this->db->where('id_guru',$id_guru);
            $this->db->delete('tbl_guru');
        }
        redirect('guru');

    }

    function upload_foto_guru(){
        $config['upload_path']          = './uploads/foto_user';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $upload =$this->upload->data();
        return $upload['file_name'];

    }
  
}
