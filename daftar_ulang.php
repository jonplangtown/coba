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
					<span>Daftar Ulang Photo Competation</span>				</div>
		  <div>
					<a href="" class="about">About</a>
									
					<div>
							<?php require( 'koneksi.php');
$kode= $_GET[ 'id'];
$data= mysql_fetch_array( mysql_query(
	'SELECT * FROM data_peserta WHERE id="'. $kode. '";'
))

?>
	  <fieldset>
<legend>Form Daftar Ulang </legend><br/>
<form action="submitdaftar.php" method="post" id="form" enctype="multipart/form-data"> 
<!--kode : <input type="text" name="id" /><br-->
<!--tanggal : <input type="text" name="tanggal" /><br /-->
<!--No Pendaftaran :--> <input type="hidden" name="no_pendaftaran" value="<?php echo( $data[ 'no_pendaftaran']) ?>"><!--br-->
Nama Peserta :<br/>
<input type="text" name="nama_peserta" value="<?php echo( $data[ 'nama_peserta']) ?>" placeholder="Nama Peserta" required=""><br/>
<br/>
Rekening Bank : <br/>
<input type="text" name="rekening" placeholder="No Rekening Bank" required=""><br/>
<br/>
Bank :<br/>
<input type="text" name="bank" placeholder="" required=""><br/>
<br/>
Waktu Transfer :<br/>
<input type="text" name="w_transfer" placeholder="dd-mm-yyyy __:__" required=""><br/>
<br/>
Jumlah :<br/>
<input type="text" name="jumlah" placeholder="" required=""><br/>
<br/>
Keterangan :<br/>
<textarea name="keterangan" rows="10" cols="46" placeholder="Keterangan ......" ></textarea><br/>
<br/> 

<input type="submit" value="SIMPAN" class="button" onclick="alert('Data Tersimpan')">
<input type="reset" value="Reset" class="button">

</form>

</fieldset>
					
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