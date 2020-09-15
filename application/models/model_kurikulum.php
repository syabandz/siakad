<?php


class Model_kurikulum extends CI_Model {

	public $table="tbl_kurikulum";

    // datatables
    function json() {
        $this->datatables->select('id_kurikulum, nama_kurikulum, is_aktif');
        $this->datatables->from('tbl_kurikulum');
        $this->datatables->add_column('action', '<a href="kurikulum/edit/$1"><i class="fa fa-edit" title="update"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" onclick="deletedata($1)"<i class="fa fa-trash-o" title="delete"></i></a>', 'id_kurikulum');
        return $this->datatables->generate();
    }


	public function save()
	{
		$data = array(
			'nama_kurikulum'			=>$this->input->post('nama_kurikulum',TRUE),
			'is_aktif'		    =>$this->input->post('is_aktif',TRUE)
		
			);
		$this->db->insert($this->table,$data);
	}


	public function update()
		{
			$data = array(
			'nama_kurikulum'			=>$this->input->post('nama_kurikulum',TRUE),
			'is_aktif'		    =>$this->input->post('is_aktif',TRUE)
		);

		$id_kurikulum = $this->input->post('id_kurikulum');
		$this->db->where('id_kurikulum',$id_kurikulum);
		$this->db->update($this->table,$data);
	}
	public function addKurikulumDetail(){
         $data = array(
            'kd_mapel'       => $this->input->post('kd_mapel', TRUE),
            'kelas'          => $this->input->post('kelas', TRUE),
            'kd_jurusan'     => $this->input->post('jurusan', TRUE),
            'id_kurikulum'   => $this->input->post('id_kurikulum', TRUE)
        );
        $this->db->insert('tbl_kurikulum_detail',$data);
    }

	function delete($id)
    {
        $this->db->where('id_kurikulum', $id);
        $this->db->delete('tbl_kurikulum');
    }


}
