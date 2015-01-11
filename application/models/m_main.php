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
}
