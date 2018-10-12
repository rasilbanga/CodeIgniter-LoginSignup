<?php

class LoginSignup_model extends CI_Model
{

	//Login
	function can_login($data)
	{

		$query = $this->db->query("SELECT First_Name FROM employee WHERE Email='$data[0]' AND Password = '$data[1]'");
		$row = $query->row_array();

		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	 

	 //Signup
	 function save_record($data)
	{
		$this->db->insert('employee' , $data);

    }
}

?>    