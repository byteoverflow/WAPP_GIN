<?php

class M_Main extends CI_Model
{
		public function validateSponsor($sponsorCode, $sponsorEmail)
		{
			if($sponsorCode)
			{
				$query = $this->db->query("SELECT member_id FROM tbl_members WHERE member_id='".$sponsorCode."'");
				
				if ($query->num_rows() > 0)
				{
				   return TRUE;
				}
				else
				{
					if($sponsorEmail)
					{
						$query = $this->db->query("SELECT email FROM tbl_members WHERE email='".$sponsorEmail."'");
						
						if ($query->num_rows() > 0)
						{
						   return TRUE;
						}
						else 
						{
							return FALSE;	
						}
					}
					else 
					{
						return FALSE;	
					}		
				}
			}
			else if($sponsorEmail)
			{
				$query = $this->db->query("SELECT email FROM tbl_members WHERE email='".$sponsorEmail."'");
				
				if ($query->num_rows() > 0)
				{
				   return TRUE;
				}
				else 
				{
					return FALSE;	
				}
			}
			else 
			{
				return FALSE;	
			}
		}
		
		public function isUserRegistered($email)
		{
			$query = $this->db->query("SELECT * FROM tbl_accounts WHERE username='" . $email ."'");
			if($query->num_rows() > 0)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
			
		}
		
		public function createUserAndAccount($firstName, $lastName, $birthday, $gender, $country, $city, $address, $phone, $email, $password, $sponsorCode, $sponsorEmail)
		{
			
			if($this->isUserRegistered($email) == FALSE)
			{
					$memberId = uniqid('', TRUE);
		//ADD USER INFORMATION TO DB	
			$memberData = array(
						   'member_id' =>  $memberId,
						   'firstName' => $firstName ,
						   'lastName' => $lastName ,
						   'birthDate' => $birthday ,
						   'gender' => $gender ,
						   'address' => $address ,
						   'city' => $city ,
						   'country' => $country ,
						   'phone' => $phone ,
						   'email' => $email ,
						   'date' => gmdate('Y-m-d')
						);
						
			$this->db->insert('tbl_members', $memberData);
			
		//ADD ACCOUNT INFORMATION TO DB
				$saltPrefix = 'iam';
				$saltSufix = 'power';
				$passwordSalted = $saltPrefix . $password . $saltSufix;
		
			$accountData = array(
						   'fk_member_id' =>  $memberId,
						   'username' => $email ,
						   'password' => md5($passwordSalted) ,
						   'accessLevel' => '1' ,
						   'registrationDate' => gmdate('Y-m-d') ,
						   'expireDate' => gmdate('Y-m-d', mktime(0,0,0,gmdate('m'),gmdate('d'),gmdate('Y')+1)) ,
						   'enabled' => 'false',
						   'isAdmin' => 'false'
						); 
						
			$this->db->insert('tbl_accounts', $accountData);
		
		//ADD SPONSOR INFORMATION TO DB
		
			$sponsor = "";
			if($sponsorCode != "")
			{
				$sponsor = $sponsorCode;
			}
			else if($sponsorEmail != "")
			{
				$query = $this->db->query("SELECT member_id FROM tbl_members WHERE email='".$sponsorEmail."'");
				
				if($query->num_rows() > 0)
				{
					$row = $query->row();
					$sponsor = $row->member_id;
				}
			}


			$sponsorData = array(
						   'fk_member_id' =>  $memberId,
						   'fk_sponsor_id' => $sponsor
						);
						
			$this->db->insert('tbl_sponsors', $sponsorData);
			
			return TRUE;	
				
			}
			else
			{
				return FALSE;
			}
		
		}
		
		
		public function validateLogin($username, $password)
		{		
			if($username && $password)
			{
				$saltPrefix = 'iam';
				$saltSufix = 'power';
				$passwordSalted = $saltPrefix . $password . $saltSufix;
				
				$passwordHash = md5($passwordSalted);
				
				$query = $this->db->query("SELECT * FROM tbl_accounts WHERE username='".$username."' AND password='".$passwordHash."' AND enabled ='true'");
				if ($query->num_rows() > 0)
				{
					$row = $query->row();
					
					//IF LOGIN USERNAME AND PASSWORD EXSISTS CREATE SESSION
				   $sessionData = array(
                   			'logged'  => TRUE,
                   			'username'  => $row->username,
                   			'memberId'     => $row->fk_member_id,
                   			'accessLevel' => $row->accessLevel
               		);
					$this->session->set_userdata($sessionData);
					
					//IF LOGIN USERNAME AND PASSWORD EXSISTS CREATE COOKIE
					// $cookieData = array(
					    // 'name'   => 'MemberLogged',
					    // 'value'  => $row->fk_member_id,
					    // 'expire' => 86500,
					    // // 'domain' => '.iam-power.com',
					    // // 'path'   => '/',
					    // // 'prefix' => 'iamp_',
					    // // 'secure' => TRUE  
					// );
					// $this->input->set_cookie($cookieData);
				}
		}
	}
		
