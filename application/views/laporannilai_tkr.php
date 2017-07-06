<table>
	<tr>
		<th>Jurusan</th>
		<th>No_induk</th>
		<th>Kelas</th>
		<th>Smester</th>
		<th>Pendidikan Agama</th>
		<th>Kewarganegaraan</th>
		<th>B Indonesia</th>
		<th>Penjas</th>
		<th>Seni Budaya</th>
		<th>b. Inggris</th>
		<th>Mtk</th>
		<th>IPA</th>
		<th>IPS</th>
		<th>Fisika</th>
		<th>Kimia</th>
		<th>KKPI</th>
		<th>Kewirausahaan</th>
	</tr>
	<tr>
		<?php foreach ($data->result() as $row) {
			?>
			<td><?php echo $row->kode_jurusan ?></td>
			<td><?php echo $row->no_induk ?></td>
			<td><?php echo $row->kelas ?></td>
			<td><?php echo $row->smester?></td>
			<td><?php echo $row->agama ?></td>
			<td><?php echo $row->kewarganegaraan ?></td>
			<td><?php echo $row->b_indonesia ?></td>
			<td><?php echo $row->penjas ?></td>
			<td><?php echo $row->seni_budaya ?></td>
			<td><?php echo $row->b_inggris ?></td>
			<td><?php echo $row->mtk ?></td>
			<td><?php echo $row->ipa ?></td>
			<td><?php echo $row->ips ?></td>
			<td><?php echo $row->fisika ?></td>
			<td><?php echo $row->kimia ?></td>
			<td><?php echo $row->KKPI ?></td>
			<td><?php echo $row->kewirausahaan ?></td>
	</tr>
			<?php
		} ?>
</table>
	

	<table>
		<tr >
			<th>DKK 01 (Memahami Dasar - Dasar Mesin)</th>
			<th>DKK 04 (Menginterprestasikan Gambar Teknik)</th>
			<th>DKK 05 (Menggunakan Peralatan dan Perlengkapan di Tempat kerja)</th>
			<th>DKK 06 (Menggunakan Alat- Alat Ukur)</th>
			<th>DKK 07 (Menerapkan prosedur k3 dan Lingkungan Tempat Kerja)</th>
		</tr>
		<tr>
		<?php 

		foreach ($data->result() as $key) {
			?>

			<td><?php echo $key->dkk_01 ?></td>
			<td><?php echo $key->dkk_04 ?></td>
			<td><?php echo $key->dkk_05 ?></td>
			<td><?php echo $key->dkk_06 ?></td>
			<td><?php echo $key->dkk_07 ?></td>
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
