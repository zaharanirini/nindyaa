<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('date.timezone', 'Asia/Jakarta');

class Login extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->library('session');
		
		$islogin		= $this->session->userdata('islogin');
		
		if($this->session->userdata('islogin')=='uye1'){
			redirect('dashboard');
		}else{
			$this->load->helper(array('form', 'html'));
			$this->load->model('M_Login');
		}
	}

	public function index()
	{
		$this->load->view('login');
	}
	
	public function signup()
	{
		$email		= htmlentities(addslashes($this->input->post('email')));
		$password	= htmlentities(addslashes(md5($this->input->post('password'))));
		
		if($email and $password){
			$dt_user = $this->M_Login->cek_login($email, $password);
			
			if($dt_user and $dt_user[0]->id!='0'){
				$this->session->set_userdata('email',$dt_user[0]->email);
				$this->session->set_userdata('id',$dt_user[0]->id);
				$this->session->set_userdata('islogin','uye1');
				
				redirect("dashboard");
			}else{
				echo "<script type='text/javascript'>alert('Username / Password Salah!!!!')</script>";
				echo "<script type='text/javascript'>window.location='".base_url()."login';</script>";
				exit();
			}
		}else{
			redirect('login?err=nopass');
		}
	}
}
