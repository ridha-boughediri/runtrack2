<?php


if (isset($_GET["submit"])) {
    $nombre = $_GET["nombre"];
    if ($nombre % 2 == 1) {
        echo "$nombre est impaire";
    } else {
        echo "$nombre est paire";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <input type="number" name="nombre" id="" placeholder="nombre">
        <input type="submit" name="submit" value="Envoyer">
    </form>
</body>

</html>