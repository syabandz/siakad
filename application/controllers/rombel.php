<?php

Class Rombel extends CI_Controller {

    function __construct() {
        parent::__construct();
        //chekAksesModule();
        $this->load->library('ssp');
        $this->load->model('model_rombel');
        $this->load->library('datatables');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->model_rombel->json();
    }


    function data() {
        // nama tabel
        $table = 'v_master_rombel';
        // nama PK
        $primaryKey = 'id_rombel';
        // list field
        $columns = array(
            array('db' => 'id_rombel', 'dt' => 'id_rombel'),
            array('db' => 'nama_rombel', 'dt' => 'nama_rombel'),
            array('db' => 'kelas', 'dt' => 'kelas'),
            array('db' => 'nama_jurusan', 'dt' => 'nama_jurusan'),
            array(
                'db' => 'id_rombel',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    return 
                        anchor('rombel/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '. anchor('rombel/delete/'.$d,'<i class="fa fa-trash-o"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete"');
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

    function index() {
        $this->template->load('template', 'rombel/list');
    }

    function add() {
        if (isset($_POST['submit'])) {
            $this->Model_rombel->save();
            redirect('rombel');
        } else {
            $infoSekolah = "SELECT js.jumlah_kelas
                        FROM tbl_jenjang_sekolah as js,tabel_sekolah as si 
                        WHERE js.id_jenjang=si.id_jenjang_sekolah";
            $data['info']= $this->db->query($infoSekolah)->row_array();
            $this->template->load('template', 'rombel/add',$data);
        }
    }
    
    function edit(){
        if(isset($_POST['submit'])){
            $this->Model_rombel->update();
            redirect('rombel');
        }else{
            $infoSekolah = "SELECT js.jumlah_kelas
                        FROM tbl_jenjang_sekolah as js,tabel_sekolah as si 
                        WHERE js.id_jenjang=si.id_jenjang_sekolah";
            $data['info']= $this->db->query($infoSekolah)->row_array();
            $id_rombel      = $this->uri->segment(3);
            $data['rombel'] = $this->db->get_where('tbl_rombel',array('id_rombel'=>$id_rombel))->row_array();
            $this->template->load('template', 'rombel/edit',$data);
        }
    }
    
    public function delete(){
		$id = $this->input->post('id_rombel');
        $data=$this->model_rombel->delete($id);
        $this->session->set_flashdata('message', 'Delete Record Success');
		echo json_encode($data);
    }
    
    function show_combobox_rombel_by_jurusan(){
        
        $jurusan = $_GET['jurusan'];
        echo "<select name='rombel' id='rombel2' class='form-control' onchange='loadSiswa()'>";
        $this->db->where('kd_jurusan',$jurusan);
        $rombel = $this->db->get('tbl_rombel');
        foreach ($rombel->result() as $row){
            echo "<option value='$row->id_rombel'>$row->nama_rombel</option>";
        }
        echo"</select>";
    }


}