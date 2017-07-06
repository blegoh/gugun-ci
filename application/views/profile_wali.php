<center>
	<b >
		<h2 style="font-family: courier">
		Profil Wali Kelas
		</h2>
	</b>
</center>
<pre style="font-size: 30px">
<?php 

		$sql = "SELECT * from  tbl_walikelas where nama_login='$nama_wali'";
		$rs=$this->db->query($sql);
		foreach ($rs->result() as $row) {

			?>
	Nama 			: <?php echo $row->nama_walikelas; ?> 
	Nip  			: <?php echo $row->nip; ?>

	Nama Login 		: <?php echo $row->nama_login ?>

	Password Login     	: <?php echo $row->password_login ?> 
<?php

			
		}

 ?>
</pre>
