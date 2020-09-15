<?php


class Model_ruang extends CI_Model {

	public $table="tbl_ruangan";

    // datatables
    function json() {
        $this->datatables->select('id_ruangan, kd_ruang, nama_ruang');
        $this->datatables->from('tbl_ruangan');
        $this->datatables->add_column('action', '<a href="ruang/edit/$1"><i class="fa fa-edit" title="update"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" onclick="deletedata($1)"<i class="fa fa-trash-o" title="delete"></i></a>', 'id_ruangan');
        return $this->datatables->generate();
    }

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

	public function delete($id)
    {
        $this->db->where('id_ruangan', $id);
        $this->db->delete('tbl_ruangan');
    }
}
