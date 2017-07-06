<?php echo form_open('siswa/edit_nilaitl'); ?>

<style type="text/css">
	input{
		width: 100px;
		color: blue;
	}
</style>
<?php foreach ($data->result() as $row) : ?>

<table  class="table table-condensed">
	<tr>
		<th>NO</th>
		<th>Mata Pelajaran</th>
		<th>KKM</th>
		<th>Nilai</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Pendidikan Agama</td>
		<td>6.70</td>
		<td><input type="text" name="agama" value="<?php echo $row->agama ?>"></td>
	</tr>

	<tr>
		<td>2</td>
		<td>Kewarganegaraan</td>
		<td>6.70</td>
		<td><input type="text" name="kewarganegaraan" value="<?php echo $row->kewarganegaraan ?>"></td>
	</tr>

	<tr>
		<td>3</td>
		<td>Bahasa Indonesia</td>
		<td>6.70</td>
		<td><input type="text" name="b_indonesia" value="<?php echo $row->b_indonesia ?>"></td>
	</tr>

	<tr>
		<td>4</td>
		<td>Pendidikan Jasmani dan Olahraga</td>
		<td>6.70</td>
		<td><input type="text" name="penjas" value="<?php echo $row->penjas ?>"></td>
	</tr>

	<tr>
		<td>5</td>
		<td>Seni Budaya</td>
		<td>6.70</td>
		<td><input type="text" name="seni_budaya" value="<?php echo $row->seni_budaya ?>"></td>
	</tr>

	<tr>
		<td>6</td>
		<td>Bahasa Inggris</td>
		<td>6.70</td>
		<td><input type="text" name="b_inggris" value="<?php echo $row->b_inggris ?>"></td>
	</tr>

	<tr>
		<td>7</td>
		<td>Matematika</td>
		<td>6.70</td>
		<td><input type="text" name="mtk" value="<?php echo $row->mtk ?>"></td>
	</tr>

	<tr>
		<td>8</td>
		<td>Ilmu Pengetahuan Alama</td>
		<td>6.70</td>
		<td><input type="text" name="ipa" value="<?php echo $row->ipa ?>"></td>
	</tr>

	<tr>
		<td>9</td>
		<td>Ilmu Pengetahuan Sosial</td>
		<td>6.70</td>
		<td><input type="text" name="ips" value="<?php echo $row->ips ?>"></td>
	</tr>

	<tr>
		<td>10</td>
		<td>Fisika</td>
		<td>6.70</td>
		<td><input type="text" name="fisika" value="<?php echo $row->fisika ?>"></td>
	</tr>

	<tr>
		<td>11</td>
		<td>Kimia</td>
		<td>6.70</td>
		<td><input type="text" name="kimia" value="<?php echo $row->kimia ?>"></td>
	</tr>

	<tr>
		<td>12</td>
		<td>KKPI</td>
		<td>6.70</td>
		<td><input type="text" name="KKPI" value="<?php echo $row->KKPI ?>"></td>
	</tr>

	<tr>
		<td>12</td>
		<td>Kewirausahaan</td>
		<td>6.70</td>
		<td><input type="text" name="kewirausahaan" value="<?php echo $row->kewirausahaan ?>"></td>
	</tr>
</table>
<center>
<button type="submit" name="edit" class="btn btn-primary">EDIT</button>
<button type="reset" name="" class="btn btn-primary">DELETE</button>
<hr />
</center>
<p>
	<br/>
	<br/>
	<br/>
</p>
</form>
<?php endforeach ?>
