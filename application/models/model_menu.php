<?php


class Model_menu extends CI_Model {

	public $table="tabel_menu";

    // datatables
    function json() {
        $this->datatables->select('id, nama_menu, link, icon, is_main_menu');
        $this->datatables->from('tabel_menu');
        $this->datatables->add_column('action', '<a href="menu/edit/$1"><i class="fa fa-edit" title="update"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" onclick="deletedata($1)"<i class="fa fa-trash-o" title="delete"></i></a>', 'id');
        return $this->datatables->generate();
    }

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
			'nama_menu'			=>$this->input->post('nama_menu',TRUE),
			'link'				=>$this->input->post('link',TRUE),
			'icon'		=>$this->input->post('icon',TRUE),
			'is_main_menu'		=>$this->input->post('is_main_menu',TRUE)
		
			);

		$id = $this->input->post('id');
		$this->db->where('id',$id);
		$this->db->update($this->table,$data);
	}

	function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tabel_menu');
    }

}
