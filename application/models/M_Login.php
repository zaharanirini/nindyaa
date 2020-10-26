<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_Login extends CI_Model
{
	public function cek_login($email, $password)
	{
		$where = "email='$email' and password='$password'";

		$this->db->from('m_user');
		$this->db->where($where);
		
		return $this->db->get()->result();
	}
	
}
?>