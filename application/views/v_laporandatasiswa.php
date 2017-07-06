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
		SMAN 1 Dayeuhkolot
		</div>
	</h2>
	<h4>
	LAPORAN DATA SISWA KESELURUHAN <br/>
	<hr/>
	</h4>
</center>


<table width="100%">
	<tr>
		<th>No. Induk</th>
		<th>Nama Siswa</th>
		<th>Tempat Tanggal Lahir</th>
		<th>Jenis Kelamin</th>
		<th>Agama</th>
		<th>Tahun Angkatan</th>
		<th>Smester</th>
	</tr>
	<tr>
		<?php 

			foreach ($data->result() as $row) {
				?>
					<td><?php echo $row->nik ?></td>
					<td><?php echo $row->nama_siswa ?></td>
					<td><?php echo $row->ttl ?></td>
					<td><?php echo $row->jenis_kelamin ?></td>
					<td><?php echo $row->agama ?></td>
					<td><?php echo $row->tahun_angkatan ?></td>
					<td><?php echo $row->smester ?></td>
	</tr>
				<?php
			}
		 ?>
</table>


<button type="submit" onclick="proses()" name="catak">cetak</button>

<script type="text/javascript">
	function proses(){
		window.print();
	}
</script>

</body>
</html>