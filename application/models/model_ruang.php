<?php


class Model_ruang extends CI_Model {

	public $table="tbl_ruangan";

	public function save()
	{
		$data = array(
			'kd_ruang'			=>$this->input->post('kd_ruang',TRUE),
			'nama_ruang'		=>$this->input->post('nama_ruang',TRUE)
		
			);
		$this->db->insert($this->table,$data);
	}


	public function update()
		{
			$data = array(
			'nama_ruang'	=>$this->input->post('nama_ruang',TRUE)
			
		);

		$kd_ruang = $this->input->post('kd_ruang');
		$this->db->where('kd_ruang',$kd_ruang);
		$this->db->update($this->table,$data);
	}
}
