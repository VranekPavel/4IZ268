<?php
require_once('connect.php');


$sql = "SELECT * FROM Osoby";
$result = mysqli_query($conn, $sql);
$sql1 = "show columns from Osoby";
$result1 = mysqli_query($conn, $sql1);

echo "<table class=\"table table-striped\">". "<thead>"."<tr>";
while ($head=mysqli_fetch_assoc ($result1)){
echo "<th>". $head["Field"]. "</th>";
}
echo "</thead>"."</tr>";
if (mysqli_num_rows($result) > 0) {
    // output data of each row


    while($row = mysqli_fetch_assoc	($result)) {
        echo "<tr> " . "<td>" .$row["ID"]. "</td>" . "<td>" .$row["Jmeno"]. "</td> " ."<td>". $row["Prijmeni"]."</td>"."<td>".
		 $row["Vek"]. "</td>"."<td>". $row["Nick"]."</td>"."<td>".$row["Fakulta"]."</td>"."<td>".$row["Semestr"]."</td>"."</tr>";
    }
	echo "</table>";
} else {
    echo "";
}

mysqli_close($conn);
?>