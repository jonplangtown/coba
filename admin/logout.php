<?php
session_start();
unset($_POST['username']);
session_destroy();
{
echo "<script>window.location = 'login.php';</script>";
}
?>

