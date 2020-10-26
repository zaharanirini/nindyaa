<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('date.timezone', 'Asia/Jakarta');

class Dashboard extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		if($this->session->userdata('islogin')=='uye1'){
			$this->load->model('M_Dashboard');
		}else{
			redirect('login');
		}
	}
	
	public function index()
	{
		$list_data = $this->M_Dashboard->getlist_data();
		

		$data_hal = array (
			"container" => "content/v_home",
			"list_data" => $list_data
			
		);

		$this->load->view('template',$data_hal);
	}
	
	public function logout()
	{
		unset($_SESSION["email"]);
		unset($_SESSION["id"]);
		unset($_SESSION["islogin"]);
		session_unset();
		session_destroy();
		echo"<script type='text/javascript'>window.location='".base_url()."login';</script>";
	}

}
	
?>