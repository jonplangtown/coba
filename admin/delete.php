<?php
include "../koneksi.php";
$user=$_GET["id"];
// hapus record dari tabel:
$sql="delete from data_peserta where id=$user";
mysql_query($sql);
header("location:admin.php");
?>
