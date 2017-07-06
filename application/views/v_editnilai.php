<?php 

	$sql = "SELECT * FROM tbl_matapelajaran where id_pel='$id_pel'; ";
	$rs  = $this->db->query($sql);
	foreach ($rs->result() as $v) {
	
		if($v->kode_jurusan == "TL01"){
			?>


<?php echo form_open('super_admin/edit_nilaitl'); ?>
<table id="example1" class="table table-bordered table-striped">
	<tr>
		<td>NIK</td>
		<td>:</td>
		<td><input type="text" name="id_pel" value="<?php echo $id_pel ?>">
		</td>
	</tr>

	
	<tr>
		<td>Wali Kelas</td>
		<td>:</td>
		<td><?php //echo $nama_walikelas; ?></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td><input type="text" name="kelas"  class="col-xs-3" id="inputSuccess"></td>
	</tr>
	<tr>
		<td>Semestar</td>
		<td>:</td>
		<td><input type="text" name="semester" class="col-xs-3" id="inputSuccess"></td>
	</tr>
</table>
<style type="text/css">
	input{
		width: 100px;
		color: blue;
	}
</style>
<?php foreach ($data->result() as $row) : ?>

<table border="1" class="table table-condensed">
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

	<tr>
		<td>13</td>
		<td>Rangkaian Listrik</td>
		<td>6.70</td>
		<td><input type="text" name="rangkaian_listrik" value="<?php echo $row->rangkaian_listrik ?>"></td>
	</tr>

	<tr>
		<td>14</td>
		<td>Pengukuran Listrik</td>
		<td>6.70</td>
		<td><input type="text" name="pengukuran_listrik" value="<?php echo $row->pengukuran_listrik ?>"></td>
	</tr>

	<tr>
		<td>15</td>
		<td>Gambar Teknik Listrik</td>
		<td>6.70</td>
		<td><input type="text" name="gambar_teknik_listrik" value="<?php echo $row->gambar_teknik_listrik ?>"></td>
	</tr>

	<tr>
		<td>16</td>
		<td>Pekerjaan Mekanik Dasar dan k3</td>
		<td>6.70</td>
		<td><input type="text" name="k3" value="<?php echo $row->k3 ?>"></td>
	</tr>

	<tr>
		<td>17</td>
		<td>Dasar-Dasar Elektronika</td>
		<td>6.70</td>
		<td><input type="text" name="dasar_elektronika" value="<?php echo $row->dasar_elektronika ?>"></td>
	</tr>


	<tr>
		<td>18</td>
		<td>Perawatan dan perbaikan peralatan rumah tangga listrik</td>
		<td>6.70</td>
		<td><input type="text" name="rt_listrik" value="<?php echo $row->rt_listrik ?>"></td>
	</tr>

	<tr>
		<td>19</td>
		<td>Intalasi listrik Bangunan sederhana</td>
		<td>6.70</td>
		<td><input type="text" name="ilbs" value="<?php echo $row->ilbs ?>"></td>
	</tr>

	<tr>
		<td>20</td>
		<td>Intalasi Listrik Bangunan Bertingkat</td>
		<td>6.70</td>
		<td><input type="text" name="ilbb" value="<?php echo $row->ilbb ?>"></td>
	</tr>

	<tr>
		<td>21</td>
		<td>Perbaikan Motor Listrik</td>
		<td>6.70</td>
		<td><input type="text" name="pml" value="<?php echo $row->pml ?>"></td>
	</tr>


	<tr>
		<td>22</td>
		<td>Sistem Pengendali Elektronik</td>
		<td>6.70</td>
		<td><input type="text" name="spe" value="<?php echo $row->spe ?>"></td>
	</tr>

	<tr>
		<td>23</td>
		<td>Peralatan Pengendali Daya Tegangan Rendah</td>
		<td>6.70</td>
		<td><input type="text" name="ppdt" value="<?php echo $row->ppdt ?>"></td>
	</tr>

	<tr>
		<td>24</td>
		<td>Sistem Pengendali Elektromaknetik</td>
		<td>6.70</td>
		<td><input type="text" name="spem" value="<?php echo $row->spem ?>"></td>
	</tr>

	<tr>
		<td>25</td>
		<td>Sistem Pentanahan Instalasi Listrik</td>
		<td>6.70</td>
		<td><input type="text" name="spil" value="<?php echo $row->spil ?>"></td>
	</tr>

	<tr>
		<td>26</td>
		<td>Perawatan Panel Listrik dan Swaitcher</td>
		<td>6.70</td>
		<td><input type="text" name="ppls" value="<?php echo $row->ppls ?>"></td>
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


			<?php
		}elseif($v->kode_jurusan == "TKR01"){
			?>

			<?php
		}else{
			?>
			You Back !
			<?php
		}


	}

 ?>