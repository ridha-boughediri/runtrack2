<?php
$con=mysqli_connect('localhost', 'root', '', 'jour08');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con, "SELECT *,SUM(capacité) as capacite_totale FROM `salles`;");

echo "<table border='1'>
<tr>
<th>id</th>
<th>capacite_totale</th>
<th>nom</th>
<th>ide_etage</th>
<th>capacité</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['capacite_totale'] . "</td>";
echo "<td>" . $row['nom'] . "</td>";
echo "<td>" . $row['ide_etage'] . "</td>";
echo "<td>" . $row['capacité'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>capacite totale</title>
</head>
<body>

<?php while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['capacite_totale'] . "</td>";
echo "<td>" . $row['nom'] . "</td>";
echo "<td>" . $row['ide_etage'] . "</td>";
echo "<td>" . $row['capacité'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>

</body>
</html>