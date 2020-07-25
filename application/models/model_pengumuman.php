<?php
class Model_pengumuman extends ci_model{
	function tampil(){
		$query=$this->db->get('pengumuman');
		if($query->num_rows()>0)
		{
			return $query->result();
		}
		else {
			return array();
		}
	}
	function per_id($id){
		$this->db->where('id',$id);
		$query=$this->db->get('pengumuman');
		return $query->result();
	}
}