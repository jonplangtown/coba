<?php
include ('koneksi.php');

$folder = "gambar";
$tmp_name = $_FILES["gambar"]["tmp_name"];
$name = $folder."/".$_FILES["gambar"]["name"];

//kode untuk upload ke folder gambar
move_uploaded_file($tmp_name, $name);




$query = "select max(no_pendaftaran) as maxID from data_peserta";
$hasil = mysql_query($query) or die (mysql_error());
$data = mysql_fetch_array($hasil);
$idMax = $data['maxID'];
$noUrut = (int) substr($idMax, 9, 4);
$mboh = $noUrut + 1;

$newID = "JIF"."-"."2013"."-".sprintf("%04s", $mboh);


// $jif ="JIF";
// $tahun = "2013";
//$no = $jif."-".$tahun."-";

if (!$con)
	{
	die('Could not connect: ' . mysql_error());
	}
	
mysql_select_db("jif", $con);
$sql = "INSERT INTO data_peserta( id, tanggal, no_pendaftaran, nama_peserta, no_telp, kota, alamat, jenis_kel, gambar)
VALUES
('',NOW(),'$newID','$_POST[nama_peserta]','$_POST[no_telp]','$_POST[kota]','$_POST[alamat]','$_POST[jenis_kel]','$name')";
$que= mysql_query($sql);
//if($que== TRUE&& $up== TRUE) header("location:data.php");
//else echo( mysql_error());
mysql_close($con);
?>


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
  .style1 {
	color: #FF0000

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
                   
						<table border="1" width="600" class="zebra" align="center">
						<tbody>

	<tr><th>No Peserta</th><th>Nama Peserta</th><th>Aksi</th></tr>


<?php 
include "koneksi.php";
   $sql="select * from data_peserta where no_pendaftaran = '$newID'";
   $hasil=mysql_query($sql);
  

  
   while ($rec=mysql_fetch_row($hasil))
   {
	echo "<p>Selamat, Pengisian formulir pendaftaran telah berhasil anda lengkapi.</p>
                    <p>Tahap selanjutnya : </p>
                    <p>
                        <li>Melakukan transaksi pembayaran. Pembayaran dapat dilukakan secara transfer dengan nomor rekening yang telah kami sertakan / anda dapat melihatnya pada data dibawah ini.</li>
                        <li>Anda di beri waktu paling lambat lima (5) hari dari hari pendaftaran hingga hari terakhir pendaftaran untuk melakukan pembayaran.</li>
                        <li>Jika dalam lima (5) hari anda belum melakukan pembayaran maka data tersebut akan di hapus.</li>
                    	<li>Langkah Selanjutnya <a href=daftar_ulang.php?id=$rec[0] class=style1>Daftar Ulang &raquo;</a></li>
						<h2 class=style1>Rekening : 3546664982 a.n Mia Suryaningsih ( Danamon )</h2>
                	</p>";
	echo "<tr>";
		echo "
		<td>$rec[2]</td>
		<td>$rec[3]</td>
		<td><a href=daftar_ulang.php?id=$rec[0] class=style1>Daftar Ulang</a>	</td>
		</td>";
		
		}
		
	echo "</td>";
	echo "</table>";
	echo "</form>";
	 


?>
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
						<a href="index.html">Home</a>					</li>
					<li class="current">
						<a href="pilih.php">Pendaftaran</a>					</li>
					<li>
						<a href="aboutus.php">About Us</a>					</li>
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