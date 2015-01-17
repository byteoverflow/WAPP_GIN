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
