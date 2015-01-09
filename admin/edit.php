<html>
<head><title>Java Photo Competation</title>
	<link rel="shortcut icon" href="../images/logo.png" />

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

.xx {background-color: #333333;
	height:100px;
}
    .style1 {color: #FF0000}
    .style2 {
	font-size: 24px;
	color: #FF0000;
}
    </style></head>
<body>
<div class="xx" >
  <div align="left" class="style1"><table width="643">
    <tr><td width="171"><img src="../images/logo.png" width=110 height=99></td><td width="460"> <span class="style2">Admin Java Photo Competation</span></td>
  </table></div>
</div>
<div><h2 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATA PESERTA JAVA PHOTO COMPETITION</h2>
						


	<tr style="width:800">	  </tr>                        
						<div align="center"></div>
						<?php
						require( '../koneksi.php');
						$kode= $_GET[ 'id'];
$data= mysql_fetch_array( mysql_query(
	'SELECT * FROM data_peserta WHERE id="'. $kode. '";'
))

?>
						<fieldset>
<legend>Form Edit</legend><br/>
<form action="edit_proses.php" method="post" id="form" enctype="multipart/form-data"> 
<!--ID :--> <input type="hidden" name="id" value="<?php echo( $data[ 'id']) ?>"><!--br-->
<!--tanggal :--> <input type="hidden" name="tanggal" value="<?php echo( $data[ 'tanggal']) ?>"><!--br-->
<!--No Pendaftaran :--> <input type="hidden" name="no_pendaftaran" value="<?php echo( $data[ 'no_pendaftaran']) ?>"><!--br-->
Nama Peserta :<br/>
<input type="text" name="nama_peserta" value="<?php echo( $data[ 'nama_peserta']) ?>" placeholder="Nama Peserta" required=""><br/>
<br/>
Nomor Telpon : <br/>
<input type="text" name="no_telp" value="<?php echo( $data[ 'no_telp']) ?>" placeholder="" required=""><br/>
<br/>
Kota :<br/>
<input type="text" name="kota" value="<?php echo( $data[ 'kota']) ?>" placeholder="" required=""><br/>
<br/>
Alamat :<br/>
<input type="text" name="alamat" rows="10" cols="46" placeholder="" value="<?php echo( $data[ 'alamat']) ?>" /><br/>
<br/>
Jenis Kelamin :
<select name="jenis_kel">
<option value="<?php echo( $data[ 'jenis_kel']) ?>">Laki-Laki</option>
<option value="<?php echo( $data[ 'jenis_kel']) ?>">Perempuan</option>
</select><br/><br/>
<input type="submit" value="SIMPAN" class="button" onclick="alert('Data Tersimpan')">
<input type="reset" value="Reset" class="button">

</form>

</fieldset></div>

</body>
</html>