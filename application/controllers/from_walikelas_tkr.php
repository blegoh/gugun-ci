<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class From_walikelas_tkr extends CI_Controller {

	public function login(){
		$this->load->view('view_login');
	}

	public function index()
		{	
			if($this->session->userdata('nama_login')){
				$data['nama_wali']=$this->session->userdata('nama_login');

				$data['data']		 =	$this->db->get('tbl_siswa');
				//$data['data_wali']		 =	$this->db->get_where('tbl_walikelas',$nama_wali);
				$data['content'] 	 = 	'welcome_tkr';
				$this->load->view('view_admin',$data);
				}else{
					$this->login();
				}
		}
	public function profile(){
		if($this->session->userdata('nama_login')){
				$data['nama_wali']=$this->session->userdata('nama_login');
				
				$data['content'] 	 = 	'profile_wali';
				$this->load->view('view_admin',$data);
				}else{
					$this->login();
				}
	}	
	public function daftar_siswa()
		{	
			if($this->session->userdata('nama_login')){
				$data['nama_wali']=$this->session->userdata('nama_login');

				$data['data']		 =	$this->db->get('tbl_siswa');
				//$data['data_wali']		 =	$this->db->get_where('tbl_walikelas',$nama_wali);
				$data['content'] 	 = 	'view_siswatkr';
				$this->load->view('view_admin',$data);
				}else{
					$this->login();
				}
		}


	//menampilakn form input nilai siswa
	public function input_nilaitkr($nik)
	{	
		if($this->session->userdata('nama_login')){
			$data['nama_wali']=$this->session->userdata('nama_login');
			$data['nik']		 =  $nik;
			$data['data_siswa'] ="SELECT * FROM tbl_siswa where nik='$nik'";
			$data['content'] 	 = 	'view_input_nilaitkr';
			$this->load->view('view_admin',$data);
			}else{
				$this->login();
			}
	}

	public function daftar_nilai(){
		if($this->session->userdata('nama_login')){
			$data['nama_wali']=$this->session->userdata('nama_login');
			$data['data']		 =	$this->db->get('tbl_siswa');
			$data['content'] 	 = 	'v_nilai_tkr';
			$this->load->view('view_admin',$data);
			}else{
				$this->login();
			}
	}	

	public function detail_nilai($nik){
		if($this->session->userdata('nama_login')){
			$data['no_induk']		 =	$nik;
			$data['data']		 =  $this->db->get_where('tbl_matapelajaran',$data);
			$data['nama_wali']	 =  $this->session->userdata('nama_login');
			$data['content'] 	 = 	'v_detailnilai_tkr';
			$this->load->view('view_admin',$data);
			}else{
				$this->login();
			}
	}

	public function edit_nilai($id_pel){

			if($this->session->userdata('nama_login')){
				$data['id_pel'] 	= $id_pel;
				$data['data']		= $this->db->get_where('tbl_matapelajaran',$data);
				$data['nama_wali']	 =  $this->session->userdata('nama_login');
				$data['content'] 	 = 	'v_editnilai_tkr';
				$this->load->view('view_admin',$data);
				}else{
					$this->login();
				}

			}

		public function hapus_nilai($id_pel){
		$d['id_pel']	= $id_pel;
		$sql	= $this->db->delete('tbl_matapelajaran',array('id_pel'=>$id_pel));
		if($sql){
			?>	
			<script type="text/javascript">
			alert("sukses di hapus data <?php echo $id_pel ?>");window.location="<?php echo base_url(); ?>index.php/from_walikelas_tl/daftar_nilai";
			</script>
			<?php	
		}else{
			?>	
			<script type="text/javascript">
			alert("GAGAL di hapus data <?php echo $id_pel ?>");window.location="<?php echo base_url(); ?>index.php//From_walikelas_tl/daftar_nilai";
			</script>
			<?php	
		}
		
	}	
	

}


