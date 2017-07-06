<?php
//membuat koneksi ke database
include ("koneksi.php");
	date_default_timezone_set('Asia/Jakarta');
	$date = date("d-m-y");
	$time = date("H:i:s");

?>

<center> 
MENAMPILKAN DATA 
<br>
<br>

<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->


<table  border='2' Width='500'>  
<tr>
    <th> finger </th>
    <th> waktu </th>
    
</tr>

<?php  
// Perintah untuk menampilkan data
$queri="Select * From tb_khoir ORDER BY waktu DESC LIMIT 20" ;  


$hasil=MySQL_query ($queri);   

	echo "\t Waktu: $time  $date";
	echo "<p>";

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
 echo "    
        <tr>
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