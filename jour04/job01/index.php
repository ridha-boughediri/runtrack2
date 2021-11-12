<?php
if (isset($_GET["submit"])) {
    $username = $_GET["username"];
    $password = $_GET["password"];

    echo "username:" . $username . "<br>";
    echo "password:" . $password . "<br>";

    for ($i = 0; isset($username[$i]); $i++) {
    }

    for ($j = 0; isset($password[$j]); $j++) {
    }

?>
    <br><br>
<?php

    echo "username:" . $i . "<br>";
    echo "password:" . $j . "<br>";
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
        <input type="text" name="username" id="" placeholder="Pseudo">
        <input type="text" name="password" id="" placeholder="Mots de passe">
        <input type="submit" name="submit" value="Envoyer">
    </form>
</body>

</html>