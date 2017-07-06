<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0); //mematikan error
class Ci_admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Programmer : 
	 * Website : 
	 */
	public function index(){
		if($this->session->userdata('nm_admin')){
			//$data=$this->session->userdata('nm_login');
			//$data['nm_login']	= $data;
			//$d['bread'] 		= 'Home';
			$data['content'] 		= 'admin';
			$this->load->view('view_super_admin',$data);
		}else{
			$this->load->view('login_admin');
		}
		
	}
	public function ci_login(){
		$this->load->view('login_admin');
	}
	public function proses_login(){



		if(isset($_POST['login'])){
			$level = $this->input->post('level');

			if($level == 'admin'){	
						
						$nm_admin     = $this->input->post('nm_admin');
						$ps_admin = $this->input->post('ps_admin');
						$sql = "SELECT * FROM tbl_admin where nm_admin = '$nm_admin' and ps_admin = '$ps_admin'";
						$rs=$this->db->query($sql);

						if($rs->num_rows() > 0){
							$myuser = $rs->row();
							$this->session->set_userdata('nm_admin',$myuser->nm_admin);
								redirect('super_admin','refresh');
							
						}else{
							?>
							<script type="text/javascript">
								alert("Gagal Login !!!");window.location='<?php base_url(); ?>ci_login';
							</script>
							<?php

						}
			}elseif($level == 'kepsek'){
						$nm_admin     = $this->input->post('nm_admin');
						$ps_admin = $this->input->post('ps_admin');
						$sql = "SELECT * FROM tbl_kepsek where nm_admin = '$nm_admin' and ps_admin = '$ps_admin'";
						$rs=$this->db->query($sql);

						if($rs->num_rows() > 0){
							$myuser = $rs->row();
							$this->session->set_userdata('nm_admin',$myuser->nm_admin);
								redirect('kepsek','refresh');
							
						}else{
							?>
							<script type="text/javascript">
								alert("Gagal Login !!!");window.location='<?php base_url(); ?>ci_login';
							</script>
							<?php

						}
			}else{
				echo "LEVEL DI PILIH DULU";
			}
		}
	}

	public function redirect(){
		$this->load->view('v_redirect');
	}
	public function redirect_logout(){
		$this->load->view('v_redirect_logout');	
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('ci_admin');	

		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */