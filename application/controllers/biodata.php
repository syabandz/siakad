<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {
			function __construct(){
			parent:: __construct();
            //chekAksesModule();
			$this->load->library('ssp') ;

		}
	public function index()
	{
		//$this->load->view('templete');
                $this->template->load('template', 'biodata');
	}
	function biodata(){
       // blok query info siswa
       $nis = $this->uri->segment(3);
       $sqlBiodata = "SELECT tu.*,tlu.nama_level,ta.nama_agama 
		FROM tbl_user as tu,tbl_level_user as tlu, tbl_agama as ta
		WHERE tu.id_level_user=tlu.id_level_user and tu.kd_agama=ta.kd_agama";
       $biodata = $this->db->query($sqlBiodata)->row_array();
 }
}