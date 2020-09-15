<?php

class menu extends CI_Controller {

	function __construct(){
        parent:: __construct();

        $this->load->library('ssp') ;
        $this->load->model('model_menu');
        $this->load->library('datatables');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->model_menu->json();
    }

    public function index() {
        $this->template->load('template','menu/list');
    }

    public function add() {
        if (isset($_POST['submit'])) {
                $this->model_menu->save();
                redirect('menu');
        }else{
            $this->template->load('template','menu/add');
        }
    }

    public function edit() {
        if (isset($_POST['submit'])){
            $this->model_menu->update();
            redirect('menu');
        } else {
                $id            = $this->uri->segment(3);
                $data ['menu'] 	 = $this->db->get_where('tabel_menu',array('id'=>$id))->row_array();
                $this->template->load('template','menu/edit',$data);
        }
    } 

    public function delete() {
        $id = $this->input->post('id');
        $data=$this->model_menu->delete($id);
        $this->session->set_flashdata('message', 'Delete Record Success');
        echo json_encode($data);
    }
}
