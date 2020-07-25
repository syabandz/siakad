<?php 
class Auth extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('model_user');
		$this->load->model('model_guru');
        $this->load->model('model_siswa');
	}



	function index(){
		$this->template->load('tampilan_utama','auth/login');
	}
	function chek_login() {
        if (isset($_POST['submit'])) {
            // proses login disini

            $username   = $this->input->post('username');
            $password   = $this->input->post('password');
            $loginUser  = $this->model_user->chekLogin($username, $password);
            $loginGuru  = $this->model_guru->chekLogin($username, $password);
            $loginSiswa = $this->model_siswa->chekLogin($username, $password);
            if (!empty($loginUser)) {
                // sukses login user
                $this->session->set_userdata($loginUser);
                redirect('welcome');
            } elseif (!empty($loginGuru)) {
                // login guru
  
                $session = array(
                    'nama_lengkap'  =>  $loginGuru['nama_guru'],
                    'id_level_user' =>  3,
                    'id_guru'       =>  $loginGuru['id_guru']);
                $this->session->set_userdata($session);
                redirect('jadwal');

            } elseif (!empty($loginSiswa)) {
                // login guru
  
                $session = array(
                    'nama_lengkap'  =>  $loginSiswa['nama_siswa'],
                    'id_level_user' =>  5,
                    'id_siswa'       =>  $loginSiswa['id_siswa']);
                $this->session->set_userdata($session);
                redirect('welcome');



            } else {
                // gagal login
                redirect('auth');
            }
        } else {
            redirect('auth');
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('siakad');
	}
   
    
    
}