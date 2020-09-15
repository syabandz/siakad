<?php

class Mapel extends CI_Controller {

	function __construct(){
        parent:: __construct();
        //chekAksesModule();
        $this->load->library('ssp') ;
        $this->load->model('model_mapel');
        $this->load->library('datatables');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->model_mapel->json();
    }
    
	public function index(){
		$this->template->load('template','mapel/list');
    }
    
	public function add(){
         if (isset($_POST['submit'])){
             
                $this->model_mapel->save();
                redirect('mapel');
        }else{
             $this->template->load('template','mapel/add');
        }

    }

    public function edit(){

        if (isset($_POST['submit'])){
         
            $this->model_mapel->update();
            
            redirect('mapel');

        } else {
                $kd_mapel            = $this->uri->segment(3);
                $data ['mapel'] 	 = $this->db->get_where('tbl_mapel',array('kd_mapel'=>$kd_mapel))->row_array();
                $this->template->load('template','mapel/edit',$data);
        }

    } 


    public function delete(){
		$id = $this->input->post('id_mapel');
        $data=$this->model_mapel->delete($id);
        $this->session->set_flashdata('message', 'Delete Record Success');
		echo json_encode($data);
    }

    


}
