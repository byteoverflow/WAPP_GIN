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
		
		public function createUserAndAccount($firstName, $lastName, $birthday, $gender, $country, $city, $address, $phone, $email, $password, $sponsorCode, $sponsorEmail)
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
			$accountData = array(
						   'fk_member_id' =>  $memberId,
						   'username' => $email ,
						   'password' => md5($password) ,
						   'accessLevel' => '1' ,
						   'registrationDate' => gmdate('Y-m-d') ,
						   'expireDate' => gmdate('Y-m-d', mktime(0,0,0,gmdate('m'),gmdate('d'),gmdate('Y')+1)) ,
						   'enabled' => 'true'
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
		
		
		public function validateLogin($username, $password)
		{
			if($username && $password)
			{
				$passwordHash = md5($password);
				
				$query = $this->db->query("SELECT * FROM tbl_accounts WHERE username='".$username."' AND password='".$passwordHash."'");
				
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
		
}
