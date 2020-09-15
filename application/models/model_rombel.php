<?php


class Model_rombel extends CI_Model {

	public $table="v_master_rombel";

    // datatables
    function json() {
        $this->datatables->select('id_rombel, nama_rombel, kelas, kd_jurusan');
        $this->datatables->from('tbl_rombel');
        $this->datatables->add_column('action', '<a href="rombel/edit/$1"><i class="fa fa-edit" title="update"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" onclick="deletedata($1)"<i class="fa fa-trash-o" title="delete"></i></a>', 'id_rombel');
        return $this->datatables->generate();
    }


    function save() {
        $data = array(
            'kd_jurusan'    => $this->input->post('jurusan', TRUE),
            'kelas'         => $this->input->post('kelas', TRUE),
            'nama_rombel'   => $this->input->post('nama_rombel', TRUE)
        );
        $this->db->insert($this->table,$data);
    }
    
    function update() {
        $data = array(
            'kd_jurusan'    => $this->input->post('jurusan', TRUE),
            'kelas'         => $this->input->post('kelas', TRUE),
            'nama_rombel'   => $this->input->post('nama_rombel', TRUE)
        );

		$id_rombel = $this->input->post('id_rombel');
		$this->db->where('id_rombel',$id_rombel);
		$this->db->update($this->table,$data);
	}

	function delete($id)
    {
        $this->db->where('id_rombel', $id);
        $this->db->delete('tbl_rombel');
    }

}
