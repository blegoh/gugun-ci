
<ul class="sidebar-menu">
<?php 

  $nama_login = $this->session->userdata('nama_login');
  $sql = "SELECT * FROM tbl_walikelas where nama_login='$nama_login'";
  $result = $this->db->query($sql);
  foreach ($result->result() as $row) {
    
    if($row->kode_jurusan == 'TL01'){
      ?>
       <ul class="sidebar-menu">
            <li class="header">IPS</li>
           
            <li><a href="index.php/from_walikelas_tl/index"><i class="fa fa-circle-o text-yellow"></i> <span>Home</span></a></li>
            <li><a href="<?php echo base_url(); ?>index.php/from_walikelas_tl/daftar_siswa"><i class="fa fa-circle-o text-yellow"></i> <span>Daftar Siswa</span></a></li>
            <li><a href="<?php echo base_url(); ?>index.php/from_walikelas_tl/daftar_nilai"><i class="fa fa-circle-o text-yellow"></i> <span>Nilai Siswa</span></a></li>
              <li><a href="<?php echo base_url(); ?>index.php/from_walikelas_tl/report"><i class="fa fa-circle-o text-yellow"></i> <span>Report</span></a></li>
             <li><a href="<?php echo base_url(); ?>index.php/from_walikelas_tl/profile"><i class="fa fa-circle-o text-yellow"></i> <span>Profile</span></a></li>
             <li><a href="<?php echo base_url(); ?>index.php/login/logout"><i class="fa fa-circle-o text-yellow"></i> <span>Logout</span></a></li>
      <?php
    }elseif($row->kode_jurusan == 'TKR01'){
?>

            <ul class="sidebar-menu">
            <li class="header">IPA</li>
            <li><a href="index.php/from_walikelas_tkr/index"><i class="fa fa-circle-o text-yellow"></i> <span>Home</span></a></li>
           
 <li><a href="<?php echo base_url(); ?>index.php/from_walikelas_tkr/daftar_siswa"><i class="fa fa-circle-o text-yellow"></i> <span>Daftar Siswa</span></a></li>
             <li><a href="<?php echo base_url(); ?>index.php/from_walikelas_tkr/daftar_nilai"><i class="fa fa-circle-o text-yellow"></i> <span>Nilai Siswa</span></a></li>
             <li><a href="<?php echo base_url(); ?>index.php/siswa"><i class="fa fa-circle-o text-yellow"></i> <span>Report</span></a></li>
             <li><a href="<?php echo base_url(); ?>index.php/from_walikelas_tkr/profile"><i class="fa fa-circle-o text-yellow"></i> <span>Profile</span></a></li>
             <li><a href="<?php echo base_url(); ?>index.php/login/logout"><i class="fa fa-circle-o text-yellow"></i> <span>Logout</span></a></li>
<?php
    }else{
      
               $nama_admin = $this->session->userdata('nm_admin');
                $sqls = "SELECT * FROM tbl_admin where nm_admin='$nama_admin'";
                $rs = $this->db->query($sqls);
                foreach ($rs->result as $tampil) {
                  
                  if($nama_admin == true){
                    ?>
                       <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Home</span></a></li>
           
 <li><a href="<?php echo base_url(); ?>index.php/from_walikelas_tl"><i class="fa fa-circle-o text-yellow"></i> <span>Siswa</span></a></li>
             <li><a href="<?php echo base_url(); ?>index.php/from_walikelas_tl"><i class="fa fa-circle-o text-yellow"></i> <span>Data Guru</span></a></li>
             <li><a href="<?php echo base_url(); ?>index.php/siswa"><i class="fa fa-circle-o text-yellow"></i> <span>Data Siswa</span></a></li>
             <li><a href="<?php echo base_url(); ?>index.php/login/logout"><i class="fa fa-circle-o text-yellow"></i> <span>Logout</span></a></li>
                    <?php
                  }else{
                    echo "gagal";
                  }

                }

         }


  }

 ?>


