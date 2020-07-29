<?php

class Ruang extends CI_Controller {

	function __construct(){
			parent:: __construct();
            //chekAksesModule();
			$this->load->library('ssp') ;
            $this->load->model('model_ruang');
            $this->load->library('datatables');
		}

        public function json() {
            header('Content-Type: application/json');
            echo $this->model_ruang->json();
        }

        function data() {
			// nama tabel
        $table = 'tbl_ruangan';
        // nama PK
        $primaryKey = 'kd_ruang';
        // list field
        $columns = array(
           
            array('db' => 'kd_ruang', 'dt' => 'kd_ruang'),
            array('db' => 'nama_ruang', 'dt' => 'nama_ruang'),
            
            array(
                'db' => 'kd_ruang',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                     return 
                           anchor('ruang/edit/' . $d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete"').'
                        '. anchor('ruang/detete/' . $d, '<i class="fa fa-trash-o"</i>', 'class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"');
                    
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
		$this->template->load('template','ruang/list');
	}
	function add(){
         if (isset($_POST['submit'])){
             
                $this->model_ruang->save();
                redirect('ruang');
        }else{
             $this->template->load('template','ruang/add');
        }

    }
    function edit(){

        if (isset($_POST['submit'])){
         
            $this->model_ruang->update();
            
            redirect('ruang');

        } else {
                $kd_ruang            = $this->uri->segment(3);
                $data ['ruang'] 	 = $this->db->get_where('tbl_ruangan',array('kd_ruang'=>$kd_ruang))->row_array();
                $this->template->load('template','ruang/edit',$data);
        }

    } 
    function delete(){
        $kd_ruang = $this->uri->segment(3);
        if(!empty($kd_ruang)){
            $this->db->where('kd_ruang',$kd_ruang);
            $this->db->delete('tbl_ruangan');
        }
        redirect('ruang');

    }
  
}
