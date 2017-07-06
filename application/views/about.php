<div class="col-lg-12">
                    <h1 class="page-header">Daftar Hadir</h1>
                </div>
                <!-- /.col-lg-12 --><div class="col-lg-12">
                  
              
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a  class="" href=""> </a>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                      <tr>
									
									<th>NIK</th>
									<th>Nama</th>
									<th>finger</th>
									<th>waktu</th>
                                   
								   
								   
		<?php
	//membuat koneksi ke database
	include ("koneksi.php");
	date_default_timezone_set('Asia/Jakarta');
	$date = date("d-m-y");
	$time = date("H:i:s");

?>



<?php  
// Perintah untuk menampilkan data
$queri="Select * From absensi ORDER BY waktu DESC LIMIT 20" ;
$queri="select a.finger, a.waktu, b.nik as nik, b.nama_siswa as namasiswa
from absensi a
join tbl_siswa b on a.nik=b.nik";


$hasil=MySQL_query ($queri);   

	echo "\t Waktu: $time  $date";
	echo "<p>";

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array($hasil)){
 echo "    
        <tr>
		<td>".$data['nik']."</td>
		<td>".$data['namasiswa']."</td>
        <td>".$data['finger']."</td>
        <td>".$data['waktu']."</td>
        
        </tr> 
		
        ";
		
$page = $_SERVER['PHP_SELF'];
$sec = "5";
header("Refresh: $sec; url=$page");
        
}

?>

</table>
                                 
									
                                    
                            
                                    </tr>   
                                    </thead>
									
						
                                   