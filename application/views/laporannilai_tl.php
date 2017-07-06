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
			<th>Rangkaian Listrik</th>
			<th>Pengukuran Listrik</th>
			<th>Gambar Teknik Listrik</th>
			<th>K3</th>
			<th>Dasar Elektronika</th>
			<th>Perwatan Rumah Tangga Listrik</th>
			<th>Intalsi LBS</th>
			<th>Intalsi LBB</th>
			<th>Perbaikan Motor Listrik</th>
			<th>Sistem Pengendali Elektronik</th>
			<th>PPDT</th>
			<th>Pengendali Elektromaknetik</th>
			<th>Sistem Pentahanan Listrik</th>
			<th>Perwatan Listrik</th>
		</tr>
		<tr>
		<?php 

		foreach ($data->result() as $key) {
			?>
				<td><?php echo $key->rangkaian_listrik ?></td>
				<td><?php echo $key->pengukuran_listrik ?></td>
				<td><?php echo $key->gambar_teknik_listrik ?></td>
				<td><?php echo $key->k3 ?></td>
				<td><?php echo $key->dasar_elektronika ?></td>
				<td><?php echo $key->rt_listrik ?></td>
				<td><?php echo $key->ilbs ?></td>
				<td><?php echo $key->ilbb ?></td>
				<td><?php echo $key->pml ?></td>
				<td><?php echo $key->spe ?></td>
				<td><?php echo $key->ppdt ?></td>
				<td><?php echo $key->spem ?></td>
				<td><?php echo $key->spil ?></td>
				<td><?php echo $key->ppls ?></td>
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
