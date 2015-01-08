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
	
	public function meetme(){
		$this->load->view('v_meetme');
	}
	
	public function join(){
		$this->load->view('v_join');
	}
	
	public function faqs(){
		$this->load->view('v_faqs');
	}
	
	public function contact(){
		$this->load->view('v_contact');
	}
	
	public function login(){
		$this->load->view('v_login');
	}
	

//end of the Main controller
}

