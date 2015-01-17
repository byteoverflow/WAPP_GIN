<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		$this->load->helper("url");
		$this->load->model('m_main');
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
		if( isset($_POST["txtAssociationCode"]) && isset($_POST["txtEmail"]))
  		{
			
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
	
	
	public function content(){
		if( isset($_POST["txtUsername"]) || isset($_POST["txtPassword"]))
  		{  				
			$validated = $this->m_main->validateLogin($_POST["txtUsername"], $_POST["txtPassword"]);
			if($validated == TRUE)
			{
				$accessLevel = $this->m_main->getMemberLevel($_POST["txtUsername"], $_POST["txtPassword"]);
				
				if($accessLevel > 0)
				{
					$this->load->view('v_content');
				}
				else 
				{
					
				}

			}
			else if($validated == FALSE)
			{
				$data['invalidLogin'] = '*Invalid login. Please try again!';
				
				$this->load->view('v_login', $data);
			}
		}
		else 
		{
			$this->login();
		}
	}
	

//end of the Main controller
}

