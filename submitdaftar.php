<?php
include ('koneksi.php');
if (!$con)
	{
	die('Could not connect: ' . mysql_error());
	}
	
mysql_select_db("jif", $con);
$sql = "INSERT INTO detail_peserta( id, tanggal, no_pendaftaran, nama_peserta, rekening, bank, w_transfer, jumlah, keterangan)
VALUES
('',NOW(),'$_POST[no_pendaftaran]','$_POST[nama_peserta]','$_POST[rekening]','$_POST[bank]','$_POST[w_transfer]','$_POST[jumlah]','$_POST[keterangan]')";

if (!mysql_query($sql,$con))
	{
	die('Error ' . mysql_error());
	}
	
if ($sql) {
	header('Location:index.html');
	
}


mysql_close($con);
?>