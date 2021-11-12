<?php

var_dump($_POST);

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
} else {
    $username = "";
    $password = "";
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
        <input type="text" name="username" id="" placeholder="Pseudo">
        <input type="text" name="password" id="" placeholder="Mots de passe">
        <input type="submit" name="submit" value="Envoyer">
    </form>

    <table>
        <tr>
            <th>Argument:</th>
            <th>Valeur:</th>
        </tr>
        <tr>
            <td>Pseudo:</td>
            <td><?php echo  $username; ?></td>
        </tr>
        <tr>
            <td>Mot de passe :</td>
            <td><?php echo  $password; ?></td>
        </tr>
    </table>
</body>

</html>