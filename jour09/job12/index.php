<?php
$con=mysqli_connect('localhost', 'root', '', 'jour08');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con, "SELECT prenom, nom FROM etudiants WHERE naissance >= '1998-01-01' AND naissance<= '2018-01-01';
");

echo "<table border='1'>
<tr>
<th>nom</th>
<th>prenom</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['nom'] . "</td>";
echo "<td>" . $row['prenom'] . "</td>";
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
    <title>majeur</title>
</head>
<body>

<?php while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['nom'] . "</td>";
echo "<td>" . $row['prenom'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>

</body>
</html>