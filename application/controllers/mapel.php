<?php

class Mapel extends CI_Controller {

	function __construct(){
			parent:: __construct();

			$this->load->library('ssp') ;
            $this->load->model('model_mapel');
		}

		function data() {
			// nama tabel
        $table = 'tbl_mapel';
        // nama PK
        $primaryKey = 'kd_mapel';
        // list field
        $columns = array(
           
            array('db' => 'kd_mapel', 'dt' => 'kd_mapel'),
            array('db' => 'nama_mapel', 'dt' => 'nama_mapel'),
            
            array(
                'db' => 'kd_mapel',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    return 
                           anchor('mapel/edit/' . $d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="edit"').'
                        '. anchor('mapel/delete/' . $d, '<i class="fa fa-trash-o"</i>', 'class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="delete"');
                    
                
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
		$this->template->load('template','mapel/list');
	}
	function add(){
         if (isset($_POST['submit'])){
             
                $this->model_mapel->save();
                redirect('mapel');
        }else{
             $this->template->load('template','mapel/add');
        }

    }
    function edit(){

        if (isset($_POST['submit'])){
         
            $this->model_mapel->update();
            
            redirect('mapel');

        } else {
                $kd_mapel            = $this->uri->segment(3);
                $data ['mapel'] 	 = $this->db->get_where('tbl_mapel',array('kd_mapel'=>$kd_mapel))->row_array();
                $this->template->load('template','mapel/edit',$data);
        }

    } 
    function delete(){
        $kd_mapel = $this->uri->segment(3);
        if(!empty($kd_mapel)){
            $this->db->where('kd_mapel',$kd_mapel);
            $this->db->delete('tbl_mapel');
        }
        redirect('mapel');

    }
  
}
