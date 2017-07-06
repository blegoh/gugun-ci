<?php echo form_open('siswa/prosesedit_nilai'); ?>


<style type="text/css">
	input{
		width: 100px;
		color: blue;
	}
</style>
<?php foreach ($data->result() as $rows) : ?>
	
<table class="table table-condensed">
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
		<td><input type="text" name="agama" value="<?php echo $rows->agama ?>"></td>
	</tr>

	<tr>
		<td>2</td>
		<td>Kewarganegaraan</td>
		<td>6.70</td>
		<td><input type="text" name="kewarganegaraan" value="<?php echo $rows->kewarganegaraan ?>"></td>
	</tr>

	<tr>
		<td>3</td>
		<td>Bahasa Indonesia</td>
		<td>6.70</td>
		<td><input type="text" name="b_indonesia" value="<?php echo $rows->b_indonesia ?>"></td>
	</tr>

	<tr>
		<td>4</td>
		<td>Pendidikan Jasmani dan Olahraga</td>
		<td>6.70</td>
		<td><input type="text" name="penjas" value="<?php echo $rows->penjas ?>"></td>
	</tr>

	<tr>
		<td>5</td>
		<td>Seni Budaya</td>
		<td>6.70</td>
		<td><input type="text" name="seni_budaya" value="<?php echo $rows->seni_budaya ?>"></td>
	</tr>

	<tr>
		<td>6</td>
		<td>Bahasa Inggris</td>
		<td>6.70</td>
		<td><input type="text" name="b_inggris" value="<?php echo $rows->b_inggris ?>"></td>
	</tr>

	<tr>
		<td>7</td>
		<td>Matematika</td>
		<td>6.70</td>
		<td><input type="text" name="mtk" value="<?php echo $rows->mtk ?>"></td>
	</tr>

	<tr>
		<td>8</td>
		<td>Ilmu Pengetahuan Alama</td>
		<td>6.70</td>
		<td><input type="text" name="ipa" value="<?php echo $rows->ipa ?>"></td>
	</tr>

	<tr>
		<td>9</td>
		<td>Ilmu Pengetahuan Sosial</td>
		<td>6.70</td>
		<td><input type="text" name="ips" value="<?php echo $rows->ips ?>"></td>
	</tr>

	<tr>
		<td>10</td>
		<td>Fisika</td>
		<td>6.70</td>
		<td><input type="text" name="fisika" value="<?php echo $rows->fisika ?>"></td>
	</tr>

	<tr>
		<td>11</td>
		<td>Kimia</td>
		<td>6.70</td>
		<td><input type="text" name="kimia" value="<?php echo $rows->kimia ?>"></td>
	</tr>

	<tr>
		<td>12</td>
		<td>KKPI</td>
		<td>6.70</td>
		<td><input type="text" name="KKPI" value="<?php echo $rows->KKPI ?>"></td>
	</tr>

	<tr>
		<td>12</td>
		<td>Kewirausahaan</td>
		<td>6.70</td>
		<td><input type="text" name="kewirausahaan" value="<?php echo $rows->kewirausahaan ?>"></td>
	</tr>

	<tr>
		<td>13</td>
		<td>DKK 01 (Memahami dasar-dasar mesin)</td>
		<td>6.70</td>
		<td><input type="text" name="dkk_01" value="<?php echo $rows->dkk_01 ?>"></td>
	</tr>

	<tr>
		<td>14</td>
		<td>DKK 04 (Menginterpestasikan gambar teknik)</td>
		<td>6.70</td>
		<td><input type="text" name="dkk_04" value="<?php echo $rows->dkk_04 ?>"></td>
	</tr>

	<tr>
		<td>15</td>
		<td>DKK 05 (Menggunakan peralatan dan perlengkapan di tempat kerja)</td>
		<td>6.70</td>
		<td><input type="text" name="dkk_05" value="<?php echo $rows->dkk_05 ?>"></td>
	</tr>

	<tr>
		<td>16</td>
		<td>DKK 06 (Menggunakan alat-alat ukur)</td>
		<td>6.70</td>
		<td><input type="text" name="dkk_06" value="<?php echo $rows->dkk_06 ?>"></td>
	</tr>

	<tr>
		<td>17</td>
		<td>DKK 07 (Menerapkan prosedur k3 dan lingkungan tempat kerja)</td>
		<td>6.70</td>
		<td><input type="text" name="dkk_07" value="<?php echo $rows->dkk_07 ?>"></td>
	</tr>
</table>
<center>
<button type="submit" name="edit" class="btn btn-primary">EDIT</button>
<button type="reset"  class="btn btn-primary">DELETE</button>
<hr />
</center>
<p>
	<br/>
	<br/>
	<br/>
</p>
</form>
<?php endforeach ?>