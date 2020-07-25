<?php


class Model_users extends CI_Model {

	public $table="tbl_user";

	public function save($foto)
	{
		$data = array(
			
			'no_identitas'		=>$this->input->post('no_identitas',TRUE),
			'nama_lengkap'		=>$this->input->post('nama_lengkap',TRUE),
			'tempat_lahir'		=>$this->input->post('tempat_lahir',TRUE),
			'tanggal_lahir'		=>$this->input->post('tanggal_lahir',TRUE),
			'gender'			=>$this->input->post('gender',TRUE),
			'kd_agama'		    =>$this->input->post('kd_agama',TRUE),
			'alamat'			=>$this->input->post('alamat',TRUE),
			'no_hp'				=>$this->input->post('no_hp',TRUE),
			'email'				=>$this->input->post('email',TRUE),
			'username'			=>$this->input->post('username',TRUE),
			'password'			=>md5($this->input->post('password',TRUE)),
			'id_level_user'		=>$this->input->post('id_level_user',TRUE),
			'foto'				=>$foto
		
			);
		$this->db->insert($this->table,$data);
	}


	function update($foto) {
        if(empty($foto)){
            // jangan update field foto
        $data = array(
            'no_identitas'		=>$this->input->post('no_identitas',TRUE),
			'nama_lengkap'		=>$this->input->post('nama_lengkap',TRUE),
			'tempat_lahir'		=>$this->input->post('tempat_lahir',TRUE),
			'tanggal_lahir'		=>$this->input->post('tanggal_lahir',TRUE),
			'gender'			=>$this->input->post('gender',TRUE),
			'kd_agama'			=>$this->input->post('kd_agama',TRUE),
			'alamat'			=>$this->input->post('alamat',TRUE),
			'no_hp'				=>$this->input->post('no_hp',TRUE),
			'email'				=>$this->input->post('email',TRUE),
			'username'			=>$this->input->post('username',TRUE),
			'password'			=>md5($this->input->post('password',TRUE)),
			'id_level_user'		=>$this->input->post('id_level_user',TRUE)
        );
        }else{
            // update field foto
        $data = array(
            
			'no_identitas'		=>$this->input->post('no_identitas',TRUE),
			'nama_lengkap'		=>$this->input->post('nama_lengkap',TRUE),
			'tempat_lahir'		=>$this->input->post('tempat_lahir',TRUE),
			'tanggal_lahir'		=>$this->input->post('tanggal_lahir',TRUE),
			'gender'			=>$this->input->post('gender',TRUE),
			'kd_agama'			=>$this->input->post('kd_agama',TRUE),
			'alamat'			=>$this->input->post('alamat',TRUE),
			'no_hp'				=>$this->input->post('no_hp',TRUE),
			'email'				=>$this->input->post('email',TRUE),
			'username'			=>$this->input->post('username',TRUE),
			'password'			=>md5($this->input->post('password',TRUE)),
			'id_level_user'		=>$this->input->post('id_level_user',TRUE),
			'foto'				=>$foto
        );
        }

		$id_user = $this->input->post('id_user');
		$this->db->where('id_user',$id_user);
		$this->db->update($this->table,$data);
	}
}
