<?php

class Guru extends CI_Controller {

	function __construct(){
        parent:: __construct();
        //chekAksesModule();
        $this->load->library('ssp') ;
        $this->load->model('model_guru');
        $this->load->library('datatables');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->model_guru->json();
    }

	public function index(){
		$this->template->load('template','guru/list');
	}
    
    public function add(){
         if (isset($_POST['submit'])){
             $uploadFoto = $this->upload_foto_guru();
            $this->model_guru->save($uploadFoto);
                redirect('guru');
        }else{
             $this->template->load('template','guru/add');
        }

    }
    public function edit(){

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
    public function delete(){
		$id = $this->input->post('id_guru');
        $data=$this->model_guru->delete($id);
        $this->session->set_flashdata('message', 'Delete Record Success');
		echo json_encode($data);
    }

    public function upload_foto_guru(){
        $config['upload_path']          = './uploads/foto_user';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $upload =$this->upload->data();
        return $upload['file_name'];

    }
  
}