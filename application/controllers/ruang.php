<?php

class Ruang extends CI_Controller {

	function __construct() {
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

    public function index() {
        $this->template->load('template','ruang/list');
    }

    public function add() {
        if (isset($_POST['submit'])){
            $this->model_ruang->save();
            redirect('ruang');
        }else{
            $this->template->load('template','ruang/add');
        }
    }

    public function edit() {
        if (isset($_POST['submit'])){
            $this->model_ruang->update();
            redirect('ruang');
        } else {
                $kd_ruang            = $this->uri->segment(3);
                $data ['ruang'] 	 = $this->db->get_where('tbl_ruangan',array('kd_ruang'=>$kd_ruang))->row_array();
                $this->template->load('template','ruang/edit',$data);
        }
    } 

    public function delete() {
        $id = $this->input->post('id_ruangan');
        $data=$this->model_ruang->delete($id);
        $this->session->set_flashdata('message', 'Delete Record Success');
        echo json_encode($data);
    }
}
