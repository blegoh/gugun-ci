
<?php 
	
	foreach ($data->result() as $row) {
	?>


 	<div class="box">
 		Nama   : <?php $sql="SELECT * FROM tbl_siswa where nik='$row->no_induk'"; 
 		$rs=$this->db->query($sql);
 		foreach ($rs->result() as $row) {
 			echo $row->nama_siswa;
 		}
 		 ?>
 		 <br/>
 		No Induk : <?php 
 			echo $row->nik;
 		
 		 ?>
<br/>
 		Program Study : <?php $sql="SELECT * FROM tbl_jurusan where kode_jurusan='$row->kode_jurusan'"; 
 		$rs=$this->db->query($sql);
 		foreach ($rs->result() as $row) {
 			echo $row->nama_jurusan;
 		}
 		 ?>
 		 <div class="box2" >
 		 	Tahun Pelajaran : 2014 / 2015 <br/>
 		 </div>
 	</div>
 </table  align="center">

<?php  } ?>
<?php 
	
	foreach ($data->result() as $row) {
	?>


<table border="1">
	<tr>
		<th rowspan="2" width="40">No</th>
		<th  rowspan="2" width="800">Mata pelajaran</th>
		<th colspan="2" width="800">Hasil Nilai</th>
	</tr>
	<tr>
			<th >Angka</th>
			<th >Huruf</th>
		</tr>

	

	<tr>
			<td>1</td>
			<td>Pendidikan Agama</td>
			<td><?php echo $row->agama; ?></td>
			<td><?php $nilai=$row->agama;
				 if($nilai >= 85){echo "A";}
				 elseif($nilai >= 65 ){echo "B";}
				 elseif($nilai >= 55 ){echo "C";}
				 elseif($nilai >= 35 ){echo "D";}
				 elseif($nilai >= 10 ){echo "E";}
				  ?></td>
			</tr>

	<tr>
			<td>2</td>
			<td>Pendidikan Kewarganegaraan</td>
			<td><?php echo $row->kewarganegaraan; ?></td>
			<td><?php $nilai=$row->kewarganegaraan;
				 if($nilai >= 85){echo "A";}
				 elseif($nilai >= 65 ){echo "B";}
				 elseif($nilai >= 55 ){echo "C";}
				 elseif($nilai >= 35 ){echo "D";}
				 elseif($nilai >= 10 ){echo "E";}
				  ?></td>
			</tr>
			
		</tr>

	<tr>
			<td>3</td>
			<td>Bahasa Indonesia</td>
			<td><?php echo $row->b_indonesia; ?></td>
			<td><?php $nilai=$row->b_indonesia;
				 if($nilai >= 85){echo "A";}
				 elseif($nilai >= 65 ){echo "B";}
				 elseif($nilai >= 55 ){echo "C";}
				 elseif($nilai >= 35 ){echo "D";}
				 elseif($nilai >= 10 ){echo "E";}
				  ?></td>
			
		</tr>

	<tr>
			<td>4</td>
			<td>Pendidikan jasmani dan Olahraga</td>
			<td><?php echo $row->penjas; ?></td>
			<td><?php $nilai=$row->penjas;
				 if($nilai >= 85){echo "A";}
				 elseif($nilai >= 65 ){echo "B";}
				 elseif($nilai >= 55 ){echo "C";}
				 elseif($nilai >= 35 ){echo "D";}
				 elseif($nilai >= 10 ){echo "E";}
				  ?></td>
			
		</tr>

	<tr>
			<td>5</td>
			<td>Seni Budaya</td>
			<td><?php echo $row->seni_budaya; ?></td>
			<td><?php $nilai=$row->seni_budaya;
				 if($nilai >= 85){echo "A";}
				 elseif($nilai >= 65 ){echo "B";}
				 elseif($nilai >= 55 ){echo "C";}
				 elseif($nilai >= 35 ){echo "D";}
				 elseif($nilai >= 10 ){echo "E";}
				  ?></td>
			
		</tr>

	<tr>
			<td>6</td>
			<td>Bahasa Inggris</td>
			<td><?php echo $row->b_inggris; ?></td>
			<td><?php $nilai=$row->b_inggris;
				 if($nilai >= 85){echo "A";}
				 elseif($nilai >= 65 ){echo "B";}
				 elseif($nilai >= 55 ){echo "C";}
				 elseif($nilai >= 35 ){echo "D";}
				 elseif($nilai >= 10 ){echo "E";}
				  ?></td>
			
		</tr>

	<tr>
			<td>7</td>
			<td>Matematika</td>
			<td><?php echo $row->mtk; ?></td>
			<td><?php $nilai=$row->mtk;
				 if($nilai >= 85){echo "A";}
				 elseif($nilai >= 65 ){echo "B";}
				 elseif($nilai >= 55 ){echo "C";}
				 elseif($nilai >= 35 ){echo "D";}
				 elseif($nilai >= 10 ){echo "E";}
				  ?></td>
			
		</tr>

	<tr>
			<td>8</td>
			<td>Ilmu Pengetahuan Alam</td>
			<td><?php echo $row->ipa; ?></td>
			<td><?php $nilai=$row->ipa;
				 if($nilai >= 85){echo "A";}
				 elseif($nilai >= 65 ){echo "B";}
				 elseif($nilai >= 55 ){echo "C";}
				 elseif($nilai >= 35 ){echo "D";}
				 elseif($nilai >= 10 ){echo "E";}
				  ?></td>
			
		</tr>

	<tr>
			<td>9</td>
			<td>Fisika</td>
			<td><?php echo $row->fisika; ?></td>
			<td><?php $nilai=$row->fisika;
				 if($nilai >= 85){echo "A";}
				 elseif($nilai >= 65 ){echo "B";}
				 elseif($nilai >= 55 ){echo "C";}
				 elseif($nilai >= 35 ){echo "D";}
				 elseif($nilai >= 10 ){echo "E";}
				  ?></td>
			
		</tr>

	<tr>
			<td>10</td>
			<td>Kimia</td>
			<td><?php echo $row->kimia; ?></td>
			<td><?php $nilai=$row->kimia;
				 if($nilai >= 85){echo "A";}
				 elseif($nilai >= 65 ){echo "B";}
				 elseif($nilai >= 55 ){echo "C";}
				 elseif($nilai >= 35 ){echo "D";}
				 elseif($nilai >= 10 ){echo "E";}
				  ?></td>
			
		</tr>
		<tr>
			<td>11</td>
			<td>Ilmu Pengetahuan Sosial</td>
			<td><?php echo $row->ips; ?></td>
			<td><?php $nilai=$row->ips;
				 if($nilai >= 85){echo "A";}
				 elseif($nilai >= 65 ){echo "B";}
				 elseif($nilai >= 55 ){echo "C";}
				 elseif($nilai >= 35 ){echo "D";}
				 elseif($nilai >= 10 ){echo "E";}
				  ?></td>
			
		</tr>

		<tr>
			<td>12</td>
			<td>KKPI</td>
			<td><?php echo $row->KKPI ?></td>
			<td><?php $nilai=$row->KKPI;
				 if($nilai >= 85){echo "A";}
				 elseif($nilai >= 65 ){echo "B";}
				 elseif($nilai >= 55 ){echo "C";}
				 elseif($nilai >= 35 ){echo "D";}
				 elseif($nilai >= 10 ){echo "E";}
				  ?></td>
			
		</tr>

		<tr>
			<td>13</td>
			<td>Kewirausahaan</td>
			<td><?php echo $row->kewirausahaan ?></td>
			<td><?php $nilai=$row->kewirausahaan;
				 if($nilai >= 85){echo "A";}
				 elseif($nilai >= 65 ){echo "B";}
				 elseif($nilai >= 55 ){echo "C";}
				 elseif($nilai >= 35 ){echo "D";}
				 elseif($nilai >= 10 ){echo "E";}
				  ?></td>
			
		</tr>
		<tr>
			<th colspan="2">Jumlah Nilai</th>
			<th colspan="2"><?php 
	
	 $jumlah=
$row->agama + $row->kewarganegaraan + $row->b_indonesia + $row->penjas + $row->seni_budaya + $row->b_inggris + $row->mtk + $row->ipa + $row->ips + $row->fisika + $row->kimia + $row->KKPI + $row->kewirausahaan;                     
echo "<b>".$jumlah ."</b>";
	
 ?></th>
		</tr>

		<tr>
			<th colspan="2">Nilai Rata - Rata</th>
			<th colspan="2"><?php $rata=$jumlah/27; echo number_format($rata,3) ?></th>
		</tr>
</table>

<button type="submit" name="catak">cetak nilai</button>


	<?php
	}

 ?>
