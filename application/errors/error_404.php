<?php
 include "db_sma1"; //panggil file koneksi.php yang telah dibuat
 	date_default_timezone_set('Asia/Jakarta');
	$date = date("y-m-d H:i:s");

 //mengambil variabel yang dikirim oleh index.php
 $finger=$_GET['finger'];
 $waktu=$date;
 
 $query="insert into absensi values('','$finger','$waktu')";
 $exe=mysql_query($query);
 	if($exe){
		//echo "<p>";
		echo " data masuk";
	}
	else{
		//echo "<p>";
		echo " data gagal masuk";
	}
?>