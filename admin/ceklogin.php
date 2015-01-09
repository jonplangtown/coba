<?php
$host="localhost"; // biasanya localhost
$username="root";
$password="123";
$db="jif"; 
 
 
mysql_connect("$host", "$username", "$password")or die("koneksi gagal");
mysql_select_db("$db")or die("database tidak bisa dipilih");
 
// mengambil data username dan password dari index.php
// bila form method nya GET maka ganti POST menjadi GET
$username=$_POST['username'];
$password=$_POST['password'];
 
// untuk keamanan
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
 
$sql="SELECT * FROM member WHERE username='$username' and password='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
 
if($count==1){
echo "<script>window.location = '../admin/admin.php';</script>";
}
?>