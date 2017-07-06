<!DOCTYPE html>
<html>
<head>
	<title>Nilai Online Vers 1.0</title>
	<base href="<?php echo base_url() ?>"/>
	<link rel="shortcut icon" href="asset/images/icon.jpg" type="image/x-icon" />
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

	.eror{
		background: #ffa9a9;
		width: 99%;
		height: 40px;
		font-size: 30px;
		text-align: center;
		padding: 10px;
	}
	.info{
		background-color:#D0DFA5; 
		padding: 20px;
		font-size: 20px;
	}

</style>


<div class="eror">
	Maaf Data Nilai Masih Kosong !
</div>
	
<div class="info">
	No Induk  : <?php echo $no_induk ?> <br/>
	Kelas     : <?php echo $kelas ?> <br/>
	Semester : <?php echo $smester ?> <br/>

	Tidak Ada Dalam Database Atau Nilai Masih Kosong !
	<br/>
	<a href="<?php echo base_url(); ?>index.php/siswa/log_siswa">back</a>
</div>


<center>
 	&copy; SMA NEGERI 1 DAYEUHKOLOT 2017

</body>
</html>