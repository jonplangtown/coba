<?php
 $host="localhost";
 $user="root";      
 $passwd="123";
 $database="jif";
 $con=mysql_connect($host,$user,$passwd);
 if (!$con)
    die("koneksi gagal...");
 //else
 //   echo "koneksi berhasil...";
  $db=mysql_select_db($database); 
  if (!$db)
    die("database gagal...");
 //else
 //   echo "database berhasil dibuka";
?>
