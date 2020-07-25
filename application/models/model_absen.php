<?php

class Model_absen extends CI_Model {

    public $table ="tbl_absen";
    
    function save() {
        $data = array(
            'nis'           => $this->input->post('nis', TRUE),
            'nama'           => $this->input->post('nama', TRUE),
            'tanggal'       => $this->input->post('tanggal', TRUE),
            'absen' 		=> $this->input->post('absen', TRUE)
        );
        $this->db->insert($this->table,$data);
    }
    
    function update() {
            $data = array(
            'nis'           => $this->input->post('nis', TRUE),
            'nama'           => $this->input->post('nama', TRUE),
            'tanggal'       => $this->input->post('tanggal', TRUE),
            'absen' 		=> $this->input->post('absen', TRUE)
        );
        
        $nis   = $this->input->post('nis');
        $this->db->where('nis',$nis);
        $this->db->update($this->table,$data);
    }
    
}