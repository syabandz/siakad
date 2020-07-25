<?php

class Jenis_pembayaran extends CI_Controller {

	function __construct(){
			parent:: __construct();
			//chekAksesModule();

			$this->load->library('ssp') ;
            $this->load->model('model_jenis_pembayaran');
		}

		function data() {
			// nama tabel
        $table = 'tbl_jenis_pembayaran';
        // nama PK
        $primaryKey = 'id_jenis_pembayaran';
        // list field
        $columns = array(
           
            array('db' => 'id_jenis_pembayaran', 'dt' => 'id_jenis_pembayaran'),
            array('db' => 'nama_jenis_pembayaran', 'dt' => 'nama_jenis_pembayaran'),
            
            array(
                'db' => 'id_jenis_pembayaran',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    return 
                        anchor('jenis_pembayaran/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('jenis_pembayaran/delete/'.$d,'<i class="fa fa-trash-o"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete"');
                    
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
		$this->template->load('template','jenis_pembayaran/list');
	}
	function add(){
         if (isset($_POST['submit'])){
             
                $this->model_jenis_pembayaran->save();
                redirect('jenis_pembayaran');
        }else{
             $this->template->load('template','jenis_pembayaran/add');
        }

    }
    function edit(){

        if (isset($_POST['submit'])){
         
            $this->model_jenis_pembayaran->update();
            
            redirect('jenis_pembayaran');

        } else {
                $id_jenis_pembayaran            = $this->uri->segment(3);
                $data ['jenis_pembayaran'] 	 = $this->db->get_where('tbl_jenis_pembayaran',array('id_jenis_pembayaran'=>$id_jenis_pembayaran))->row_array();
                $this->template->load('template','jenis_pembayaran/edit',$data);
        }

    } 
    function delete(){
        $id_jenis_pembayaran = $this->uri->segment(3);
        if(!empty($id_jenis_pembayaran)){
            $this->db->where('id_jenis_pembayaran',$id_jenis_pembayaran);
            $this->db->delete('tbl_jenis_pembayaran');
        }
        redirect('jenis_pembayaran');

    }
  
}
