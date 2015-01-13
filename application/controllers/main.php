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
		$this->load->view('v_faqs');
	}
	
	public function contact(){
		$this->load->view('v_contact');
	}
	
	public function login(){
		$this->load->view('v_login');
	}
	
	public function register(){
		if( isset($_POST["txtAssociationCode"]) || isset($_POST["txtEmail"]))
  		{
     		$this->load->model('m_main');
			
			$validated = $this->m_main->validateSponsor($_POST["txtAssociationCode"], $_POST["txtEmail"]);
			if($validated == TRUE)
			{
				echo "VALIDATED";
			}
			else if($validated == FALSE)
			{
				$this->load->view('v_validation');
			}
		}
		else 
		{
			$this->join();
		}
	}
	

//end of the Main controller
}

