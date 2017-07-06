<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN SISWA</title>
	
	<base href="<?php echo base_url() ?>" />
	  <link rel="shortcut icon" href="asset/print.ico" type="image/x-icon" />
	<style type="text/css">
		body{
	background: #e1e1e1;
	margin-left: auto;
	margin-right: auto;
	width: 1300px;
}
table, tr, th, td {
		border-collapse: collapse; /*untuk membuat garis table tipis*/
		border: 1px solid #98BF21;

	}
	th{
		background-color:#A7C942;
		border-bottom:3px solid #98BF21;
	}
	th, td{
		padding: 5px;
	}
	
	tr:nth-child(odd){
		background-color:#EAF2D3;
	}
	tr:nth-child(even){
		background-color:#D0DFA5; 
	}
	tr:hover{
		background-color:#ffffff;
		cursor: pointer; 
	}
	th.a{
		color: white;
		float: left;
		
	}
	.head{
		border-radius: 5px;
		border:1px solid black;
		padding: 5px;
	}
	button{
		background: blue;
		color: white;
		border-radius: 5px;
		width: 100px;
		height: 30px;
	}
	</style>
</head>
<body>

<center>
	<h2>
		<div class="head">
		DINAS PENDIDIKAN KOTA JAMBI <br/>
		SEKOLAH MENENGAH KEJURUAN (SMK) JAMBI IX LURAH 2 <br/>
		KELOMPOK TEKNOLOGI DAN REKAYASA
		</div>
	</h2>
	<h4>
	LAPORAN DATA NILAI KESELURUHAN <br/>
	<hr/>
	</h4>
</center>


<?php 


	
		if ($kode_jurusan == "TKR01") {
			$this->load->view('laporannilai_tkr');
		}elseif($kode_jurusan == "TL01"){

			$this->load->view('laporannilai_tl');
		}else{
			echo "salah bos";
		}
	


 ?>



</body>
</html>