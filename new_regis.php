<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Java Photo Competation</title>
	<link rel="shortcut icon" href="images/logo.png" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style> 
    .button {
 background-color:rgb(0,165,240);
 border:1px solid rgba(0,0,0,0.2);
 border-radius:4px 20px 4px 20px;
 padding:10px 15px;
 margin:10px;
 box-shadow:0 0 0 1px rgba(255,255,255,0.4) inset,0px 1px rgb(255,255,255);
 color:rgb(255,255,255);
 display:inline-block;
 font:bold normal 16px Arial,Helvetica,sans-serif;
 text-shadow:0 -1px rgba(0,0,0,0.2);
 cursor:pointer;
}
.button:hover {
 box-shadow:0 0 0 1px rgba(255,255,255,0.4) inset,0 1px #FFF,0 0 0 30px rgba(255,255,255,0.21) inset;
 -webkit-box-shadow:0 0 0 1px rgba(255,255,255,0.4) inset,0 1px #FFF,0 0 0 30px rgba(255,255,255,0.21) inset;
 -moz-box-shadow:0 0 0 1px rgba(255,255,255,0.4) inset,0 1px #FFF,0 0 0 30px rgba(255,255,255,0.21) inset;
 background-color:rgba(0,165,240,.9);
}
.button:active,.button:focus {
 -moz-box-shadow:0 0 0 1px rgba(255,255,255,0.21) inset,0 1px #fff,0px 0 10px rgba(0,0,0,0.21) inset;
 -webkit-box-shadow:0 0 0 1px rgba(255,255,255,0.21) inset,0 1px #fff,0px 0 10px rgba(0,0,0,0.21) inset;
 box-shadow:0 0 0 1px rgba(255,255,255,0.21) inset,0 1px #fff,0px 0 10px rgba(0,0,0,0.21) inset;
 background-color:rgba(0,165,240,.9);
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
					<li class="current">
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
					<span>Pendaftaran Kontes Foto</span>				</div>
		  <div>
					<a href="" class="about">About</a>
									
					<div>
	  <fieldset>
<legend>Form Pendaftaran </legend><br/>
<form action="data.php" method="post" id="form" enctype="multipart/form-data"> 
<!--kode : <input type="text" name="id" /><br /-->
<!--tanggal : <input type="text" name="tanggal" /><br /-->
<!--No Pendaftaran : <input type="text" name="no_pendaftaran" value="<?php echo $newID; ?>"><br-->
Nama Peserta :<br/>
<input type="text" name="nama_peserta" placeholder="Nama Peserta" required=""><br/>
<br/>
No Telpon : <br/>
<input type="text" name="no_telp" placeholder="No Telpon Peserta" required=""><br/>
<br/>
Kota :<br/>
<input type="text" name="kota" placeholder="Kota Peserta" required=""><br/>
<br/>
Alamat:<br/>
<textarea name="alamat" rows="10" cols="46" placeholder="Masukkan Alamat Peserta ......" ></textarea><br/>
<br/> 
Jenis Kelamin :<br/>
<select name="jenis_kel">
<option value="Laki-Laki">Laki-Laki</option>
<option value="Perempuan">Perempuan</option>
</select>
<br/>

<input type="submit" value="SIMPAN" class="button">
<input type="reset" value="Reset" class="button">
<a href="daftarulang1.php" class="button">Daftar Ulang</a>

</form>

</fieldset>

<?php 
// koneksi ke mysql 
mysql_connect("localhost", "root", "123"); 
mysql_select_db("jif"); 

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