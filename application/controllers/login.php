<?php

class Login extends ci_controller{


	public function index(){
		$this->load->view('view_login');
	}

	public function proses_login(){
		if(isset($_POST['login'])){
			$nama_login     = $this->input->post('nama_login');
			$password_login = $this->input->post('password_login');
			$sql = "SELECT * FROM tbl_walikelas where nama_login = '$nama_login' and password_login = '$password_login'";
			$rs=$this->db->query($sql);

			if($rs->num_rows() > 0){
				$myuser = $rs->row();
				$this->session->set_userdata('nama_login',$myuser->nama_login);
				$jurusan= $this->input->post('jurusan');
				if($jurusan == 'tkr'){
					redirect('from_walikelas_tkr','refresh');
				}
				elseif($jurusan == 'tl'){
					redirect('from_walikelas_tl','refresh');
				}else{
					?>
				<script type="text/javascript">
					alert("Jurusan Belum di Pilih");window.location='<?php base_url(); ?>login';
				</script>
				<?php
				}

			}else{
				?>
				<script type="text/javascript">
					alert("Gagal Login !!!");window.location='<?php base_url(); ?>login';
				</script>
				<?php


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
		redirect('login','refresh');
	}

}