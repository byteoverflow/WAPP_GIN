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
	
	public function training(){
		$this->load->view('v_training');
	}
	
	public function publications(){
		$this->load->view('v_main');
	}
	
	public function faqs(){
		$this->load->view('v_faqs');
	}
	
	public function kontakt(){
		$this->load->view('v_kontakt');
	}
	
	
	// public function join(){
		// $this->load->view('v_join');
	// }
	
	public function contact(){
		$this->load->view('v_contact');
	}
	
	// public function login(){
		// $this->load->view('v_login');
	// }
	
	public function logout(){
		$this->session->sess_destroy();
		$this->kontakt();
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
			$this->kontakt();
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
				//SEND EMAIL WITH USERNAME AND PASSWORD TO THE MEMBER
				
				$config = Array
				(
				  'protocol' => 'smtp',
				  'smtp_host' => 'smtpout.europe.secureserver.net',
				  'smtp_port' => 80,
				  'smtp_user' => 'support@iam-power.com', 
				  'smtp_pass' => 'Sot5122014',
				  'mailtype' => 'html',
				  'charset' => 'iso-8859-1',
				  'wordwrap' => TRUE 
			    );
			
			      $message = '
			      Congratulations! You have successfully created an account for IAM-Power Club.
			      <br><br>
			      Please use below login information in order to sign into IAM-Power Club: <br>
			      Username: '.$_POST['txtEmail'].' <br>
			      Password: '.$_POST['txtPassword'].' <br>
			      Login page:  <a href="http://www.iam-power.com/index.php/main/kontakt">Login page</a>			      
			      ';
			      $this->load->library('email', $config);
			      $this->email->set_newline("\r\n");
			      $this->email->from('support@iam-power.com'); 
			      $this->email->to($_POST['txtEmail']);
			      $this->email->subject('Successfully created account for IAM-Power club');
			      $this->email->message($message);
			      if($this->email->send())
				  {
				      $this->load->view('v_registrationCompleted');
				  }
			     else
			     {//anyway open registration completed page because the the user is created in database.
			     	$this->load->view('v_registrationCompleted');
			     }
				
			//LOAD SUCCESSFULLY CREATED ACCOUNT VIEW
				
			}
			else 
			{
				$data['accountExists'] = '*Your username/email is already registered.';
				$data['sponsorCode'] = $_POST['sponsorCode'];
				$data['sponsorEmail'] = $_POST['sponsorEmail'];
				$this->load->view('v_register', $data);	
			}
		}
		else 
		{	
			$this->load->view('v_kontakt');
		}
	}

	public function contactus()
	{
		if( 
		isset($_POST["txtName"]) 
		&& isset($_POST["txtSurname"])
		&& isset($_POST["txtEmail"])
		&& isset($_POST["txtMessage"])		
		)
  		{  			
				$config = Array
				(
				  'protocol' => 'smtp',
				  'smtp_host' => 'smtpout.europe.secureserver.net',
				  'smtp_port' => 80,
				  'smtp_user' => 'contact@iam-power.com', 
				  'smtp_pass' => 'Sot5122014',
				  'mailtype' => 'html',
				  'charset' => 'iso-8859-1',
				  'wordwrap' => TRUE 
			    );
			
			      $message = '
			      You have a message from '.$_POST['txtName'].' '.$_POST['txtSurname'].' with email address '.$_POST['txtEmail'].'<br><br>';
				  $message = $message . $_POST['txtMessage'];
				  
			      $this->load->library('email', $config);
			      $this->email->set_newline("\r\n");
			      $this->email->from('contact@iam-power.com'); 
			      $this->email->to('contact@iam-power.com');
			      $this->email->subject('Contact email from '.$_POST['txtName'].' '.$_POST['txtSurname'].'');
			      $this->email->message($message);
			      if($this->email->send())
				  {
				      $data['messageStatus'] = 'Message sent successfully.';				
					  $this->load->view('v_contact', $data);
				  }
			      else
			      {
			     	  $data['messageStatus'] = 'Unable to send email.';				
					  $this->load->view('v_contact', $data);
			      }				
		}
		else 
		{
			$this->contact();
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
				$this->load->view('v_kontakt', $data);
			}
		}		
		else 
		{
			$this->kontakt();
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

