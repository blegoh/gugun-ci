<!DOCTYPE html>
<html>
<head>
	<title>SELAMAT DATANG DI WEBSITE SMAN 1 DAYEUHKOLOT</title>
	<base href="<?php echo base_url() ?>" />
	<link rel="shortcut icon" href="asset/icon.png" type="image/x-icon" />
	<meta content="IE=EmulateIE7" http-equiv="X-UA-Compatible" />
	<title>SELAMAT DATANG DI WEBSITE SMAN 1 DAYEUHKOLOT</title>
	<script>
var tit = document.title;
var c = 0;
function writetitle() {
document.title = tit.substring(0,c);
if(c==tit.length)
{
c = 0;
setTimeout("writetitle()", 2000)
}
else {
c++;
setTimeout("writetitle()", 100)
}
}
writetitle()
</script>
</head>
<style type="text/css">
	body{
		background: url(asset/Backgroud.jpg);
		padding: 0px;
		margin: 0px;
		bottom: 0px;
	}
	a{
		text-decoration: none;
		text-align: center;
	}
	table{
		border-radius: 5px;
		border: 0.5px solid black;
	}
</style>
<body>
<center>
<br/>
<img src="asset/skolah.JPG" width="80%" height="200px" >

<hr/>
<h1 style="color:yellow">
	SELAMAT DATANG DI WEBSITE SMAN 1 DAYEUHKOLOT

</h1>
<h5 style="color:#e1e1e1">
Address : Jl. Kol. Amir Hamzah No. 26 Rt. 24 Kel. Selamat Kec. Telanaipura JAMBI Kode Pos:36129 Telp. (0741) 66594 Email: smkixlurah2.kotajambi@gmail.com
</h5>
<iframe scrolling="no" frameborder="no" clocktype="html5" style="overflow:hidden;border:0;margin:0;padding:0;width:120px;height:40px;"src="http://www.clocklink.com/html5embed.php?clock=004&timezone=local&color=green&size=120&Title=&Message=&Target=&From=2016,1,1,0,0,0&Color=green"></iframe>
<hr/>
</center>

<center>
<table align="center">
	<tr>
		<td width="400px;">
<a href="index.php/welcome">
<h1 style="color: yellow"><img src="asset/ofical.png" width="10%" >
HOME</h1>
</a></td>
<td width="400px;">
	
<a href="http://localhost/sekolah/" target="_blank" >
<h1 style="color: yellow"><img src="asset/siakad.png" width="10%" >
WEBSITE</h1>
</a>
</td>
<td>
	
<a href="index.php/admin" target="_blank">
<h1 style="color: yellow"><img src="asset/siakad.png" width="10%" >
SIAKAD</h1>
</a>
</td>
	</tr>

	<tr>
		<td>
<a href="http://localhost/sekolah/daftar.php" target="_blank">
<h1 style="color: yellow"><img src="asset/pmb.png" width="10%" >
PSB</h1>
</a></td>
<td>
	
<a href="index.php/super_admin" target="_blank">
<h1 style="color: yellow"><img src="asset/admin.png" width="10%" >
ADMIN</h1>
</a>
</td>
<td>
	
<!--<a href="index.php/e_learning">
<h1 style="color: yellow">&nbsp; &nbsp;<img src="asset/learning.png" width="10%" >
E-LEARNING</h1>
</a>-->
</td>
	</tr>

</table>
</center>
<center>
	<h6 style="color:#e1e1e1">Copyright &copy; 2016 Project : ASEP YUDI SURYONO</h6>
</center>
</body>
</html>