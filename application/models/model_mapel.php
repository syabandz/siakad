<?php


class Model_mapel extends CI_Model {

	public $table="tbl_mapel";

    // datatables
    function json() {
        $this->datatables->select('kd_mapel,nama_mapel');
        $this->datatables->from('tbl_mapel');
        $this->datatables->add_column('action', '<a href="mapel/edit/$1"><i class="fa fa-edit" title="update"></i></a><a href="mapel/delete/$1",<i class="fa fa-trash-o" title="delete"></i></a>', 'kd_mapel');
        return $this->datatables->generate();
    }

	public function save()
	{
		$data = array(
			'kd_mapel'			=>$this->input->post('kd_mapel',TRUE),
			'nama_mapel'		=>$this->input->post('nama_mapel',TRUE)
		
			);
		$this->db->insert($this->table,$data);
	}


	public function update()
		{
			$data = array(
			'kd_mapel'			=>$this->input->post('kd_mapel',TRUE),
			'nama_mapel'	=>$this->input->post('nama_mapel',TRUE)
			
		);

		$kd_mapel = $this->input->post('kd_mapel');
		$this->db->where('kd_mapel',$kd_mapel);
		$this->db->update($this->table,$data);
	}
}
