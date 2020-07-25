<?php


class Model_ganti_password extends CI_Model {

	public $table="tbl_user";

	function update() {
        if(empty($foto)){
            // jangan update field foto
        $data = array(
			'username'			=>$this->input->post('username',TRUE),
			'password'			=>md5($this->input->post('password',TRUE))
			
        );
        }else{
            // update field foto
        $data = array(
            
			'username'			=>$this->input->post('username',TRUE),
			'password'			=>md5($this->input->post('password',TRUE))
			
        );
        }

		$id_user = $this->input->post('id_user');
		$this->db->where('id_user',$id_user);
		$this->db->update($this->table,$data);
	}
}
