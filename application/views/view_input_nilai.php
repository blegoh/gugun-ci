<?php echo form_open('siswa/save_nilai'); ?>
<table>
	<tr>
		<td>Nama Siswa</td>
		<td>:</td>
		<td><?php 

		$result = $this->db->query($data_siswa);
		foreach ($result->result() as $tampil) : ?>
		<?php
			echo $tampil->nama_siswa;
		
		 ?></td>
		<input type="hidden" name="nik" value="<?php echo $nik ?>">
	</tr>

	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td>
			<?php echo $tampil->smester ?>
		</td>
	</tr>
<?php endforeach ?>
	<tr>
		<td>Wali Kelas</td>
		<td>:</td>
		<td><?php echo "session wali" ?></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td><input type="text" name="kelas"></td>
	</tr>
	<tr>
		<td>Semestar</td>
		<td>:</td>
		<td><input type="text" name="semester"></td>
	</tr>
</table>
<br/>
<table border="1">
	<tr>
		<td>NO</td>
		<td>Mata Pelajaran</td>
		<td>KKM</td>
		<td>Nilai</td>
	</tr>
	<tr>
		<td>1</td>
		<td>Pendidikan Agama</td>
		<td>6.70</td>
		<td><input type="text" name="agama"></td>
	</tr>

	<tr>
		<td>2</td>
		<td>Kewarganegaraan</td>
		<td>6.70</td>
		<td><input type="text" name="kewarganegaraan"></td>
	</tr>

	<tr>
		<td>3</td>
		<td>Bahasa Indonesia</td>
		<td>6.70</td>
		<td><input type="text" name="b_indonesia"></td>
	</tr>

	<tr>
		<td>4</td>
		<td>Pendidikan Jasmani dan Olahraga</td>
		<td>6.70</td>
		<td><input type="text" name="penjas"></td>
	</tr>

	<tr>
		<td>5</td>
		<td>Seni Budaya</td>
		<td>6.70</td>
		<td><input type="text" name="seni_budaya"></td>
	</tr>

	<tr>
		<td>6</td>
		<td>Bahasa Inggris</td>
		<td>6.70</td>
		<td><input type="text" name="b_inggris"></td>
	</tr>

	<tr>
		<td>7</td>
		<td>Matematika</td>
		<td>6.70</td>
		<td><input type="text" name="mtk"></td>
	</tr>

	<tr>
		<td>8</td>
		<td>Ilmu Pengetahuan Alama</td>
		<td>6.70</td>
		<td><input type="text" name="ipa"></td>
	</tr>

	<tr>
		<td>9</td>
		<td>Ilmu Pengetahuan Sosial</td>
		<td>6.70</td>
		<td><input type="text" name="ips"></td>
	</tr>

	<tr>
		<td>10</td>
		<td>Fisika</td>
		<td>6.70</td>
		<td><input type="text" name="fisika"></td>
	</tr>

	<tr>
		<td>11</td>
		<td>Kimia</td>
		<td>6.70</td>
		<td><input type="text" name="kimia"></td>
	</tr>

	<tr>
		<td>12</td>
		<td>KKPI</td>
		<td>6.70</td>
		<td><input type="text" name="KKPI"></td>
	</tr>

	<tr>
		<td>12</td>
		<td>Kewirausahaan</td>
		<td>6.70</td>
		<td><input type="text" name="kewirausahaan"></td>
	</tr>
</table>
<input type="submit" name="save" value="save">
</form>

