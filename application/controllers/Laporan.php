<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('date.timezone', 'Asia/Jakarta');

class Laporan extends CI_Controller {
	
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
			"container" => "content/v_laporan_list",
			"list_data" => $list_data
			
		);

		$this->load->view('template',$data_hal);
	}
	
	public function view_laporan($no=false)
	{
		$no			= addslashes($no);
		$dt_view	= $this->M_Dashboard->search_report($no);
		
		$data_hal = array (
			"container" => "content/v_laporan_view",
			"dt_view" => $dt_view
		);
		
		$this->load->view('template',$data_hal);
	}
	
}
	
?>