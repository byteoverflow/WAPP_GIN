<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		$this->load->helper("url");
	}
	
	public function index(){
			
		$this->load->view('v_main');
	}
	
	public function about(){
		$this->load->view('v_about');
	}
	
	public function join(){
		$this->load->view('v_join');
	}
	
	public function faqs(){
		echo "faqs page";
	}
	
	public function contact(){
		echo "contact page";
	}
	
	public function login(){
		echo "login page";
	}
	

//end of the Main controller
}

