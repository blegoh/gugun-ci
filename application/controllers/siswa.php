<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function login(){
		$this->load->view('view_login');
	}

	public function index(){
		if($this->session->userdata('nama_login')){
				
				redirect('siswa/log_siswa');
				}else{
					$this->login();
				}
	}

	public function cek_nilai(){
		if(isset($_POST['cek'])){
		$no_induk = $this->input->post('no_induk');
		$smester = $this->input->post('smester');
		$kelas = $this->input->post('kelas');



		$sql = "SELECT * FROM tbl_matapelajaran where no_induk='$no_induk' and smester='$smester' and kelas='$kelas' ";
		$data['data']=$this->db->query($sql);

		if($data['data']->num_rows() > 0){
		$this->load->view('view_nilai',$data);
		}else{
			$eror['no_induk']=$no_induk;
			$eror['smester']=$smester;
			$eror['kelas']=$kelas;
			//$eror['eror'] = array('a' =>$no_induk ,'b' => $smester, 'c' => $kelas );

			$this->load->view('eror_cek',$eror);

			
		}

	}else{
		echo "jangan gitu dong !";
	}

	}

	public function input_nilai($nik)
		{	
			if($this->session->userdata('nama_login')){
				$data['nama_wali']=$this->session->userdata('nama_login');
				$data['nik']		 =  $nik;
				$data['content'] 	 = 	'view_input_nilai';
				$this->load->view('view_admin',$data);
				}else{
					$this->login();
				}
		}

	public function save_nilai(){

		$nik				 = $this->input->post('nik');
		$kelas				 = $this->input->post('kelas');
		$smester			 = $this->input->post('smester');
		$kode_jurusan		 = $this->input->post('kode_jurusan');
		$agama				 = $this->input->post('agama');
		$kewarganegaraan 	 = $this->input->post('kewarganegaraan');
		$b_indonesia		 = $this->input->post('b_indonesia');
		$penjas				 = $this->input->post('penjas');
		$seni_budaya		 = $this->input->post('seni_budaya');
		$b_inggris  		 = $this->input->post('b_inggris');
		$mtk 		 		 = $this->input->post('mtk');
		$ipa  				 = $this->input->post('ipa');
		$ips  				 = $this->input->post('ips');
		$fisika  			 = $this->input->post('fisika');
		$kimia  			 = $this->input->post('kimia');
		$KKPI  				 = $this->input->post('KKPI');
		$kewirausahaan		 = $this->input->post('kewirausahaan');

		if(isset($_POST['save'])){
			$data = array('no_induk' => $nik,
						  'kelas' => $kelas,	
						  'smester' => $smester,	
						  'kode_jurusan' => $kode_jurusan,	
						  'agama' => $agama ,
						  'kewarganegaraan' => $kewarganegaraan,
						  'b_indonesia' => $b_indonesia,
						  'penjas' => $penjas,
						  'seni_budaya' => $seni_budaya,
						  'b_inggris' => $b_inggris,
						  'mtk' => $mtk,
						  'ipa' => $ipa,
						  'ips' => $ips,
						  'fisika' => $fisika,
						  'kimia' =>$kimia,
						  'KKPI' =>$KKPI,
						  'kewirausahaan' => $kewirausahaan,
			 );

			//echo var_dump($data);
			$sukses=$this->db->insert('tbl_matapelajaran',$data);
			$sql = "UPDATE tbl_siswa set konfirmasi ='1' where nik='$nik'";
			$this->db->query($sql);
			if($sukses){
				redirect('from_walikelas_tl/daftar_nilai');
			}else{
				echo "gagal bos";
			}
		}


	}	
	public function prosesedit_nilai(){
		$id_pel				 = $this->input->post('id_pel');
		$kelas				 = $this->input->post('kelas');
		$semester			 = $this->input->post('semester');
		$agama				 = $this->input->post('agama');
		$kewarganegaraan 	 = $this->input->post('kewarganegaraan');
		$b_indonesia		 = $this->input->post('b_indonesia');
		$penjas				 = $this->input->post('penjas');
		$seni_budaya		 = $this->input->post('seni_budaya');
		$b_inggris  		 = $this->input->post('b_inggris');
		$mtk 		 		 = $this->input->post('mtk');
		$ipa  				 = $this->input->post('ipa');
		$ips  				 = $this->input->post('ips');
		$fisika  			 = $this->input->post('fisika');
		$kimia  			 = $this->input->post('kimia');
		$KKPI  				 = $this->input->post('KKPI');
		$kewirausahaan		 = $this->input->post('kewirausahaan');

		if(isset($_POST['edit'])){
			$data = array(
						  'kelas' => $kelas,	
						  'smester' => $semester,	
						  'agama' => $agama ,
						  'agama' => $agama ,
						  'kewarganegaraan' => $kewarganegaraan,
						  'b_indonesia' => $b_indonesia,
						  'penjas' => $penjas,
						  'seni_budaya' => $seni_budaya,
						  'b_inggris' => $b_inggris,
						  'mtk' => $mtk,
						  'ipa' => $ipa,
						  'ips' => $ips,
						  'fisika' => $fisika,
						  'kimia' =>$kimia,
						  'KKPI' =>$KKPI,
						  'kewirausahaan' => $kewirausahaan,

			 );

			$this->db->where('id_pel', $id_pel);
			$sukses=$this->db->update('tbl_matapelajaran', $data);
			if($sukses){
				redirect('from_walikelas_tkr/daftar_nilai');
			}else{
				echo "gagal bos";
			}
			//redirect('from_walikelas/daftar_nilai');
			
		}
	}

	public function save_nilaitl(){

		$nik				 = $this->input->post('nik');
		$kelas				 = $this->input->post('kelas');
		$smester			 = $this->input->post('smester');
		$kode_jurusan		 = $this->input->post('kode_jurusan');
		$agama				 = $this->input->post('agama');
		$kewarganegaraan 	 = $this->input->post('kewarganegaraan');
		$b_indonesia		 = $this->input->post('b_indonesia');
		$penjas				 = $this->input->post('penjas');
		$seni_budaya		 = $this->input->post('seni_budaya');
		$b_inggris  		 = $this->input->post('b_inggris');
		$mtk 		 		 = $this->input->post('mtk');
		$ipa  				 = $this->input->post('ipa');
		$ips  				 = $this->input->post('ips');
		$fisika  			 = $this->input->post('fisika');
		$kimia  			 = $this->input->post('kimia');
		$KKPI  				 = $this->input->post('KKPI');
		$kewirausahaan		 = $this->input->post('kewirausahaan');

		if(isset($_POST['save'])){
			$data = array('no_induk' => $nik,
						  'kelas' => $kelas,	
						  'smester' => $smester,	
						  'kode_jurusan' => $kode_jurusan,	
						  'agama' => $agama ,
						  'agama' => $agama ,
						  'kewarganegaraan' => $kewarganegaraan,
						  'b_indonesia' => $b_indonesia,
						  'penjas' => $penjas,
						  'seni_budaya' => $seni_budaya,
						  'b_inggris' => $b_inggris,
						  'mtk' => $mtk,
						  'ipa' => $ipa,
						  'ips' => $ips,
						  'fisika' => $fisika,
						  'kimia' =>$kimia,
						  'KKPI' =>$KKPI,
						  'kewirausahaan' => $kewirausahaan,

			 );

			//echo var_dump($data);
			$sukses=$this->db->insert('tbl_matapelajaran',$data);
			$sql = "UPDATE tbl_siswa set konfirmasi ='1' where nik='$nik'";
			$this->db->query($sql);
			if($sukses){
				redirect('from_walikelas_tl/daftar_nilai');
			}else{
				echo "gagal Bos";
			}
		}


	}	

	public function edit_nilaitl(){

		$id_pel				 = $this->input->post('id_pel');
		$kelas				 = $this->input->post('kelas');
		$semester			 = $this->input->post('semester');
		$agama				 = $this->input->post('agama');
		$kewarganegaraan 	 = $this->input->post('kewarganegaraan');
		$b_indonesia		 = $this->input->post('b_indonesia');
		$penjas				 = $this->input->post('penjas');
		$seni_budaya		 = $this->input->post('seni_budaya');
		$b_inggris  		 = $this->input->post('b_inggris');
		$mtk 		 		 = $this->input->post('mtk');
		$ipa  				 = $this->input->post('ipa');
		$ips  				 = $this->input->post('ips');
		$fisika  			 = $this->input->post('fisika');
		$kimia  			 = $this->input->post('kimia');
		$KKPI  				 = $this->input->post('KKPI');
		$kewirausahaan		 = $this->input->post('kewirausahaan');

		if(isset($_POST['edit'])){
			$data = array(
						  'kelas' => $kelas,	
						  'smester' => $semester,	
						  'agama' => $agama ,
						  'agama' => $agama ,
						  'kewarganegaraan' => $kewarganegaraan,
						  'b_indonesia' => $b_indonesia,
						  'penjas' => $penjas,
						  'seni_budaya' => $seni_budaya,
						  'b_inggris' => $b_inggris,
						  'mtk' => $mtk,
						  'ipa' => $ipa,
						  'ips' => $ips,
						  'fisika' => $fisika,
						  'kimia' =>$kimia,
						  'KKPI' =>$KKPI,
						  'kewirausahaan' => $kewirausahaan,
			 );
			$this->db->where('id_pel', $id_pel);
			$sukses=$this->db->update('tbl_matapelajaran', $data);
			if($sukses){
				redirect('from_walikelas_tl/daftar_nilai');
			}else{
				echo "gagal bos";
			}

		}


	}	

	public function log_siswa(){

		$this->load->view('v_logsiswa');
	}



}


