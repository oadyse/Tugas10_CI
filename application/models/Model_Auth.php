<?php
class Login_mod extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function validate($email, $password)
	{
		$this->db->where('email', $email);
		$this->db->where('pass', $password);
		$query = $this->db->get('user');
		if ($query->num_rows == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}
