<?php


class Model_jurusan extends CI_Model {

	public $table="tbl_jurusan";

    // datatables
    function json() {
        $this->datatables->select('id_jurusan, kd_jurusan, nama_jurusan');
        $this->datatables->from('tbl_jurusan');
        $this->datatables->add_column('action', '<a href="jurusan/edit/$1"><i class="fa fa-edit" title="update"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" onclick="deletedata($1)"<i class="fa fa-trash-o" title="delete"></i></a>', 'id_jurusan');
        return $this->datatables->generate();
    }


	public function save()
	{
		$data = array(
			'kd_jurusan'			=>$this->input->post('kd_jurusan',TRUE),
			'nama_jurusan'		=>$this->input->post('nama_jurusan',TRUE)
		
			);
		$this->db->insert($this->table,$data);
	}


	public function update()
		{
			$data = array(
			'nama_jurusan'	=>$this->input->post('nama_jurusan',TRUE)
			
		);

		$kd_jurusan = $this->input->post('kd_jurusan');
		$this->db->where('kd_jurusan',$kd_jurusan);
		$this->db->update($this->table,$data);
	}

	function delete($id)
    {
        $this->db->where('id_jurusan', $id);
        $this->db->delete('tbl_jurusan');
    }

}
