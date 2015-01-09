<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Java Photo Competation</title>
	<link rel="shortcut icon" href="images/logo.png" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
.a {padding:0px 170px 0px 50px;}
.b {background-color:;}

table[border="1"] {
border-collapse:collapse;
font:normal 12px Verdana,Arial,Sans-Serif;
color:#333;
}
table[border="1"] tr {
background: #996600;
}
table[border="1"] th, table[border="1"] td {
vertical-align:top;
padding:5px 10px;
border:2px solid #fff;
}
table[border="1"] tr:nth-child(even) {
background: #99CC66;
}
table[border="1"] th {
background: #663300;
border-radius: 10px 10px 0px 0px; 
-moz-border-radius: 10px 10px 0px 0px; 
-webkit-border-radius: 10px 10px 0px 0px;
color:#fff;
font-weight:bold;
}

.zebra tr:nth-child(even) {
     background-color: ;
}
.zebra tr:nth-child(odd) {
     background-color: #99FF99;
}
.zebra tr:hover {
     background-color: #CCCCCC;
}
tr {
  color:black;
  font:normal 14px Arial, Helvetica, sans-serif;
  -webkit-transition:All 1s ease;
  -moz-transition:All 1s ease;
  -o-transition:All 1s ease;
  transition:All 1s ease;
}
tr:nth-child(even) {
  color:green;
}
tr:hover, tr:nth-child(even):hover {
  color:white;
  text-shadow: 0px 0px 15px yellow;
}

</style>
</head>
<body>
	<div id="page">
		<div>
			<div id="header">
				<a href="index.html"><img src="images/logo.png" alt="Image" width="194" height="105"></a>
				<ul class="current">
					<li >
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="pilih.php">Pendaftaran</a>
					</li>
					<li>
						<a href="aboutus.php">About Us</a>
					</li>
                    <li>
						<a href="about.php">Kontak Kami</a></li>
              </ul>
			</div>
			<div id="body">
				<div id="figure">
					<img src="images/headline-about.jpg" alt="Image">
					<span>Photo Competation Daftar Ulang</span>				</div>
		  <div>
					<a href="" class="about">About</a>
									
					<div>
                    <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATA PESERTA JAVA PHOTO COMPETETION </h2>
						<table border="1" width="600" class="zebra" align="center">
						<tbody>

	


<?php require( 'koneksi.php');
$kode= $_GET[ 'id'];
$cek= mysql_fetch_array( mysql_query(
	'SELECT * FROM detail_peserta WHERE id="'. $kode. '";'
))

?>
<tr><td>Nomer Pendaftaran :</td>
<td><?php echo( $cek[ 'no_pendaftaran']) ?></td></tr>
<tr><td>Nama Peserta :</td>
<td><?php echo( $cek[ 'nama_peserta']) ?></td></tr>
<tr><td>Waktu Transfer :</td>
<td><?php echo( $cek[ 'w_transfer']) ?></td></tr>
<tr><td>Jumlah :</td>
<td><?php echo( $cek[ 'jumlah']) ?></td></tr>
 </table>
					</div>
				</div>
			</div>
			<div id="footer">
				<div>
					<a href="index.html"><img src="images/logo2.png" alt="Image"></a>
					<p class="footnote">&nbsp;</p>
			  </div>
				<div class="section">
					<ul>
					<li>
						<a href="index.html">Home</a>
					</li>
					<li class="current">
						<a href="pilih.php">Pendaftaran</a>
					</li>
					<li>
						<a href="aboutus.php">About Us</a>
					</li>
                    <li>
						<a href="about.php">Kontak Kami</a></li>
                    </ul>
					<div id="connect">
						<!--a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" id="twitter">Twitter</a-->
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>