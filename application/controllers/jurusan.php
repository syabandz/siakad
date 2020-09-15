<?php

class Jurusan extends CI_Controller {

	function __construct(){
			parent:: __construct();

			$this->load->library('ssp') ;
            $this->load->model('model_jurusan');
            $this->load->library('datatables');
		}

        public function json() {
            header('Content-Type: application/json');
            echo $this->model_jurusan->json();
        }


        function data() {
			// nama tabel
        $table = 'tbl_jurusan';
        // nama PK
        $primaryKey = 'kd_jurusan';
        // list field
        $columns = array(
           
            array('db' => 'kd_jurusan', 'dt' => 'kd_jurusan'),
            array('db' => 'nama_jurusan', 'dt' => 'nama_jurusan'),
            
            array(
                'db' => 'kd_jurusan',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    return    
                            anchor('jurusan/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                            '.anchor('jurusan/delete/'.$d,'<i class="fa fa-trash-o"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete"');
                    
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
		$this->template->load('template','jurusan/list');
	}
	function add(){
         if (isset($_POST['submit'])){
             
                $this->model_jurusan->save();
                redirect('jurusan');
        }else{
             $this->template->load('template','jurusan/add');
        }

    }
    function edit(){

        if (isset($_POST['submit'])){
         
            $this->model_jurusan->update();
            
            redirect('jurusan');

        } else {
                $kd_jurusan            = $this->uri->segment(3);
                $data ['jurusan'] 	 = $this->db->get_where('tbl_jurusan',array('kd_jurusan'=>$kd_jurusan))->row_array();
                $this->template->load('template','jurusan/edit',$data);
        }

    } 


    public function delete(){
		$id = $this->input->post('id_jurusan');
        $data=$this->model_jurusan->delete($id);
        $this->session->set_flashdata('message', 'Delete Record Success');
		echo json_encode($data);
    }

    

}
