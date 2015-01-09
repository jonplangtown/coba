<?php
mysql_connect("localhost","root","");
mysql_select_db("jif");

$cari = trim($_POST['cari']);
$query = mysql_query("SELECT * FROM data_peserta WHERE no_pendaftaran LIKE '%$cari%'");
while($hasil = mysql_fetch_array($query)){
header("location:daftar_ulang.php?id=$hasil[0]");
}
echo "</ul>";
?>