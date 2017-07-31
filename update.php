<?php
require_once('connect.php');

$a =$_POST["a"];
$b =$_POST["b"];
$c =$_POST["c"];
$d =$_POST["d"];


$stmt = mysqli_prepare($conn,"UPDATE Osoby SET $a=? WHERE $c=?");

mysqli_stmt_bind_param($stmt, 'ss', $b, $d);

mysqli_stmt_execute($stmt);

printf ("%d Row updated.", mysqli_stmt_affected_rows($stmt));
?>