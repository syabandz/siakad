<?php

class Tahun_akademik extends CI_Controller {

	function __construct(){
			parent:: __construct();

			$this->load->library('ssp') ;
            $this->load->model('model_tahun_akademik');
		}

		function data() {
			// nama tabel
        $table = 'tbl_tahun_akademik';
        // nama PK
        $primaryKey = 'id_tahun_akademik';
        // list field
        $columns = array(
           
            array('db' => 'id_tahun_akademik', 'dt' => 'id_tahun_akademik'),
            array('db' => 'tahun_akademik', 'dt' => 'tahun_akademik'),
            array('db' => 'is_aktif', 
            	  'dt' => 'is_aktif',
            	  'formatter' => function( $d) {
                    return $d=='y'?'Aktif':'Tidak Aktif';
                    
                }),
            
            array(
                'db' => 'id_tahun_akademik',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    return 
                           anchor('tahun_akademik/edit/' . $d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Edit"').'
                        '. anchor('tahun_akademik/delete/' . $d, '<i class="fa fa-trash-o"</i>', 'class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Delete"');
                    
                }
            )
        );
        $sql_details = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db'   => $this->db->database,
            'host' => $this->db->hostname
        );
 
        echo json_encode(
                SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
        );
    }
	function index(){
		$this->template->load('template','tahun_akademik/list');
	}
	function add(){
         if (isset($_POST['submit'])){
             
                $this->model_tahun_akademik->save();
                $idTahunAkademik = $this->db->insert_id();

                // setup data dumy walikelas
            $this->load->model('Model_walikelas');
            $this->Model_walikelas->setup_walikelas($idTahunAkademik);
            redirect('tahun_akademik');
            
        }else{
             $this->template->load('template','tahun_akademik/add');
        }

    }
    function edit(){

        if (isset($_POST['submit'])){
         
            $this->model_tahun_akademik->update();
            
            redirect('tahun_akademik');

        } else {
                $id_tahun_akademik            = $this->uri->segment(3);
                $data ['tahun_akademik'] 	  = $this->db->get_where('tbl_tahun_akademik',array('id_tahun_akademik'=>$id_tahun_akademik))->row_array();
                $this->template->load('template','tahun_akademik/edit',$data);
        }

    } 
    function delete(){
        $id_tahun_akademik = $this->uri->segment(3);
        if(!empty($id_tahun_akademik)){
            $this->db->where('id_tahun_akademik',$id_tahun_akademik);
            $this->db->delete('tbl_tahun_akademik');
        }
        redirect('tahun_akademik');

    }
  
}
