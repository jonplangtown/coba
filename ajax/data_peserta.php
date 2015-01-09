<?php

require_once('../includes/koneksi.php');

$open = $mysqli->query("SELECT ds.no_pendaftaran as no_p, dp.nama_sekolah as nm_s FROM data_peserta dp LEFT JOIN detail_peserta ds ON dp.no_pendaftaran = ds.no_pendaftaran WHERE dp.no_pendaftaran = '".$_POST['id']."'")or die($mysqli->error);
while($data = $open->fetch_array())
{
	$kode[] = $data;
}
echo json_encode($kode);
?>