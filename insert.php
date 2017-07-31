<?php
require_once('connect.php');

$jmeno =$_REQUEST["jmeno"];
$prijmeni =$_POST["prijmeni"];
$vek =$_POST["vek"];
$xname =$_POST["xname"];
$fakulta =$_POST["fakulta"];
$semestr =$_POST["semestr"];

$query ="INSERT INTO Osoby (Jmeno, Prijmeni, Vek, Nick, Fakulta, Semestr) VALUES (?,?,?,?,?,?)";

if ($stmt = mysqli_prepare($conn,$query)){

mysqli_stmt_bind_param($stmt, 'ssissi', $jmeno, $prijmeni, $vek, $xname,$fakulta,$semestr);

mysqli_stmt_execute($stmt);

printf("%d Row inserted.", mysqli_stmt_affected_rows($stmt));

mysqli_stmt_close($stmt);
}

mysqli_close($conn);

?>