		public function validateAdmin($username, $password)
		{		
			if($username && $password)
			{
				$saltPrefix = 'iam';
				$saltSufix = 'power';
				$passwordSalted = $saltPrefix . $password . $saltSufix;
				
				$passwordHash = md5($passwordSalted);
				
				$query = $this->db->query("SELECT * FROM tbl_accounts WHERE username='".$username."' AND password='".$passwordHash."' AND enabled ='true' AND isAdmin='true'");
				if ($query->num_rows() > 0)
				{
					$row = $query->row();
					
					//IF LOGIN USERNAME AND PASSWORD EXSISTS CREATE SESSION
				   $sessionData = array(
                   			'logged'  => TRUE,
                   			'username'  => $row->username,
                   			'memberId'     => $row->fk_member_id,
                   			'accessLevel' => $row->accessLevel,
                   			'accessStatus' => 'admin'
               		);
					$this->session->set_userdata($sessionData);
				}
		}
	}
		
		public function getAllMembers()
		{
			$query = $this->db->query("SELECT m.member_id, m.firstName, m.lastName, m.country, m.email, m.date, a.enabled  FROM tbl_members m, tbl_accounts a WHERE m.member_id = a.fk_member_id ORDER BY m.firstName ASC");
			if($query->num_rows() > 0)
			{
				return $query->result();		
			}
			return null;
		}
		
		public function getActiveMembers()
		{
			$query = $this->db->query("SELECT m.member_id, m.firstName, m.lastName, m.country, m.email, m.date, a.enabled  FROM tbl_members m, tbl_accounts a WHERE m.member_id = a.fk_member_id AND a.enabled='true' ORDER BY m.firstName ASC");
			if($query->num_rows() > 0)
			{
				return $query->result();		
			}
			return null;
		}
		
		public function getDisabledMembers()
		{
			$query = $this->db->query("SELECT m.member_id, m.firstName, m.lastName, m.country, m.email, m.date, a.enabled  FROM tbl_members m, tbl_accounts a WHERE m.member_id = a.fk_member_id AND a.enabled='false' ORDER BY m.firstName ASC");
			if($query->num_rows() > 0)
			{
				return $query->result();		
			}
			return null;
		}
		
		public function getMemberLevel($username, $password)
		{
			if($username && $password)
			{
				$passwordHash = md5($password);
				
				$query = $this->db->query("SELECT accessLevel FROM tbl_accounts WHERE username='".$username."' AND password='".$passwordHash."'");
				if($query->num_rows() > 0)
				{
					$row = $query->row();
					
					if($row->accessLevel > 0)
					{
						return $row->accessLevel;
					}
					else 
					{
						return 0;	
					}
					
				}
				else 
				{
					return 0;	
				}
			}
			else 
			{
				return 0;	
			}
		}
		
		public function isMemberEnabled($member_id)
		{
			$query = $this->db->query("SELECT enabled FROM tbl_accounts WHERE fk_member_id=" . $member_id);
			if($query->num_rows() > 0)
			{
				$row = $query->row();
				
				return $row->enabled;		
			}
			return null;		
		}
		
		public function disableMember($member_id)
		{
			$data = array(
               'enabled' => 'false'               
            );
			
			$this->db->where('fk_member_id', $member_id);
			$this->db->update('tbl_accounts', $data); 
		}
		
		public function enableMember($member_id)
		{
			$data = array(
               'enabled' => 'true'               
            );
			
			$this->db->where('fk_member_id', $member_id);
			$this->db->update('tbl_accounts', $data); 
		}
		
		public function removeMember($member_id)
		{
			$this->db->delete('tbl_accounts', array('fk_member_id' => $member_id)); 
			$this->db->delete('tbl_sponsors', array('fk_member_id' => $member_id)); 
			$this->db->delete('tbl_members', array('member_id' => $member_id)); 
		}
}
