<?php

if (isset($_POST["submit"])) {
    $largeur = $_POST["largeur"];
    $hauteur = $_POST["hauteur"];
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
    <form action="" method="POST">
        <input type="text" name="largeur" id="" placeholder="largeur">
        <input type="text" name="hauteur" id="" placeholder="hauteur">
        <input type="submit" name="submit" value="Envoyer">
    </form>
</body>

</html>