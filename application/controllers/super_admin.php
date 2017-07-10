<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0); //mematikan error
class Super_admin extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('nm_admin')) {
			// $this->load->view('login_admin');
			// exit;
			redirect('ci_admin','refresh');
		}
	}


	/**
	 * Index Page for this controller.
	 *
	 * Programmer : Marzuki
	 * Website : www.dewakode.com
	 */
	public function index(){
		// if($this->session->userdata('nm_admin')){
			$data['nm_admin']=$this->session->userdata('nm_admin');
			//$data['nm_login']	= $data;
			//$d['bread'] 		= 'Home';
			$data['content'] 		= 'welcome_superadmin';
			$this->load->view('view_super_admin',$data);
		// }else{
		// 	$this->load->view('login_admin');
		// }
		
	}

	public function input_absen(){
		$data['siswa'] = $this->db->get('tbl_siswa');
		$data['content'] = 'v_input_absen';
		$this->load->view('view_super_admin',$data);
	}

	public function proses_input_absen(){
		$data = array(
			'finger' => "",
			'waktu' => $this->input->post('tgl'),
			'nik' => $this->input->post('nik'),
			'ket' => $this->input->post('ket'),
			);

		$sukses = $this->db->insert('absensi', $data);
		if($sukses){
			redirect('super_admin/table_absen','refresh');
		}else{
			echo "gagal bos";
		}
	}

	public function table_absen(){
		$this->db->select('*');
		$this->db->from('absensi');
		$this->db->join('tbl_siswa', 'absensi.nik = tbl_siswa.nik');
		$query = $this->db->get();
		$data['data'] 	 = $query;
		$data['content'] = 'v_table_absen';
		$this->load->view('view_super_admin',$data);
	}

	public function table_nilai(){
		$data['data'] 	 = $this->db->get('tbl_matapelajaran');
		$data['content'] = 'v_table_nilai';
		$this->load->view('view_super_admin',$data);

	}
	public function edit_nilai($id_pel){
		$data['id_pel']   = $id_pel;
		$data['data']     = $this->db->get_where('tbl_matapelajaran',$data);
		$data['content']  =  'v_editnilai';
		$this->load->view('view_super_admin',$data);
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
		$rangkaian_listrik   = $this->input->post('rangkaian_listrik');
		$pengukuran_listrik  = $this->input->post('pengukuran_listrik');
		$gambar_teknik_listrik = $this->input->post('gambar_teknik_listrik');
		$k3  				 = $this->input->post('k3');
		$dasar_elektronika   = $this->input->post('dasar_elektronika');
		$ilbs  				 = $this->input->post('ilbs');
		$rt_listrik 		 = $this->input->post('rt_listrik');
		$ilbb  				 = $this->input->post('ilbb');
		$pml  				 = $this->input->post('pml');
		$spe  				 = $this->input->post('spe');
		$ppdt  				 = $this->input->post('ppdt');
		$spem  				 = $this->input->post('spem');
		$spil  				 = $this->input->post('spil');
		$ppls  				 = $this->input->post('ppls');

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
				'rangkaian_listrik' => $rangkaian_listrik,
				'pengukuran_listrik' => $pengukuran_listrik,
				'gambar_teknik_listrik' => $gambar_teknik_listrik,
				'k3' => $k3,
				'rt_listrik' => $rt_listrik,
				'dasar_elektronika' => $dasar_elektronika,
				'ilbs' => $ilbs,
				'ilbb' => $ilbb,
				'pml' => $pml,
				'spe' => $spe,
				'ppdt' => $ppdt,
				'spem' => $spem,
				'spil' => $spil,
				'ppls' => $ppls
				);
			$this->db->where('id_pel', $id_pel);
			$sukses=$this->db->update('tbl_matapelajaran', $data);
			if($sukses){
				redirect('super_admin/table_nilai');
			}else{
				echo "gagal bos";
			}

		}


	}	

	public function ci_admin(){
		$this->load->view('login_admin');
	}
	public function about(){
		$data['content'] = 'about';
		$this->load->view('view_super_admin',$data);
	}
	public function input_siswa(){
		$data['content'] = 'v_inputsiswa';
		$this->load->view('view_super_admin',$data);
	}
	public function input_guru(){
		$data['content'] = 'v_inputguru';
		$this->load->view('view_super_admin',$data);
	}
	public function input_walikelas(){
		$data['content'] = 'v_input_walikelas';
		$this->load->view('view_super_admin',$data);
	}
	public function input_jurusan(){
		$data['content'] = 'v_input_jurusan';
		$this->load->view('view_super_admin',$data);
	}


	public function proses_inputguru(){

		$nip = $this->input->post('nip');
		$ttl = $this->input->post('tempat_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$nama_guru = $this->input->post('nama_guru');
		$bidang_study = $this->input->post('bidang_study');
		$status_pegawai = $this->input->post('status_pegawai');
		
		$data = array('nip' => $nip,
			'ttl' => $ttl,
			'jenis_kelamin' => $jenis_kelamin,
			'nama_guru' => $nama_guru,
			'bidang_study' => $bidang_study,
			'status_pegawai' => $status_pegawai,
			);
		$sukses=$this->db->insert('tbl_guru',$data);
		if($sukses){
			redirect('super_admin/table_guru','refresh');
		}else{
			echo "gagal bos";
		}
	}

	public function proses_input_jurusan(){
		$data = array('id_jurusan' => $this->input->post('id_jurusan') ,
			'kode_jurusan' => $this->input->post('kode_jurusan'),
			'nama_jurusan' => $this->input->post('nama_jurusan')
			);

		$sukses = $this->db->insert('tbl_jurusan', $data);
		if($sukses){
			redirect('super_admin/table_jurusan','refresh');
		}else{
			echo "gagal bos";
		}

	}

	public function proses_input_walikelas(){
		$kode_walikelas = $this->input->post('kode_walikelas');
		$nip = $this->input->post('nip');
		$nama_walikelas = $this->input->post('nama_walikelas');
		$kode_jurusan = $this->input->post('kode_jurusan');
		$nama_login = $this->input->post('nama_login');
		$password_login = $this->input->post('password_login');

		$data = array('kode_walikelas' => $kode_walikelas,
			'nip' => $nip,
			'nama_walikelas' => $nama_walikelas,
			'kode_jurusan' => $kode_jurusan,
			'nama_login' => $nama_login,
			'password_login' => $password_login
			);
		$sukses=$this->db->insert('tbl_walikelas',$data);
		if($sukses){
			redirect('super_admin/table_walikelas','refresh');
		}else{
			echo "gagal bos";
		}

	}
	public function proses_edit_walikelas(){
		$kode_walikelas = $this->input->post('kode_walikelas');
		$nip = $this->input->post('nip');
		$nama_walikelas = $this->input->post('nama_walikelas');
		$kode_jurusan = $this->input->post('kode_jurusan');
		$nama_login = $this->input->post('nama_login');
		$password_login = $this->input->post('password_login');

		$data = array(
			'nip' => $nip,
			'nama_walikelas' => $nama_walikelas,
			'kode_jurusan' => $kode_jurusan,
			'nama_login' => $nama_login,
			'password_login' => $password_login
			);
		$this->db->where('kode_walikelas', $kode_walikelas);
		$sukses=$this->db->update('tbl_walikelas', $data);
		if($sukses){
			redirect('super_admin/table_walikelas','refresh');
		}else{
			echo "gagal bos";
		}

	}

	public function proses_editguru(){

		$nip = $this->input->post('nip');
		$ttl = $this->input->post('tempat_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$nama_guru = $this->input->post('nama_guru');
		$bidang_study = $this->input->post('bidang_study');
		$status_pegawai = $this->input->post('status_pegawai');
		
		$data = array(
			'ttl' => $ttl,
			'jenis_kelamin' => $jenis_kelamin,
			'nama_guru' => $nama_guru,
			'bidang_study' => $bidang_study,
			'status_pegawai' => $status_pegawai,
			);
		$this->db->where('nip', $nip);
		$sukses=$this->db->update('tbl_guru', $data);
		if($sukses){
			redirect('super_admin/table_guru','refresh');
		}else{
			echo "gagal bos";
		}

	}


	public function proses_inputsiswa(){

		$nik = $this->input->post('nik');
		$ttl = $this->input->post('tempat_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$agama = $this->input->post('agama');
		$nama_siswa = $this->input->post('nama_siswa');
		$kode_walikelas = $this->input->post('kode_walikelas');
		$smester = $this->input->post('smester');
		$kelas = $this->input->post('kelas');
		$kode_jurusan = $this->input->post('kode_jurusan');
		$tahun_angkatan = $this->input->post('tahun_angkatan');

		$data = array('nik' => $nik,
			'ttl' => $ttl,
			'jenis_kelamin' => $jenis_kelamin,
			'agama' => $agama,
			'nama_siswa' => $nama_siswa,
			'kode_walikelas' => $kode_walikelas,
			'smester' => $smester,
			'kelas' => $kelas,
			'kode_jurusan' => $kode_jurusan,
			'tahun_angkatan' => $tahun_angkatan,
			);
		$sukses=$this->db->insert('tbl_siswa',$data);
		if($sukses){
			redirect('super_admin/table_siswa','refresh');
		}else{
			echo "gagal bos";
		}



	}


	public function proses_editsiswa(){

		$nik = $this->input->post('nik');
		$ttl = $this->input->post('tempat_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$agama = $this->input->post('agama');
		$nama_siswa = $this->input->post('nama_siswa');
		$kode_walikelas = $this->input->post('kode_walikelas');
		$smester = $this->input->post('smester');
		$kelas = $this->input->post('kelas');
		$kode_jurusan = $this->input->post('kode_jurusan');
		$tahun_angkatan = $this->input->post('tahun_angkatan');

		$data = array(
			'ttl' => $ttl,
			'jenis_kelamin' => $jenis_kelamin,
			'agama' => $agama,
			'nama_siswa' => $nama_siswa,
			'kode_walikelas' => $kode_walikelas,
			'smester' => $smester,
			'kelas' => $kelas,
			'kode_jurusan' => $kode_jurusan,
			'tahun_angkatan' => $tahun_angkatan,
			);
		
		$this->db->where('nik', $nik);
		$sukses=$this->db->update('tbl_siswa', $data);
		if($sukses){
			redirect('super_admin/table_siswa','refresh');
		}else{
			echo "gagal bos";
		}

	}

	public function hapus_siswa($nik){
		$d['nik']	= $nik;
		$sql	= $this->db->delete('tbl_siswa',array('nik'=>$nik));
		if($sql){
			?>	
			<script type="text/javascript">
				alert("sukses di hapus data <?php echo $nik ?>");window.location="<?php echo base_url(); ?>index.php/super_admin/table_siswa";
			</script>
			<?php	
		}else{
			?>	
			<script type="text/javascript">
				alert("GAGAL di hapus data <?php echo $nik ?>");window.location="<?php echo base_url(); ?>index.php/super_admin/table_siswa";
			</script>
			<?php	
		}
		
	}

	public function hapus_guru($nip){
		$d['nip']	= $nip;
		$sql	= $this->db->delete('tbl_guru',array('nip'=>$nip));
		if($sql){
			?>	
			<script type="text/javascript">
				alert("sukses di hapus data <?php echo $nip ?>");window.location="<?php echo base_url(); ?>index.php/super_admin/table_guru";
			</script>
			<?php	
		}else{
			?>	
			<script type="text/javascript">
				alert("GAGAL di hapus data <?php echo $nip ?>");window.location="<?php echo base_url(); ?>index.php/super_admin/table_guru";
			</script>
			<?php	
		}
	}
	
	public function hapus_nilai($id_pel){
		$d['id_pel']	= $id_pel;
		$sql	= $this->db->delete('tbl_matapelajaran',array('id_pel'=>$id_pel));
		if($sql){
			?>	
			<script type="text/javascript">
				alert("sukses di hapus data <?php echo $id_pel ?>");window.location="<?php echo base_url(); ?>index.php/super_admin/table_nilai";
			</script>
			<?php	
		}else{
			?>	
			<script type="text/javascript">
				alert("GAGAL di hapus data <?php echo $id_pel ?>");window.location="<?php echo base_url(); ?>index.php/super_admin/table_nilai";
			</script>
			<?php	
		}
		
	}

	public function hapus_walikelas($nip){
		$d['nip']	= $nip;
		$sql	= $this->db->delete('tbl_walikelas',array('nip'=>$nip));
		if($sql){
			?>	
			<script type="text/javascript">
				alert("sukses di hapus data <?php echo $nip ?>");window.location="<?php echo base_url(); ?>index.php/super_admin/table_walikelas";
			</script>
			<?php	
		}else{
			?>	
			<script type="text/javascript">
				alert("GAGAL di hapus data <?php echo $nip ?>");window.location="<?php echo base_url(); ?>index.php/super_admin/table_walikelas";
			</script>
			<?php	
		}
		
	}
	public function table_siswa(){
		$data['content'] = 'v_tabelsiswa';
		$data['data'] = $this->db->get('tbl_siswa');
		$this->load->view('view_super_admin',$data);
	}
	public function table_guru(){
		$data['content'] = 'v_tabelguru';
		$data['data'] = $this->db->get('tbl_guru');
		$this->load->view('view_super_admin',$data);
	}
	public function table_jurusan(){
		$data['content'] = 'v_table_jurusan';
		$data['data'] = $this->db->get('tbl_jurusan');
		$this->load->view('view_super_admin',$data);
	}

	public function table_walikelas(){
		$data['content'] = 'v_tabelwalikelas';
		$data['data'] = $this->db->get('tbl_walikelas');
		$this->load->view('view_super_admin',$data);
	}
	public function edit_siswa($nik){
		$d['nik'] = $nik;
		$d['data'] = $this->db->get_where('tbl_siswa',$d);
		$d['content'] = 'v_editsiswa';
		$this->load->view('view_super_admin',$d);
	}

	public function edit_guru($nip){
		$d['nip'] = $nip;
		$d['data'] = $this->db->get_where('tbl_guru',$d);
		$d['content'] = 'v_editguru';
		$this->load->view('view_super_admin',$d);
	}
	public function edit_walikelas($nip){
		$d['nip'] = $nip;
		$d['data'] = $this->db->get_where('tbl_walikelas',$d);
		$d['content'] = 'v_editwalikelas';
		$this->load->view('view_super_admin',$d);
	}


	public function laporan_siswa(){
		$data['content']   = 'laporan_siswa';
		$this->load->view('view_super_admin',$data);
	}

	public function laporan_daftar_siswa(){
		$data['content']   = 'laporandaftar_siswa';
		$this->load->view('view_super_admin',$data);
	}

	public function cek_nilaisiswa(){
		$kode_jurusan = $this->input->post('kode_jurusan');
		$smester      = $this->input->post('smester');
		$kelas        = $this->input->post('kelas');

		$sql = "SELECT * FROM tbl_matapelajaran where kode_jurusan='$kode_jurusan' and smester='$smester' and kelas ='$kelas'";
		$data['data']=$this->db->query($sql);
		$data['kode_jurusan']  = $kode_jurusan;
		$this->load->view('v_laporansiswa',$data);

	}

	public function cek_datasiswa(){
		$kode_jurusan        = $this->input->post('kode_jurusan');
		$tahun_angkatan      = $this->input->post('tahun_angkatan');

		$sql = "SELECT * FROM tbl_siswa where kode_jurusan='$kode_jurusan' and tahun_angkatan='$tahun_angkatan'";
		$data['data']=$this->db->query($sql);
		$data['kode_jurusan']  = $kode_jurusan;
		$this->load->view('v_laporandatasiswa',$data);

	}

	public function laporan_daftar_guru(){
		$data['data'] = $this->db->get('tbl_guru');
		$this->load->view('laporan_guru',$data);
	}

	public function seting_admin(){
		$data['data']    = $this->db->get('tbl_admin');
		$data['content'] = 'v_setingadmin';
		$this->load->view('view_super_admin',$data);
	}
	public function proses_seting_admin(){
		$id_admin = $this->input->post('id_admin');
		$data = array('nama_admin' => $this->input->post('nama_admin') ,
			'nm_admin' => $this->input->post('nm_admin'),
			'ps_admin' => $this->input->post('ps_admin')
			);

		$this->db->where('id_admin', $id_admin);
		$sukses=$this->db->update('tbl_admin', $data);
		if($sukses){
			redirect('super_admin');
		}else{
			echo "gagal bos";
		}
	}

	public function pendaftaran(){
		$data['data'] 	 = $this->db->get('pendaftaran');
		$data['content'] = 'v_table_pendaftaran';
		$this->load->view('view_super_admin',$data);
	}
	public function pilih_siswa($nisn){
		$data['nisn'] = $nisn;
		$data['data'] = $this->db->get_where('pendaftaran',$data);
		$data['content'] = 'v_pilihsiswa';
		$this->load->view('view_super_admin',$data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */