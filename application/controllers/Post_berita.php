<?php
class Post_berita extends CI_Controller{
	function __construct(){
		parent::__construct();
		chekAksesModule();
		$this->load->model('m_berita');
       
	}
	function index(){
		 $this->template->load('template','Post_berita/v_post_news');
	}

	function simpan_post(){
		
                $jdl=$this->input->post('judul');
                $berita=$this->input->post('berita');

				$this->m_berita->simpan_berita($jdl,$berita);
				redirect('post_berita');
		
	}

	function lists(){
		$x['data']=$this->m_berita->get_all_berita();
		$this->template->load('tampilan_utama','Post_berita/v_post_list',$x);
	}

	function view(){
		$kode=$this->uri->segment(3);
		$x['data']=$this->m_berita->get_berita_by_kode($kode);
		$this->template->load('tampilan_utama','Post_berita/v_post_view',$x);
	}

}