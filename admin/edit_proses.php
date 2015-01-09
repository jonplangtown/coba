<?php
include "../koneksi.php";
// EDIT record dari tabel:
$sql='
UPDATE
	data_peserta
SET
	
	no_pendaftaran="'. $_POST[ 'no_pendaftaran']. '" ,
	nama_peserta="'. $_POST[ 'nama_peserta']. '" ,
	no_telp="'. $_POST[ 'no_telp']. '",
	kota="'. $_POST[ 'kota']. '",
	alamat="'. $_POST[ 'alamat']. '",
	jenis_kel="'. $_POST[ 'jenis_kel']. '",
	tanggal=NOW()
WHERE
	id="'. $_POST[ 'id']. '"
';
mysql_query($sql);
header("location:admin.php");
?>
