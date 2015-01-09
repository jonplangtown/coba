<?php
include ('koneksi.php');

$query = "select * from data_peserta";
$hasil = mysql_query($query) or die (mysql_error());
$data = mysql_fetch_array($hasil);
$idMax = $data['no_pendaftaran'];
$noUrut = (int) substr($idMax, 9, 4);
$mboh = $noUrut + 1;

$newID = ("JIF") . sprintf("%04s", $mboh);


// $jif ="JIF";
// $tahun = "2013";
//$no = $jif."-".$tahun."-";

if (!$con)
	{
	die('Could not connect: ' . mysql_error());
	}
	
mysql_select_db("jif", $con);
$sql='INSERT INTO data_peserta VALUES(
	"",
	NOW(),
	'JIF-2013-$newID',
	"'.$_POST['nama_peserta'].'",
	"'.$_POST['no_telp'].'",
	"'.$_POST['kota'].'",
	"'.$_POST['alamat'].'",
	"'.$_POST['jenis_kel'].'",
	"'.$_FILES['gambar']['name'].'"
)';
$que= mysql_query($sql);
$up= move_uploaded_file( $_FILES[ 'gambar'][ 'tmp_name'], $_FILES[ 'gambar'][ 'name']);
if($que== TRUE&& $up== TRUE) header("location:data.php");
else echo( mysql_error());
?>