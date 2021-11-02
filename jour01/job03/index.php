<?php 
    $boolean = true;
    $int = 12;
    $string = "hello";
    $flot = 12.3;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux</title>
</head>
<body>
    <table>
        <tr>
            <th>type</th>
            <th>nom</th>
            <th>valeur</th>
        </tr>
        <tr>
            <td><?php echo $boolean; ?></td>
            <td><?php echo $string; ?></td>
            <td><?php echo $int; ?></td>
        </tr>
    </table>
</body>
</html>