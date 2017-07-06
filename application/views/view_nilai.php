<!DOCTYPE html>
<html>
<head>
	<title>Nilai Online Vers 1.0</title>
	<base href="<?php echo base_url() ?>" />
	  <link rel="shortcut icon" href="asset/print.ico" type="image/x-icon" />
</head>
<body>

<style type="text/css">
	
/*  table*/
body{
	background: #e1e1e1;
	margin-left: auto;
	margin-right: auto;
	width: 1200px;
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
	.box{
		background: #A7C942;
		color: black;
		font-weight: bold; 
		padding: 10px;
		font-size: 15px;
		font-family: times;
		
	}
	.box2{
		float: right;
	}
	button{
		background: blue;
		color: white;
		border-radius: 5px;
		width: 100px;
		height: 30px;
	}
</style>

<?php 
	
	
		foreach ($data->result() as $key) {
			if ($key->kode_jurusan == "TKR01") {
			
				$this->load->view('nilai_tkr');
			
			}elseif($key->kode_jurusan == "TL01"){
				$this->load->view('nilai_tl');
			}elseif ($key->kode_jurusan == NULL){
				echo "Salah Bos !";
			}else{
				echo "salah";
			}
		}

 ?>

 <center>
 	&copy; 2017 SMAN 1 DAYEUHKOLOT
 </center>

</body>
</html>