
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="<?php echo base_url() ?>" />
    <link rel="shortcut icon" href="asset/images/icon.jpg" type="image/x-icon" />


    <title>ADMIN SMAN 1 DAYEUHKOLOT </title>
<style type="text/css">
    a {
    color: #003399;
    background-color: transparent;
    font-weight: normal;
}
body{
  font-family: times;
    
}
 #preloader {
        position:fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        background-color:#ffffff; /* change if the mask should have another color then white */
        z-index:99; /* makes sure it stays on top */
       }

       #status {
        width:500px;
        height:500px;
        position:absolute;
        left:40%; /* centers the loading animation horizontally one the screen */
        top:30%; /* centers the loading animation vertically one the screen */
        background-image:url(asset/load.gif); /* path to your loading animation */
        background-repeat:no-repeat;
        background-position:center;
        margin:-100px 0 0 -100px; /* is width and height divided by two */
       }
</style>

    <!-- Bootstrap Core CSS -->
    <base href="<?php echo base_url() ?>" />
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="asset/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/css/bootstrap-datepicker.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
// 1 detik = 1000
window.setTimeout("waktu()",1000);  
function waktu() {   
    var tanggal = new Date();  
    setTimeout("waktu()",1000);  
    document.getElementById("output").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
}
</script>
<script language="JavaScript">
var tanggallengkap = new String();
var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
namahari = namahari.split(" ");
var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
namabulan = namabulan.split(" ");
var tgl = new Date();
var hari = tgl.getDay();
var tanggal = tgl.getDate();
var bulan = tgl.getMonth();
var tahun = tgl.getFullYear();
tanggallengkap = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun;

    var popupWindow = null;
    function centeredPopup(url,winName,w,h,scroll){
    LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
    TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
    settings ='height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
    popupWindow = window.open(url,winName,settings)
}
</script>

</head>

<body>
   <div id="preloader">
      <div id="status"></div>
     </div>
     

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><b>

                    <img src="asset/images/index.png" width="30px">

                CPANEL ADMINISTATOR SMAN 1 DAYEUHKOLOT  </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</a>
              <i class="navbar-brand" href="#"><script language="JavaScript">document.write(tanggallengkap);</script>
                     </i>
              <i class="navbar-brand" href="#"  id="output"></i>
         
            </div>
            <!-- /.navbar-header -->

            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php/super_admin"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="index.php/super_admin"><i class="fa fa-edit fa-fw"></i> Absensi Fingerprint<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
							</li>
								<a href="index.php/super_admin/input_siswa"></a>
                                </li>

                                <li>
                                    <a href="index.php/super_admin/about">Daftar Hadir </a>
                                </li>
                                
                                <li>
                                    <a href="index.php/super_admin/input_absen">Input Manual </a>
                                </li>


                                <li>
                                    <a href="index.php/super_admin/pendaftaran">Telegram </a>
                                </li>
                            </ul>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Input Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            <li>
                                    <a href="index.php/super_admin/input_siswa">Input Siswa</a>
                                </li>

                                <li>
                                    <a href="index.php/super_admin/input_guru">Input Guru</a>
                                </li>
                                
                                <li>
                                    <a href="index.php/super_admin/input_walikelas">Input Wali Kelas</a>
                                </li>


                                <li>
                                    <a href="index.php/super_admin/input_jurusan">Input Jurusan</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Tabel<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            <li>
                                    <a href="index.php/super_admin/table_siswa">Tabel Siswa</a>
                                </li>

                                <li>
                                    <a href="index.php/super_admin/table_walikelas">Table Walikelas</a>
                                </li>
                                
                                <li>
                                    <a href="index.php/super_admin/table_guru">Table Data guru</a>
                                </li>
                                         <li>
                                    <a href="index.php/super_admin/table_jurusan">Table Jurusan</a>
                                </li>
                                    <li>
                                    <a href="index.php/super_admin/table_nilai">Daftar Nilai</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         </li>
                         <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Laporan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            <li>
                                    <a href="index.php/super_admin/laporan_siswa">Laporan Nilai Siswa</a>
                                </li>

                                <li>
                                    <a href="index.php/super_admin/laporan_daftar_guru">Laporan Daftar Guru</a>
                                </li>
                                
                                <li>
                                    <a href="index.php/super_admin/laporan_daftar_siswa">Laporan Daftar Siswa</a>
                                </li>
								
							
						
                            </ul>
                                <!-- /.nav-second-level -->
                        </li><!-- 
                        <li>
                            <a href="asset/tbl_final_peminjam.php"><i class="fa fa-files-o fa-fw"></i> Historiy Pinjaman</a>
                        </li> -->
                         
                        
                           <li>
                            <a href="index.php/super_admin/seting_admin"><i class="fa fa-wrench fa-fw"></i> Setting</a>
                        </li>
                             <li>
                            <a href="index.php/ci_admin/logout" onclick="return confirm('Anda Yakin keluar dari Aplikasi ?')"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                      
                    </ul>
                    
                        <p>
                            
                        </p>
    <p style="color:#777">
                     <br/>
                   
        </p>             
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
<?php $this->load->view($content) ?>


                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
          
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
   <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="asset/js/sb-admin-2.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/js/bootstrap-datepicker.js"></script>
     
     <!-- Javascript -->
     <script type="text/javascript">
      $(window).load(function() { // makes sure the whole site is loaded
      $("#status").fadeOut(); // will first fade out the loading animation
      $("#preloader").delay(450).fadeOut("slow"); // will fade out the white DIV that covers the website.
      })
     </script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>


    