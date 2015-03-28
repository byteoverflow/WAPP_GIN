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
	
	
	public function join(){
		$this->load->view('v_join');
	}
	
	public function contact(){
		$this->load->view('v_contact');
	}
	
	public function masterlogin(){
		$this->load->view('v_login');
	}
	
	public function logout(){
		$this->session->sess_destroy();
		$this->kontakt();
	}
	
	public function logout2(){
		$this->session->sess_destroy();
		$this->index();
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
			
				  $subject = $_POST['txtFirstName'] . ' ' . $_POST['txtLastName'] . ' has successfully registered for IAM-Power Club.';
			      $message = '
			      You have successfully created an account for IAM-Power Club. Your account will be activated once your payment is approved.
			      <br><br>
			      Login information:
			      <br>
			      Username: '.$_POST['txtEmail'].' <br>
			      Password: '.$_POST['txtPassword'].' <br>
			      Login page:  <a href="http://www.iam-power.com/index.php/main/kontakt">Login page</a>			      
			      ';
			      $this->load->library('email', $config);
			      $this->email->set_newline("\r\n");
			      $this->email->from('support@iam-power.com'); 
			      $this->email->to($_POST['txtEmail']);
				  $this->email->bcc('mimoza88@yahoo.com'); 
			      $this->email->subject($subject);
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
			$this->load->view('v_join');
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
	
	public function sitemaster(){
			
		if(isset($_POST["txtUsername"]) && isset($_POST["txtPassword"]))
  		{  				
			$this->m_main->validateAdmin($_POST["txtUsername"], $_POST["txtPassword"]);
			
			if($this->session->userdata('logged') == TRUE && $this->session->userdata('accessStatus') == 'admin' )			
			{
				$this->sitemaster2();
			}
			else
			{
				$data['invalidLogin'] = '*Invalid login. Please try again!';				
				$this->load->view('v_login', $data);
			}
		}		
		else 
		{
			$this->masterlogin();
		}
	}
	
	public function sitemaster2()
	{
		if($this->session->userdata('logged') == TRUE && $this->session->userdata('accessStatus') == 'admin' )			
		{
			$this->allmembers();
		}
		else 
		{
			$this->masterlogin();	
		}	
		
	}
	
	public function allmembers()
	{
		if($this->session->userdata('logged') == TRUE && $this->session->userdata('accessStatus') == 'admin' )			
		{
			$data['members'] = $this->m_main->getAllMembers();
			$this->load->view('v_allMembers', $data);
		}
		else 
		{
			$this->masterlogin();	
		}	
		
	}
	
	public function activemembers()
	{
		if($this->session->userdata('logged') == TRUE && $this->session->userdata('accessStatus') == 'admin' )			
		{
			$data['members'] = $this->m_main->getActiveMembers();
			$this->load->view('v_activeMembers', $data);
		}
		else 
		{
			$this->masterlogin();	
		}	
		
	}
	
	public function disabledmembers()
	{
		if($this->session->userdata('logged') == TRUE && $this->session->userdata('accessStatus') == 'admin' )			
		{
			$data['members'] = $this->m_main->getDisabledMembers();
			$this->load->view('v_disabledMembers', $data);
		}
		else 
		{
			$this->masterlogin();	
		}	
		
	}
	
	public function changelevel()
	{
		if($this->session->userdata('logged') == TRUE && $this->session->userdata('accessStatus') == 'admin' )			
		{
			$data['members'] = $this->m_main->getAllMembers();
			$this->load->view('v_changeLevel', $data);
		}
		else 
		{
			$this->masterlogin();	
		}	
		
	}
	
	public function deletemember()
	{
		if($this->session->userdata('logged') == TRUE && $this->session->userdata('accessStatus') == 'admin' )			
		{
			$data['members'] = $this->m_main->getAllMembers();
			$this->load->view('v_deleteMember', $data);
		}
		else 
		{
			$this->masterlogin();	
		}	
		
	}
	
	public function checkenabled()
	{
		if(isset($_POST["ajaxUserId"]))
		{
			$res = $this->m_main->isMemberEnabled($_POST["ajaxUserId"]);
			if($res != null)
			{
				if($res == true)
				{
					echo '
					
					<input type="radio" name="userStatus" value="true" checked>Enabled
					<input type="radio" name="userStatus" value="false">Disabled
					
					';
				}
				else if($res == false)
				{
					echo '
					
					<input type="radio" name="userStatus" value="true">Enabled
					<input type="radio" name="userStatus" value="false" checked>Disabled
					
					';
				}
			}
		}
	}
	
	public function sendemail()
	{
		if($this->session->userdata('logged') == TRUE && $this->session->userdata('accessStatus') == 'admin' )			
		{
			$this->load->view('v_sendEmail');
		}
		else 
		{
			$this->masterlogin();	
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
			$this->load->view('v_kontakt');	
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
			$this->load->view('v_kontakt');	
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
			$this->load->view('v_kontakt');	
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
			$this->load->view('v_kontakt');	
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
			$this->load->view('v_kontakt');	
		}		
	}
	
	public function audioPlayer()
	{
			if(isset($_GET["audioFile"]))
			{
				$data['audioFile'] = $_GET["audioFile"];
				$this->load->view('v_audioPlayer', $data);
			}			
	}
	
	public function videoPlayer()
	{
			if(isset($_GET["videoFile"]))
			{
				$data['videoFile'] = $_GET["videoFile"];
				$this->load->view('v_videoPlayer', $data);
			}			
	}

	public function disableMember()
	{
			if(isset($_GET["memberid"]))
			{
				$this->m_main->disableMember($_GET["memberid"]);
				$this->activemembers();
			}	
	}
	
	public function enableMember()
	{
			if(isset($_GET["memberid"]))
			{
				$this->m_main->enableMember($_GET["memberid"]);
				$this->disabledmembers();
			}	
	}
	
	public function removeMember()
	{
			if(isset($_GET["memberid"]))
			{
				$this->m_main->removeMember($_GET["memberid"]);
				$this->deletemember();
			}	
	}

//end of the Main controller
}

