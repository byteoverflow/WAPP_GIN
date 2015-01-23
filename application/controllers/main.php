<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		
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
	
	public function logout(){
		$this->session->sess_destroy();
		$this->login();
	}
	
	public function register(){
		if( isset($_POST["txtAssociationCode"]) && isset($_POST["txtEmail"]))
  		{
			
			$validated = $this->m_main->validateSponsor($_POST["txtAssociationCode"], $_POST["txtEmail"]);
			if($validated == TRUE)
			{
				$data['sponsorCode'] = $_POST["txtAssociationCode"];
				$data['sponsorEmail'] = $_POST["txtEmail"];
				
				$this->load->view('v_register', $data);
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
	
	public function submit()
	{
		if( 
		isset($_POST["txtFirstName"]) 
		&& isset($_POST["txtLastName"])
		&& isset($_POST["txtBirthday"])
		&& isset($_POST["txtGender"])
		&& isset($_POST["txtCountry"])
		&& isset($_POST["txtCity"])
		&& isset($_POST["txtAddress"])
		&& isset($_POST["txtPhone"])
		&& isset($_POST["txtEmail"])
		&& isset($_POST["txtPassword"])
		&& isset($_POST["txtPasswordConfirm"])
		&& isset($_POST["sponsorCode"])
		&& isset($_POST["sponsorEmail"])
		)
  		{
  			
			$res = $this->m_main->createUserAndAccount(
			$_POST["txtFirstName"], 
			$_POST["txtLastName"], 
			$_POST["txtBirthday"], 
			$_POST["txtGender"], 
			$_POST["txtCountry"], 
			$_POST["txtCity"], 
			$_POST["txtAddress"], 
			$_POST["txtPhone"], 
			$_POST["txtEmail"], 
			$_POST["txtPassword"],
			$_POST["sponsorCode"],
			$_POST["sponsorEmail"]);
			
			if($res == TRUE)
			{
				$this->load->view('v_registrationCompleted');
			}
			
		}
		else 
		{
			$this->join();
		}
	}
	
	public function content(){
			
		if(isset($_POST["txtUsername"]) && isset($_POST["txtPassword"]))
  		{  				
			$this->m_main->validateLogin($_POST["txtUsername"], $_POST["txtPassword"]);
			
			if($this->session->userdata('logged') == TRUE)			
			{
				$this->events();
			}
			else
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
	
	public function events()
	{
		if($this->session->userdata('logged') == TRUE)			
		{
			$this->load->view('v_news_events');
		}
		else 
		{
			$this->load->view('v_login');	
		}		
	}
	
	public function mastery()
	{
		if($this->session->userdata('logged') == TRUE)			
		{
			$this->load->view('v_mastery_course');
		}
		else 
		{
			$this->load->view('v_login');	
		}		
	}
	
	public function development()
	{
		if($this->session->userdata('logged') == TRUE)			
		{
			$this->load->view('v_development_series');
		}
		else 
		{
			$this->load->view('v_login');	
		}		
	}
	
	public function webinars()
	{
		if($this->session->userdata('logged') == TRUE)			
		{
			$this->load->view('v_webinars');
		}
		else 
		{
			$this->load->view('v_login');	
		}		
	}
	
	public function legacy()
	{
		if($this->session->userdata('logged') == TRUE)			
		{
			$this->load->view('v_legacy_education');
		}
		else 
		{
			$this->load->view('v_login');	
		}		
	}

//end of the Main controller
}

