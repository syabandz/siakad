<?php

class sekolah extends CI_Controller {

    function __construct(){
            parent:: __construct();
            //chekAksesModule();
            $this->load->library('ssp') ;
            $this->load->model('model_sekolah');
        }

        function data() {
            // nama tabel
        $table = 'profil_sekolah';
        // nama PK
        $primaryKey = 'id_sekolah';
        // list field
        $columns = array(
           
            array('db' => 'id_sekolah', 'dt'        => 'id_sekolah'),
            array('db' => 'nama_sekolah', 'dt'      => 'nama_sekolah'),
            array('db' => 'nama_kepsek', 'dt'       => 'nama_kepsek'),
            array('db' => 'kurikulum', 'dt'         => 'kurikulum'),
            array('db' => 'status_akreditasi', 'dt' => 'status_akreditasi'),
            array('db' => 'nss', 'dt'               => 'nss'),
            array('db' => 'npsn_lama', 'dt'         => 'npsn_lama'),
            array('db' => 'kode_sekolah', 'dt'      => 'kode_sekolah'),
            array('db' => 'alamat_sekolah', 'dt'    => 'alamat_sekolah'),
            array('db' => 'no_tlp', 'dt'            => 'no_tlp'),
            array('db' => 'email', 'dt'             => 'email'),
            array('db' => 'luas_tanah', 'dt'        => 'luas_tanah'),
            array('db' => 'luas_bangunan', 'dt'     => 'luas_bangunan'),
            array('db' => 'tanggal_pendirian', 'dt' => 'tanggal_pendirian'),
            array('db' => 'latitude', 'dt'          => 'latitude'),
            array('db' => 'longitude', 'dt'         => 'longitude'),
            array('db' => 'jumlah_rombel', 'dt'     => 'jumlah_rombel'),

            array(
                'db' => 'id_sekolah',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                     return anchor('sekolah/add/' . $d, '<i class="fa fa-plus"></i>', 'class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Add"') . ' 
                        '. anchor('sekolah/edit/' . $d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Edit"').'
                        '. anchor('sekolah/delete/' . $d, '<i class="fa fa-trash-o"</i>', 'class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Delete"');
                    
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
                $id_sekolah            = $this->uri->segment(3);
                $data ['sekolah']      = $this->db->get_where('profil_sekolah',array('id_sekolah'=>1))->row_array();
                $this->template->load('tampilan_utama','sekolah/edit',$data);
        
    }
    function add(){
         if (isset($_POST['submit'])){
             $uploadFoto = $this->upload_foto_sekolah();
            $this->model_sekolah->save($uploadFoto);
                redirect('sekolah');
        }else{
             $this->template->load('tampilan_utama','sekolah/add');
        }

    }
    function edit(){

        if (isset($_POST['submit'])){
          $uploadFoto = $this->upload_foto_sekolah();
           $this->model_sekolah->update($uploadFoto);
            redirect('sekolah');

        } else {
                $id_sekolah            = $this->uri->segment(3);
                $data ['sekolah']   = $this->db->get_where('tabel_sekolah',array('id_sekolah'=>$id_sekolah))->row_array();
                $this->template->load('tampilan_utama','sekolah/edit',$data);
        }

    } 
    function delete(){
        $id_sekolah = $this->uri->segment(3);
        if(!empty($id_sekolah)){
            $this->db->where('id_sekolah',$id_sekolah);
            $this->db->delete('tbl_sekolah');
        }
        redirect('sekolah');

    }

}
