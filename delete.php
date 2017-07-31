<?php
require_once('connect.php');

$slp = $_POST ["sloupec"];
$hdn =$_POST["hodnota"];

$stmt = mysqli_prepare($conn, "DELETE FROM Osoby WHERE $slp=?");

mysqli_stmt_bind_param ($stmt, 's', $hdn);

mysqli_stmt_execute($stmt);

printf ("%d Row deleted.", mysqli_stmt_affected_rows($stmt));

?>