<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	
	public function index(){
			
		$this->load->view('v_main');
	}
	
	public function registerUser(){
	
		$this->load->model("m_main");
		echo $this->m_main->registerUser();	
	}
	

//end of the Main controller
}

