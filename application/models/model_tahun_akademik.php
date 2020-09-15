<?php


class Model_tahun_akademik extends CI_Model {

	public $table="tbl_tahun_akademik";

    // datatables
    function json() {
        $this->datatables->select('id_tahun_akademik, tahun_akademik, is_aktif');
        $this->datatables->from('tbl_tahun_akademik');
        $this->datatables->add_column('action', '<a href="tahun_akademik/edit/$1"><i class="fa fa-edit" title="update"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" onclick="deletedata($1)"<i class="fa fa-trash-o" title="delete"></i></a>', 'id_tahun_akademik');
        return $this->datatables->generate();
    }

	public function save()
	{
		$data = array(
			'tahun_akademik'			=>$this->input->post('tahun_akademik',TRUE),
			'is_aktif'		    		=>$this->input->post('is_aktif',TRUE)
		
			);
		$this->db->insert($this->table,$data);
	}


	public function update()
		{
			$data = array(
			'tahun_akademik'			=>$this->input->post('tahun_akademik',TRUE),
			'is_aktif'		    		=>$this->input->post('is_aktif',TRUE)
		);

		$id_tahun_akademik = $this->input->post('id_tahun_akademik');
		$this->db->where('id_tahun_akademik',$id_tahun_akademik);
		$this->db->update($this->table,$data);
	}

	function delete($id)
    {
        $this->db->where('id_tahun_akademik', $id);
        $this->db->delete('tbl_tahun_akademik');
    }

}
