<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
			function __construct(){
			parent:: __construct();
            //chekAksesModule();
			$this->load->library('ssp') ;

		}
	public function index()
	{
		//$this->load->view('templete');
                $this->template->load('template', 'welcome');
	}
}
