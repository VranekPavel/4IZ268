<?php 
$server = $_POST["server"];
$user = $_POST["user"];
$pass = $_POST["pass"];
$db = $_POST["db"];

$myfile = fopen("config.ini","w") or die ("Nelze otevшнt soubor");

fwrite($myfile, "server = " . $server. "\r\n");
fwrite($myfile, "username = ". $user. "\r\n");
fwrite($myfile, "password = ". $pass. "\r\n");
fwrite($myfile, "db = ".$db);
fclose($myfile);
  
?>