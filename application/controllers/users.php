<?php

class users extends CI_Controller {

	function __construct() {
        parent:: __construct();
        //chekAksesModule();
        $this->load->library('ssp') ;
        $this->load->model('model_users');
        $this->load->library('datatables');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->model_users->json();
    }

    public function data() {
        // nama tabel
        $table = 'v_tbl_user_new';
        // nama PK
        $primaryKey = 'id_user';
        // list field
        $columns = array(
           
            array('db' => 'no_identitas', 'dt' => 'no_identitas'),
            array('db' => 'nama_lengkap', 'dt' => 'nama_lengkap'),
            array('db' => 'tempat_lahir', 'dt' => 'tempat_lahir'),
            array('db' => 'tanggal_lahir', 'dt' => 'tanggal_lahir'),
            array('db' => 'gender', 'dt' => 'gender'),
            array('db' => 'nama_agama', 'dt' => 'nama_agama'),
            array('db' => 'alamat', 'dt' => 'alamat'),
            array('db' => 'no_hp', 'dt' => 'no_hp'),
            array('db' => 'email', 'dt' => 'email'),
            array('db' => 'nama_level', 'dt' => 'nama_level'),
            
            array(
                'db' => 'id_user',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    return anchor('users/add/'.$d,'<i class="fa fa-plus"></i>','class="btn btn-xs btn-success tooltips" data-placement="top" data-original-title="add"').'
                        '. anchor('users/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('users/delete/'.$d,'<i class="fa fa-trash-o"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete"');
                    
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

    public function index() {
		$this->template->load('template','users/list');
	}

    public function add() {
         if (isset($_POST['submit'])){
         	$uploadFoto = $this->upload_foto_user();
         	$this->model_users->save($uploadFoto);
             
                redirect('users');
        }else{
             $this->template->load('template','users/add');
        }

    }

    public function edit() {
        if (isset($_POST['submit'])){
           $uploadFoto = $this->upload_foto_user();
           $this->model_users->update($uploadFoto);
            redirect('users');
        } else {
                $id_user         = $this->uri->segment(3);
                $data ['user'] 	 = $this->db->get_where('tbl_user',array('id_user'=>$id_user))->row_array();
                $this->template->load('template','users/edit',$data);
        }
    } 

    public function delete() {
        $id = $this->input->post('id_user');
        $data=$this->model_users->delete($id);
        $this->session->set_flashdata('message', 'Delete Record Success');
        echo json_encode($data);
    }

    public function upload_foto_user() {
        $config['upload_path']          = './uploads/foto_user';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $upload =$this->upload->data();
        return $upload['file_name'];
    }
    
    public function rule() {
        $this->template->load('template','users/rule');
    }

    public function modul() {
        $level_user = $_GET['level_user'];
        echo "<table id='mytable2' class='table table-striped table-bordered table-hover table-full-width dataTable'>
                <thead>
                    <tr>
                        <th width='10'>NO</th>
                        <th>NAMA MODULE</th>
                        <th>LINK</th>
                        <th width='100'>HAK AKSES</th>
                    </tr>";
        
        $menu = $this->db->get('tabel_menu');
        $no=1;
        foreach ($menu->result() as $row){
            echo "<tr>
                <td>$no</td>
                <td>".  strtoupper($row->nama_menu)."</td>
                <td>$row->link</td>
                <td align='center'><input type='checkbox' ";
            $this->chek_akses($level_user, $row->id);
             echo " onclick='addRule($row->id)'></td>
                </tr>";
            $no++;
        }
        
        echo"</thead>
            </table>";
    }
    
    public function chek_akses($level_user,$id_menu){
        $data = array('id_level_user'=>$level_user,'id_menu'=>$id_menu);
        $chek = $this->db->get_where('tbl_user_rule',$data);
        if($chek->num_rows()>0){
            echo "checked";
        }
    }

    public function addrule() {
        $level_user = $_GET['level_user'];
        $id_menu    = $_GET['id_menu'];
        $data       = array('id_level_user'=>$level_user,'id_menu'=>$id_menu);
        $chek       = $this->db->get_where('tbl_user_rule',$data);
        if($chek->num_rows()<1){
            $this->db->insert('tbl_user_rule',$data);
            echo "berhasil memberikan akses modul";
        }else{
            $this->db->where('id_menu',$id_menu);
            $this->db->where('id_level_user',$level_user);
            $this->db->delete('tbl_user_rule');
            echo " berhasil delete akses modul";
        }
    }
}
