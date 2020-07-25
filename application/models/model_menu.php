<?php


class Model_menu extends CI_Model {

	public $table="tabel_menu";

	public function save()
	{
		$data = array(
			'nama_menu'			=>$this->input->post('nama_menu',TRUE),
			'link'				=>$this->input->post('link',TRUE),
			'icon'		=>$this->input->post('icon',TRUE),
			'is_main_menu'		=>$this->input->post('is_main_menu',TRUE)
		
			);
		$this->db->insert($this->table,$data);
	}


	public function update()
		{
			$data = array(
			'nama_menu'	=>$this->input->post('nama_menu',TRUE)
			
		);

		$kd_menu = $this->input->post('kd_menu');
		$this->db->where('kd_menu',$kd_menu);
		$this->db->update($this->table,$data);
	}
}
