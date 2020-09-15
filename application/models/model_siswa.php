<?php

class Model_siswa extends CI_Model {

    public $table ="tbl_siswa";
    
    // datatables
    function json() {
        $this->datatables->select('id_siswa,nis,nama,tempat_lahir,tanggal_lahir,gender');
        $this->datatables->from('tbl_siswa');
        $this->datatables->add_column('action', '<a href="siswa/edit/$1"><i class="fa fa-edit" title="update"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" onclick="deletedata($1)"<i class="fa fa-trash-o" title="delete"></i></a>', 'id_siswa');
        return $this->datatables->generate();
    }

    function save($foto) {
        $data = array(
            'nis'           => $this->input->post('nis', TRUE),
            'kd_agama'      => $this->input->post('agama', TRUE),
            'nama'          => $this->input->post('nama', TRUE),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
            'tempat_lahir'  => $this->input->post('tempat_lahir', TRUE),
            'gender'        => $this->input->post('gender',TRUE),
            'foto'          => $foto,
            'id_rombel'     => $this->input->post('rombel',TRUE)
        );
        $this->db->insert($this->table,$data);
        $tahun_akademik = $this->db->get_where('tbl_tahun_akademik',array('is_aktif'=>'y'))->row_array();
        $data2 = array(
            'nis'                 =>  $this->input->post('nis', TRUE),
            'id_tahun_akademik'   =>  $tahun_akademik['id_tahun_akademik'],
            'id_rombel'           =>  $this->input->post('rombel',TRUE)
            );
        $this->db->insert('tbl_history_kelas',$data2);
       
    }
    
    function update($foto) {
        if(empty($foto)){
            // update without foto
            $data = array(
            'nama'          => $this->input->post('nama', TRUE),
            'kd_agama'      => $this->input->post('agama', TRUE),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
            'tempat_lahir'  => $this->input->post('tempat_lahir', TRUE),
            'gender'        => $this->input->post('gender', TRUE),
            'id_rombel'   		=> $this->input->post('rombel',TRUE)
        );
        }else{
            // update with foto
            $data = array(
            'nama'          => $this->input->post('nama', TRUE),
            'kd_agama'      => $this->input->post('agama', TRUE),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
            'tempat_lahir'  => $this->input->post('tempat_lahir', TRUE),
            'gender'        => $this->input->post('gender', TRUE),
            'foto'          => $foto,
            'id_rombel'   => $this->input->post('rombel',TRUE)
        );
        }
        $nis   = $this->input->post('nis');
        $this->db->where('nis',$nis);
        $this->db->update($this->table,$data);
    }
    function chekLogin($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',  md5($password));
        $user = $this->db->get('tbl_siswa')->row_array();
        return $user;
    }
    function getabsen(){
        $absen= array(
            'hadir' =>'H',
            'izin' =>'I',
            'alpha' =>'A',
            'sakit' =>'S',
            'telat' =>'T');
        return $absen;
    }
    
	function delete($id)
    {
        $this->db->where('id_siswa', $id);
        $this->db->delete('tbl_siswa');
    }


}