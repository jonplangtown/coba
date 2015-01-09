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
<div table width="700" align="right">
<tr><td><form name="form1" method="post" action="logout.php">
    <input type="submit" name="Submit" value="Logout"/>
    <h2 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data peserta Kontes Pesona Budaya</h2>
	
						


	<tr style="width:800">	  </tr>                        
						<div align="center"></div>
						<table border="1" width="1200px" class="zebra" align="center">
					
						<tbody>
						  <tr style="width:800">
						    <th>Tanggal Daftar</th><th>No Peserta</th><th>Nama Peserta</th><th>NO Telpon</th><th>Kota</th><th>Alamat</th><th>Jenis Kelamin</th><th>Edit</th><th>Delete</th></tr>


<?php 
include "../koneksi.php";
   $sql="select * from data_peserta";
   $hasil=mysql_query($sql);
  

  
   while ($rec=mysql_fetch_row($hasil))
   {
	echo "<tr>";
		echo "
		<td width=90>$rec[1]</td>
		<td>$rec[2]</td>
		<td>$rec[3]</td>
		<td>$rec[4]</td>
		<td>$rec[5]</td>
		<td>$rec[6]</td>
		<td>$rec[7]</td>
		<td><a href=edit.php?id=$rec[0]><img src=../images/edit1.png width=40 height=40 /></td>
		<td><a href=delete.php?id=$rec[0]><img src=../images/delet.png width=40 height=40 /></td>
		</td>";
		
		}
		
	echo "</td>";
	echo "</table>";

	 


?></div>
<div><h2 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Peserta Telah Melakukan Daftar Ulang Kontes Pesona Budaya</h2>
						


	<tr style="width:800">	  </tr>                        
						<div align="center"></div>
						<table border="1" width="1200px" class="zebra" align="center">
					
						<tbody>
						  <tr style="width:800">
						    <th>Tanggal Daftar</th><th>No Peserta</th><th>Nama Peserta</th><th>Rekening</th><th>Bank</th><th>Waktu Transfer</th><th>Jumlah</th><th>Keterangan</th></tr>


<?php 
include "../koneksi.php";
   $sql="select * from detail_peserta";
   $hasil=mysql_query($sql);
  

  
   while ($rec=mysql_fetch_row($hasil))
   {
	echo "<tr>";
		echo "
		<td >$rec[1]</td>
		<td>$rec[2]</td>
		<td>$rec[3]</td>
		<td>$rec[4]</td>
		<td>$rec[5]</td>
		<td>$rec[6]</td>
		<td>$rec[7]</td>
		<td>$rec[8]</td>
		
		</td>";
		
		}
		
	echo "</td>";
	echo "</table>";

	 


?></div>

</body>
</html>