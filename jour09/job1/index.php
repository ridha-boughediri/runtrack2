<?php

$bdd = mysqli_connect('localhost', 'root', '', 'jour08');
$req = mysqli_query($bdd, 'SELECT * FROM etudiants');
$res = mysqli_fetch_all($req);
$rescount = mysqli_num_rows($req);
var_dump($rescount);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB 01</title>
</head>

<body>
    <table>
        <thead>

            <tr>
                <th>prenom</th>
                <th>nom</th>
                <th>naissance</th>
                <th>sexe</th>
                <th>email</th>
            </tr>

        </thead>
        <tbody>

            <?php for ($i = 0; $i < $rescount; $i++) {  ?>
                <tr>
                    <th><?php echo $res[$i][1] ?></th>
                    <th><?php echo $res[$i][2] ?></th>
                    <th><?php echo $res[$i][3] ?></th>
                    <th><?php echo $res[$i][4] ?></th>
                    <th><?php echo $res[$i][5] ?></th>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>