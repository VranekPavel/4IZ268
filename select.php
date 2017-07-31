<?php
require_once('connect.php');

$sql1 = "show columns from Osoby";
$result1 = mysqli_query($conn, $sql1);

echo "<table class=\"table table-striped\">". "<thead>"."<tr>";
while ($head=mysqli_fetch_assoc ($result1)){
echo "<th>". $head["Field"]. "</th>";
}
echo "</thead>"."</tr>";

$sloupec = $_GET["button"];
$hodnota = $_GET["input"];

$stmt = mysqli_prepare($conn, "SELECT * FROM Osoby WHERE $sloupec = ?");

mysqli_stmt_bind_param($stmt, "s", $hodnota);

mysqli_stmt_execute($stmt);

mysqli_stmt_bind_result ($stmt, $ID, $Jmeno, $Prijemni, $Vek, $Nick, $Fakulta, $Semestr);


	while (mysqli_stmt_fetch($stmt)){
	printf("<tr><td>%d</td> <td>%s</td> <td>%s</td> <td>%d</td> <td>%s</td> <td>%s</td> <td>%d</td></tr>", $ID, $Jmeno, $Prijemni, $Vek, $Nick, $Fakulta, $Semestr);
	}
	echo "</table>";
mysqli_stmt_close($stmt);

mysqli_close($conn);


?>