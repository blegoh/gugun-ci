<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0); //mematikan error
class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Programmer : 
	 * Website : 
	 */
	public function index(){
		/*if($this->session->userdata('nm_login')){*/
			//$data=$this->session->userdata('nm_login');
			//$data['nm_login']	= $data;
			//$d['bread'] 		= 'Home';
			
			$this->load->view('portal_sino');
		/*}else{
			$this->load->view('view');
		}*/
		
	}

	public function ci_admin(){
		$this->load->view('login_admin');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */